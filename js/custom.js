(function ($, window, document, undefined) {
    var pluginName = "Sonoran",
        defaults = {
            locations: [46.808038, -71.242300],  // Lat-Lng position to center the map on
            zoom : 12,                          // Maps zoom ( 1 <= zoom <= 16 )
            sliderFx: 'fade',			        // Slider effect. Can be 'slide' or 'fade'
            sliderInterval: 8000,		        // Interval between image change. Set 0 to disable auto slideshow
            sliderSpeed: 500,			        // Speed of the slider effect in milliseconds
            countdownTo: '2015/03/15',	        // Change this in the format: 'YYYY/MM/DD'
            speedAnimation: 600,                // Default speed of the animation
            infoBoxName: 'Simon Duchaine - Stratège web',         // Write the actual name in InfoBox
            infoBoxImg: 'images/map-label.png', // Path for changing logo in map infoBox
            infoBoxDescription: '629-2 Père-Grenier<br>' +
                                'Québec, Québec<br>' +
                                'G1N 1V4',   // write the actual address in Infobox
            infoBoxUrl: 'http://simonduchaine.com/',      // write the actual url in InfoBox
            infoBoxUrlText: 'simonduchaine.com',      // write the url text
			mapMarker: 'images/map-marker.png', // path for changing map marker
			successText: 'Thanks. You have successfully subscribed. Please check email to confirm.', // text after successful subscribing
			errorText: 'Please, enter a valid email', // text, if email is invalid
            loop: true,                             // True or false loops the movie once ended.
            startAt: 0,                             // Set the seconds the video should start at.
            autoPlay: true,                         // True or false play the video once ready.
            showControls: false,                    // Show or hide the controls bar at the bottom of the page.
            addRaster: true,                       // Show or hide the background pattern image
            videoURL: 'http://youtu.be/rEk0AdJx9gw',// background video URL
            mute: true                              // video sound
        },
        WIN = $(window);

    // The plugin constructor
    function Plugin(element, options) {
        var that = this;
        that.element = $(element);
        that.options = $.extend({}, defaults, options);

        that.init();
        that.ytVideo();

        // onResize function
        WIN.resize(function(){
            that.footerRightWidth();
            that.mainHeight();
			that.canvas.height(WIN.height());
        });

        // onScroll function
        WIN.scroll(function(){
            if ($(this).scrollTop() > 100) // after scrolling 100px scrollTop arrow is visible
                $('#scrolltop').fadeIn();
            else
                $('#scrolltop').fadeOut();
        });

        // onLoad function
        WIN.load(function(){
            that.body.removeClass('loading');
            that.mapFunction();
            that.activate();
            that.footerRightWidth();
            that.mainHeight();
        });

    }

    Plugin.prototype = {
        init: function () {
            this.body = $(document.body);
            this.wrapper = $('#wrap');
            this.main = $('#main')
            this.header = $('#header');
            this.slider = $('#slides');
            this.sliderNav = $('.slides-navigation');
            this.timer = $('#countdown');
            this.scrollTop = $('#scrolltop');
            this.content = $('#content');
            this.maincontent = $('#maincontent');
            this.footer = $('#footer');
            this.newsletter = $('#newsletter');
			this.canvas = $('#map_canvas');
            this.subscribeForm = this.newsletter.find('form');
            this.icons = $('.icons');
            this.ytvid = $('#ytvideo');

            this.body.addClass('loading');
        },
        activate: function () {
            var instance = this;

            // Activate the slider
            if (this.slider.length == 1) {
                this.slider.superslides({
                    animation: instance.options.sliderFx,
                    play: instance.options.sliderInterval,
                    animation_speed: instance.options.sliderSpeed
                });
                if (this.slider.find('img').length <= 1) {
                    this.sliderNav.hide();
                }
            }

            // Run the countdown
            if (this.timer.length == 1) {
                this.timer.countdown(instance.options.countdownTo, function (event) {
                    $(this).html(event.strftime(
                        '<div><span>%D</span> <ins>Jour%!D</ins></div>' + '<div><span>%H<i>:</i></span><ins class="cd1">Décompte</ins></div>' + '<div><span>%M<i>:</i></span></div>' + '<div><span>%S</span></div>'+'<ins class="cd2">countdown</ins>'));
                });
            }

            // scrollTop function
            if (this.scrollTop.length == 1) {
                this.scrollTop.click(function(e){
                    $('html, body').stop(true,true).animate({ scrollTop: 0 }, instance.options.speedAnimation);
                    e.preventDefault();
                });
            }

            // Activate the subscribe form
            if(this.subscribeForm.length == 1) {
                this.subscribeForm.find('input[type=email]').on('keyup', function(){
                    if ($('.success-block').is(':visible'))
                        $('.success-block').css('display','none');
                });

                this.subscribeForm.validatr({
                    showall: true,
                    location: 'top',
                    template: '<div class="error-email">'+instance.options.errorText+'</div>',
                    valid: function(){
                        var form = instance.subscribeForm,
                            loader = form.find('.form-loader'),
                            msgwrap = form.next(),
                            url = form.attr('action'),
                            email = form.find('input[type=email]'),
                            data = form.serialize();

                        url = url.replace('/post?', '/post-json?').concat('&c=?');

                        var data = {};
                        var dataArray = form.serializeArray();

                        $.each(dataArray, function (index, item) {
                            data[item.name] = item.value;
                        });

                        $.ajax({
                            url: url,
                            data: data,
                            success: function(resp){
                                var successText = instance.options.successText;
                                function notHide(){ form.attr('style',' '); }

                                if(resp.result === 'success') {
                                    msgwrap.html('<p class="success">'+successText+'</p>');
                                    setTimeout(notHide, 0);
                                }
                                else {
                                    setTimeout(notHide, 0);
                                    var index = -1;
                                    var msg;
                                    try {
                                        var parts = resp.msg.split(' - ', 2);
                                        if (parts[1] === undefined) {
                                            msg = resp.msg;
                                        } else {
                                            var i = parseInt(parts[0], 10);
                                            if (i.toString() === parts[0]) {
                                                index = parts[0];
                                                msg = parts[1];
                                            } else {
                                                index = -1;
                                                msg = resp.msg;
                                            }
                                        }
                                    }
                                    catch (e) {
                                        index = -1;
                                        msg = resp.msg;
                                    }
                                    msgwrap.html('<p class="error">' + msg + '</p>');
                                }
                                loader.fadeOut();
                                form.slideUp(function () {
                                    msgwrap.slideDown();
                                });
                            },
                            dataType: 'jsonp',
                            error: function (resp, text) {
                                alert('Oops! AJAX error: ' + text);
                            }
                        });
                        return false;
                    }
                });
            }

            // action for click icons
            if (this.icons.length == 1){
                var a = this.icons.children();
				
				a.each(function(e){
					var url = $(this).attr('href');
					if ($(url).hasClass('none')){
						$('a[href="#'+$(url).attr('id')+'"]').hide();
					}					
				});
				
				if (!instance.canvas.length)
					$('a[href="'+instance.canvas.selector+'"]').hide();
					
				if (!instance.newsletter.length)
					$('a[href="'+instance.newsletter.selector+'"]').hide();
				
                a.on('click', function(){
                    var self = $(this),
                        topPos = $(self.attr('href')).offset().top;

                    $('html, body').animate({ scrollTop : topPos }, instance.options.speedAnimation);
					
                    return false;
                });

            }

        },
        ytVideo: function(){
            var instance = this,
                onMobile = false,
                full = instance.ytvid.find(".fullscreen-video");

            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
                onMobile = true;

            if( !onMobile && !instance.ytvid.hasClass('none') ) {
                full.mb_YTPlayer({
                    containment: instance.body,
                    loop: instance.options.loop,
                    startAt: instance.options.startAt,
                    autoPlay: instance.options.autoPlay,
                    showControls: instance.options.showControls,
                    addRaster: instance.options.addRaster,
                    videoURL: instance.options.videoURL,
                    mute: instance.options.mute
                });
                full.on("YTPStart",function(){
                    instance.slider.hide();
                    instance.sliderNav.hide();
                });

            } else {
                instance.ytvid.hide();
            }
        },
        mapFunction: function(){
            var that = this;
            var map;
            var x = that.options.locations[0];
            var y = that.options.locations[1];

			if (that.canvas.length == 1) {
			
				var myOptions = {
					zoom: that.options.zoom,
					scrollwheel: false,
					navigationControl: false,
					mapTypeControl: false,
					scaleControl: false,
					draggable: true,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					center: new google.maps.LatLng(x, y)
				};
				
				map = new google.maps.Map(document.getElementById('map_canvas'),
					myOptions);

				that.canvas.height(WIN.height());

				var image = that.options.mapMarker;
				var marker = new google.maps.Marker({
					position: map.getCenter(),
					map: map,
					icon: image
				});

				var boxText = document.createElement("div");
				boxText.innerHTML = "<div class='ib-inner'>" +
					"<img src='"+that.options.infoBoxImg+"' alt=''>" +
					"<article><p>" +
					"<strong>"+that.options.infoBoxName+"</strong>" +
					"<br>"+that.options.infoBoxDescription+"</p>" +
					"<a href='"+that.options.infoBoxUrl+"' target='_blank'>"+that.options.infoBoxUrlText+"</a>" +
					"</article>" +
					"</div>";

				var myOptions1 = {
					content: boxText,
					disableAutoPan: false,
					pixelOffset: new google.maps.Size(10, 0),
					boxClass: 'map-box',
					alignBottom: true,
					closeBoxURL: "images/map-close.png",
					pane: "floatPane"
				};

				var ib = new InfoBox(myOptions1);

				ib.open(map, marker);

				google.maps.event.addListener(marker, "click", function() {
					ib.open(map, marker);
				});
			}
        },
        footerRightWidth: function() {
            var instance = this,
                mcWidth = instance.maincontent.width(),
                winWidth = WIN.width(),
                cWidth = instance.content.width(),
                fpr = parseFloat(instance.footer.css('padding-right').replace('px',''));

            if (winWidth >= 768)
                instance.footer.find(' > .right-col').width(mcWidth + (winWidth - cWidth)/2 - fpr);
        },
        mainHeight: function(){
            var instance = this,
                winHeight = WIN.height() - 50,
                headerHeight = instance.header.height();
            if (instance.header.is(':visible')) {
                instance.main.css('minHeight', winHeight - headerHeight);
            } else {
                instance.main.css('minHeight', winHeight);
            }
        }
    };

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName,
                    new Plugin(this, options));
            }
        });
    };
})(jQuery, window, document);

(function ($) {
    $(document.body).Sonoran();
    $(function(){
        $(".player").mb_YTPlayer();
    });
})(jQuery);