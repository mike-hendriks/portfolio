$(function(){
    // Initiate rellax script
    var rellax = new Rellax('.rellax');

    // Initiate all variables for glitch effect
    var tl = new TimelineMax({repeat: 0,repeatDelay: 3, delay: 1}),
        tl2 = new TimelineMax({repeat: -1,repeatDelay: 4, delay: 4}),
        glitch = $(".glitch"),
        top = $(".top")
        bottom = $(".bottom"),
        txt = $("#txt"),
        slide = $(".slide"),
        tv = $(".tv"),

    // Glitch effect 1
  	tl.to(glitch, 0.08, {skewX:60,ease: Power4.easeInOut})
        .to(glitch, 0.04, {skewX:0,ease: Power4.easeInOut})
        .to(glitch, 0.04, {opacity:0})
        .to(glitch, 0.04, {opacity:1})
        .to(glitch, 0.04, {x:-20})
        .to(glitch, 0.04, {x:0})
        .add("split", 0)

        .to(txt, 0, { scale:1.1},'split')
        .to(txt, 0, { scale:1}, "+=0.02")

        .to(top, 0.5, {x:-60,ease: Power4.easeInOut},'split')
        .to(bottom, 0.5, {x:60,ease: Power4.easeInOut},'split')
        .to(glitch, 0.08, { className: '-=greenShadow'},'split')
        .to(glitch, 0.1, { className: '+=redShadow'})

        .to(glitch, 0.02, {scaleY:1.1,ease: Power4.easeInOut})
        .to(glitch, 0.04, {scaleY:1,ease: Power4.easeInOut})

        .to(top, 0.02, {x:-20})
        .to(top, 0.04, {x:0})

        .to(slide, 1, {opacity:0.90, ease:Power2.easeInOut}, "+=.5")

    // Glitch effect 2
    tl2
        .to(glitch, 0.08, { className: '+=redShadow'},'split')
        .to(glitch, 0.1, { className: '-=greenShadow'})
        .to(glitch, 0.02, {scaleY:1.1,ease: Power4.easeInOut})
        .to(glitch, 0.04, {scaleY:1,ease: Power4.easeInOut})
        .to(top, 0.02, {x:-20})
        .to(top, 0.04, {x:0})
        .to(glitch, 0.08, { className: '+=redShadow'},'split');



    // Scrollfire
    var options = [
        {selector: '#case1', offset: 100, callback: function(el) {display_case(el)}},
        {selector: '#case2', offset: 200, callback: function(el) {display_case(el)}}
    ];
    Materialize.scrollFire(options);

    function display_case(el) {
        on_load = $(el).find('.on_load');
        $(on_load).animate({ width: "100%" }, 'fast');
        setTimeout(function(){
            $(el).find('.hidden').removeClass('hidden');
            $(el).find('img').addClass('z-depth-5');
            $(el).find('.content_container').addClass('z-depth-5');
            $(el).find('.content_container').css('background','#fff');
        },500);

        if ($(el).hasClass('right')) {
            $(on_load).delay('300').animate({ left: "110%" }, 'fast');
        } else {
            $(on_load).delay('300').animate({ right: "110%" }, 'fast');
        }
    }

    // Nav
    $('.burger_menu').on('click', function(){
        $(this).toggleClass('active');
        $('nav').toggleClass('active');
        // $('main').toggleClass('inactive');
        // $('body').toggleClass('menu_active');
    })

    $('nav a').on('click', function(){
        $('.burger_menu').toggleClass('active');
        $('nav').toggleClass('active');
    })


    // Smooth scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });

    // Contact form
    $('#contact-form').on('submit' ,function(e){
        e.preventDefault();
        var url = $(this).attr('action'),
            params = $(this).serialize();
        $.post(url, params, function(response){
            if (response === 'success') {
                M.toast('Your email has been send');
            } else {
                console.log(response);
            }
        })
    });

});
