$(document).ready(function () {
    "use strict";
    mixpanel.track("Page View");

    /*RSVP Form*/
    $("#form_rsvp").submit(function (e) {
        e.preventDefault();
        var name = $(this).find("input[name=name]").val();
        var phone = $(this).find("input[name=phone]").val();

        mixpanel.track("Enviou RSVP", {
            "Nome": name,
            "Telefone": phone
        });
        $(this).find("input[type=submit]").hide();
        $("div.alert.alert-success").show(500);
        return false;
    });

    /*ScrollR */
    if ($(window).width() > 1024) {
        var s = skrollr.init({
            forceHeight: false
        });
    }

    /*Gallery ColorBox */
    $('.gallery_txt a').colorbox({
        rel: 'gal',
        maxWidth: "100%",
    });

    /*Main Menu Button */
    $('.main_menu_btn').click(function (e) {
        $(this).toggleClass('main_menu_btn_open');
        var mainMenuBlock = $('.main_menu_block');
        mainMenuBlock.toggleClass('main_menu_block_open').fadeToggle();
        mainMenuBlock.find('.menu_wrapper').toggleClass('active');
        $('header .anim').toggleClass('active');
        e.preventDefault();
    });

    /* Section Background */
    $('section, .parallax').each(function () {
        var image = $(this).attr('data-image');
        if (image) {
            $(this).css('background-image', 'url(' + image + ')');
        }
    });

    /*Scroll Effect*/
    $('.intro_down, .go').on("click", function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
    });

    /*Show/Hide Photo in When&Where Block*/
    $('.photocamera span').on("click", function (e) {
        $(this).parents('section').find('.opacity').toggleClass('fade');
        $(this).parents('section').find('.over').fadeToggle();
        mixpanel.track("Olhou o background do local");
        e.preventDefault();
    });


    /*CountDown*/
    $('.countdown').countdown({
        until: new Date(2017, 5, 17, 15, 30),
        labels: ['Anos', 'Meses', 'Semanas', 'Dias', 'Horas', 'Minutos', 'Segundos'],
        labels1: ['Ano', 'Mês', 'Semana', 'Dia', 'Hora', 'Minuto', 'Segundo']
    });

    /*Gallery Carousel */
    $(".gallery_wrapper").owlCarousel({
        navigation: true, responsive: true, responsiveRefreshRate: 200, slideSpeed: 200,
        paginationSpeed: 200, rewindSpeed: 500, items: 3, itemsTablet: [768, 2], autoPlay: true,
        itemsMobile: [479, 1], mouseDrag: false
    });

    /*Registry Carousel */
    $(".registry_wrapper").owlCarousel({
        navigation: true, responsive: true, responsiveRefreshRate: 200, slideSpeed: 200, paginationSpeed: 200,
        rewindSpeed: 500, stopOnHover: true, autoHeight: true, items: 3, mouseDrag: false, autoPlay: true
    });

    /*The Crew Carousel*/
    var a = {
        navigation: true, responsive: true, responsiveRefreshRate: 200, slideSpeed: 200, paginationSpeed: 200,
        rewindSpeed: 500, stopOnHover: true, autoHeight: true, items: 4, mouseDrag: false, autoPlay: true
    };
    $(".guest_men").owlCarousel(a);
    $(".guest_women").owlCarousel(a);

    /*Slider Carousel*/
    $(".slider").owlCarousel({
        navigation: true, responsive: true, responsiveRefreshRate: 200, slideSpeed: 200, paginationSpeed: 200,
        rewindSpeed: 500, stopOnHover: false, autoHeight: true, singleItem: true, mouseDrag: false, autoPlay: true, transitionStyle: "fade"
    });

    /* Top Menu Click to Section */
    $('.sub_menu').find('a').on("click", function (e) {
        $('.sub_menu').find('a').removeClass('active');
        $(this).addClass('active');
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top + 1
        }, 1000);
        $(".main_menu_btn").trigger('click');
        e.preventDefault();
    });


    /*FireFly in Intro*/
    $.firefly({
        color: '#fff', minPixel: 1, maxPixel: 3, total: 55, on: '.into_firefly'
    });

    $("#form_rsvp input[name=phone]").mask('(00) 00000-0000');

    /** Mixpanel **/
    $("#gift-list-pontofrio").click(function () {
        mixpanel.track("Clicou no Pontofrio");
    });

    $("#btn-go-rsvp").click(function () {
        mixpanel.track("Clicou em 'Confirme Já'");
    });

    $("#btn-menu-guests").click(function () {
        mixpanel.track("Clicou no menu 'Padrinhos & Madrinhas'");
    });

    $("#btn-menu-when_where").click(function () {
        mixpanel.track("Clicou no menu 'Onde & Quando'");
    });

    $("#btn-menu-rsvp").click(function () {
        mixpanel.track("Clicou no menu 'Confirmar Presença'");
    });

    $("#btn-menu-gallery").click(function () {
        mixpanel.track("Clicou no menu 'Galeria'");
    });

    $("#btn-menu-registry").click(function () {
        mixpanel.track("Clicou no menu 'Lista de Presentes'");
    });

});