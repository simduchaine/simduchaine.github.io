var WIN = $(window),
    menuLinks = $('.menu-links'),
    slide = $('.slide'),
    prev = $('.prev'),
    next = $('.next'),
    magicNumber = 60,
    selected = menuLinks.find('a.selected').parent().index(),
    slideLength = slide.length,
    count = $('.count'),
    current = count.find('ins:first-child'),
    total = count.find('ins:last-child');


$('#menu-link').click(function(){
	$('#menu, #layout').toggleClass('active');
	return false;
});

if (WIN.width() < 767) {
    $('#menu, #layout').removeClass('active');
} else {
    $('#menu, #layout').addClass('active');
}

menuLinks.find('a').click(function(e){
    e.preventDefault();
    var that = $(this),
        block = $(that.attr('href')),
        blockTop = block.offset().top - magicNumber;

    menuLinks.find('a').removeClass('selected');
    that.addClass('selected');
    selected = menuLinks.find('a.selected').parent().index();

    $('body, html').animate({scrollTop : blockTop}, magicNumber*10);
});

if ($('.content').length > 0) {
    $('.content').waypoint(function(direction) {
        var $links = menuLinks.find('a[href="#' + this.id + '"]');
        selected = menuLinks.find('a.selected').parent().index();
        $links.toggleClass('selected', direction === 'down');
    }, {
        offset: '100%'
    }).waypoint(function(direction) {
            var $links = menuLinks.find('a[href="#' + this.id + '"]');
            $links.toggleClass('selected', direction === 'up');
        }, {
            offset: function() {
                return -$(this).height() +200;
            }
        });
}

WIN.scroll(function(){
    if ($(this).scrollTop() == 0) {
        menuLinks.find('.general-part li:first-child a').addClass('selected').parent().siblings().find('a').removeClass('selected');
    }
});