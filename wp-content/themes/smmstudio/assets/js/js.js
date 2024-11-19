jQuery(function($) {

    /*
     *---------------------*
     * Global JS Functions *
     *---------------------*
    */

    //Check Window Width

    let winWid = jQuery(window).width();
    let windHeig = jQuery(window).height();

    jQuery(window).resize(function () {
        winWid = jQuery(window).width();
        windHeig = jQuery(window).height();
    });

  /**
   * Hom page test slider
   */

  if( $('#main-text-slider').length){

    $('#main-text-slider').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToShow: 1,
      pauseOnHover: false,
      slidesToScroll: 1,
      arrows: false,
      fade: true
    });


    let firstTaped = $('#main-text-slider .slick-current').attr('data-text');

    let firstType = new Typed(".main-title .typed-number-1", {
      strings: [firstTaped],
      typeSpeed: 10,
      showCursor: false,
      loopCount:1
    });

    setTimeout(function () {
      firstType.destroy();
    },4000);


    $('#main-text-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){

      let currentText = $('#main-text-slider .slick-current').attr('data-text');

      let typed = new Typed(".main-title .typed-number-"+ (currentSlide + 1) +" ", {
        strings: [currentText],
        typeSpeed: 10,
        showCursor: false,
        loopCount:1
      });

      setTimeout(function () {
        typed.destroy();
      },4000);


    });

  }

  /**
   *
   * Lang navigation
   */

  const langNavigation = $('#lang-wrapper');

  langNavigation.find('.active-lang').text(langNavigation.find('.current-lang').text());

  langNavigation.find('.active-lang').on('click', function (e) {
    e.preventDefault();

    $(this).toggleClass('open');

    langNavigation.find('.lang-wrapper').slideToggle(200);

  });


  /**
   * Home about us
   */

  if( $('.home-our-services').length ){

    $('.home-our-services .nav-item:first-child .nav-link').addClass('active');

    $('.home-our-services .tab-content .tab-pane:nth-child(2)').addClass('active');

    $('.home-our-services .card:first-child .card-link').removeClass('collapsed');

    $('.home-our-services .card:first-child .collapse').addClass('show');

  }

  /**
   * Home cases
   */

  if ( $('.home-our-case').length ){

    function changeHomeCases( categoryId ){

      let homeCasesDate = {
        action: 'home_cases_change',
        currentCaseCat: categoryId
      }

      $.post( myajax.url, homeCasesDate, function(response) {

        if( $.trim(response) !== ''){

          $('#cases-list').html(response);
        }
      });
    }

    let defaultCategory = $('.home-our-case .cases-category-list li:first-child');

    defaultCategory.find('a').addClass('active');

    let defaultCasesList = defaultCategory.find('a').attr('data-cat');

    changeHomeCases( defaultCasesList );

    $('.home-our-case .cases-category-list .cases-category').on('click', function (e) {

      e.preventDefault();

      $('.home-our-case .cases-category-list .cases-category').removeClass('active');

      $(this).addClass('active');

      changeHomeCases( $(this).attr('data-cat'));

    });




  }

  /**
   * Client slider
   */

  if( $('#our-clients-slider').length ){

    $('#our-clients-slider').slick({
      autoplay: true,
      autoplaySpeed: 500,
      slidesToShow: 9,
      pauseOnHover: false,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      rows: 2,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 7,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 360,
          settings: {
            slidesToShow: 2,
          }
        }
      ]
    });
  }

  /**
   * New reviews slider
   */

  if( $('#new-rev-slider').length ){

    $('#new-rev-slider').slick({
      autoplay: false,
      autoplaySpeed: 500,
      slidesToShow: 4,
      pauseOnHover: false,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });

  }

  /**
   * F.A.Q. accordion
   */

  if ( $('#accordion-faq').length ){

    $('#accordion-faq .card:first-child .card-link').removeClass('collapsed');
    $('#accordion-faq .card:first-child .collapse').addClass('show');

  }

  /**
   * Friends slider
   */

  if( $('#friends-slider').length ){

    $('#friends-slider').slick({
      autoplay: true,
      autoplaySpeed: 1500,
      slidesToShow: 4,
      pauseOnHover: false,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            fade: true
          }
        }
      ]
    });
  }

  /**
   * Fixed menu new
   */

  $(document).scroll(function() {
    let scrollTop = $(this).scrollTop();

    if ( scrollTop > 1 ) {

      $('.site-header').addClass('fixed');
    } else {

      $('.site-header').removeClass('fixed');
    }
  });

  let positionScrollHeader = $(window).scrollTop();

  $(window).scroll(function() {

    let scroll = $(window).scrollTop();

    if( scroll > positionScrollHeader) {

      $('.site-header').removeClass('fixed-vis');

      $('#lang-nav ul').fadeOut(200);

      if( winWid > 768 ){

        $('.main-menu .menu-item-has-children .sub-menu').slideUp(200);
        $('.main-menu .menu-item-has-children').removeClass('open-sub-menu');
      }


    } else {

      $('.site-header').addClass('fixed-vis');

    }

    positionScrollHeader = scroll;

  });

  /**
   * Mob menu new
   */


  $('.site-header #menu-toggle').on('click', function (e) {

    e.preventDefault();

    $('.site-header').toggleClass('active-menu');
    $(this).toggleClass('active');
    $('.phone-lang-wrapper .phone').fadeToggle(500);
    $('.header-menu-container').toggleClass('open-menu');
    $('html').toggleClass("fixedPosition");

    setTimeout(function () {
      $('.main-menu').toggleClass('add-vis');
      $('.mobile-phone').toggleClass('add-vis');
      $('.working-time').toggleClass('add-vis');
      $('.lang-list').toggleClass('add-vis');
    }, 1000);

  });

  //Fixed Menu

    jQuery(document).scroll(function() {
        var y = jQuery(this).scrollTop();

        if (y > 1) {
            jQuery('header').addClass('fixed');
        } else {
            jQuery('header').removeClass('fixed');
        }
    });

    var positionScrolHeader = jQuery(window).scrollTop();

    jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();

        if(scroll > positionScrolHeader) {

            jQuery('header').removeClass('fixed-vis');
            jQuery('#lang-nav ul').fadeOut(200);

            if( winWid > 768 ){
                jQuery('.main-menu .menu-item-has-children .sub-menu').slideUp(200);
                jQuery('.main-menu .menu-item-has-children').removeClass('open-sub-menu');
            }


        } else {
            jQuery('header').addClass('fixed-vis');

        }
        positionScrolHeader = scroll;
    });

    //Lang Drop Down

    var currentLang = jQuery('#lang-nav .lang-list .current-lang a').text();
    jQuery('#active-lang-cl').text(currentLang);

    jQuery('#lang-btn, #active-lang-cl').on('click', function (e) {
        e.preventDefault();

        jQuery('#lang-nav ul').fadeToggle(200);
        jQuery('#lang-nav').toggleClass('active');

    });

    //Menu Drop Down

    jQuery('.main-menu .menu-item-has-children').on('click', function (e) {
       /*e.preventDefault();*/

       if( winWid > 768 ){
           jQuery(this).toggleClass('open-sub-menu');

           jQuery(this).find('.sub-menu').slideToggle(500);
       }

    });

    //Mob Menu

    jQuery('#menu-btn').on('click', function (e) {
       e.preventDefault();

       jQuery('header').toggleClass('active-menu');
       jQuery(this).toggleClass('active');
       jQuery('.phone-lang-wrapper .phone').fadeToggle(500);
       jQuery('.menu-container').toggleClass('open-menu');

       setTimeout(function () {
           jQuery('.main-menu').toggleClass('add-vis');
           jQuery('.mobile-phone').toggleClass('add-vis');
           jQuery('.working-time').toggleClass('add-vis');
           jQuery('.lang-list').toggleClass('add-vis');
       }, 1000);

    });

    //Menu Hover Animation

    jQuery('.sub-menu a, .main-menu a').mouseenter(function () {
        jQuery(this).removeClass('live-item');
        jQuery(this).addClass('hover-item');
    });

    jQuery('.sub-menu a, .main-menu a').mouseleave(function () {

        jQuery(this).removeClass('hover-item');
        jQuery(this).addClass('live-item');
    });

    //Fancybox Init

    jQuery('[data-fancybox]').fancybox({
        protect: true,
        loop : true,
        fullScreen : true,
        scrolling : 'yes',
        image : {
            preload : "auto",
            protect : true
        },
        buttons: [
            "zoom",
            "slideShow",
            "fullScreen",
            "close"
        ]

    });

    //Video In Modal

    jQuery('#rev-slider .open-review').on('click', function (e) {
        e.preventDefault();

        var videoId = jQuery(this).data('videoid');

        jQuery('#videoModal').modal("show");

        jQuery('#videoModal .video').html('<iframe src="https://www.youtube-nocookie.com/embed/'+videoId+'?rel=0&autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1"></iframe>');
    });

    jQuery('#videoModal').on('show.bs.modal', function (e) {

        jQuery("iframe").each(function() {
            jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')});
    });

    jQuery('#videoModal').on('hidden.bs.modal', function (e) {
        jQuery("#videoModal iframe").each(function() {
            jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')});
    });

    //Case Page Variable Structure

    jQuery('.case-about-info .part-3 .part-item:nth-child(2), .case-about-info .part-3 .part-item:nth-child(3)').removeClass('col-lg-4 chart');

    jQuery('.case-about-info .part-3 .part-item:nth-child(2), .case-about-info .part-3 .part-item:nth-child(3)').addClass('col-lg-3');

    //Case Video Modal

    jQuery('.video-wrap').on('click', function (e) {
        e.preventDefault();

        var videoId = jQuery(this).data('videoid');

        jQuery('#videoCaseModal').modal("show");

        jQuery('#videoCaseModal .video').html('<iframe src="https://www.youtube-nocookie.com/embed/'+videoId+'?rel=0&autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1"></iframe>');
    });

    jQuery('#videoCaseModal').on('show.bs.modal', function (e) {

        jQuery("iframe").each(function() {
            jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')});
    });

    jQuery('#videoCaseModal').on('hidden.bs.modal', function (e) {
        jQuery("#videoCaseModal iframe").each(function() {
            jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')});
    });

    // PHONE MASK
  
  var currentLangPage = jQuery('html').attr('lang');

  if ( currentLangPage  == 'en' ){

    jQuery('input[type=tel]').intlTelInput({
      preferredCountries: ["us"],
    });

  } else if ( currentLangPage == 'pl' ) {

    jQuery('input[type=tel]').intlTelInput({
      preferredCountries: ["pl"],
    });

  } else {
    jQuery('input[type=tel]').intlTelInput({
      preferredCountries: ["ua"],
    });
  }


  jQuery('input[type=tel]').on('countrychange', function(e, countryData) {
    jQuery(this).val(countryData.dialCode);
  });

  jQuery('input[type=tel]').val(jQuery('input[type=tel]').intlTelInput("getSelectedCountryData").dialCode);

  jQuery('.input-field input[type=tel]').on('focus', function () {
    jQuery('.input-field').addClass('form-group has-feedback');
  });

    /*jQuery("input[type=tel]").mask("+38(999) 999-99-99");*/

    /*jQuery(".mask-ua").mask("+38(999) 999-99-99");*/
    /*jQuery(".ru-mask").mask("+7 (999) 999-99-99");
    jQuery(".kz-mask").mask("+7 (999) 999-99-99");
    jQuery(".krg-mask").mask("+996 (999) 999-999");
    jQuery(".ar-mask").mask("+374 (99) 99-99-99");*/

    /*jQuery('.phone-group .ch-country').each(function () {
        var $this = jQuery(this);
        $this.find('.current-mask').on('click', function (e) {
            e.preventDefault();

            $this.find('.mask-list').slideToggle(400).toggleClass('open');
        });
        $this.find('.arrow-btn').on('click', function (e) {
            e.preventDefault();

            $this.find('.mask-list').slideToggle(400).toggleClass('open');


        });

        $this.find('.mask-list a').on('click', function (e) {
            e.preventDefault();

            $this.find('.mask-list a').removeClass('current');

            jQuery(this).addClass('current');

            $this.find('.mask-list').slideToggle(400).toggleClass('open');

            var currentMaskText = jQuery(this).text();
            var currentMaskClass = jQuery(this).attr('data-mask');

            $this.find('.current-mask').text(currentMaskText);

            if ( currentMaskClass == 'mask-ua'){

                jQuery('.phone-group .form-control').addClass('mask-ua');
                jQuery(".mask-ua").mask("+38(999) 999-99-99");

            }else{
                jQuery('.phone-group .form-control').removeClass('mask-ua');

            }

        })
    });*/

    /*jQuery('.phone-group .form-control.mask-ua').on('click', function () {
        jQuery(".mask-ua").mask("+38(999) 999-99-99");
    });*/




    // UTM

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
    }

    utm_source = getQueryVariable('utm_source') ? getQueryVariable('utm_source') : "";
    utm_medium = getQueryVariable('utm_medium') ? getQueryVariable('utm_medium') : "";
    utm_campaign = getQueryVariable('utm_campaign') ? getQueryVariable('utm_campaign') : "";
    utm_term = getQueryVariable('utm_term') ? getQueryVariable('utm_term') : "";
    utm_content = getQueryVariable('utm_content') ? getQueryVariable('utm_content') : "";
    gclid = getQueryVariable('gclid') ? getQueryVariable('gclid') : "";

    var forms = jQuery('form');

    jQuery.each(forms, function (index, form) {
        jQueryform = jQuery(form);
        jQueryform.append('<input type="hidden" name="utm_source" value="' + utm_source + '">');
        jQueryform.append('<input type="hidden" name="utm_medium" value="' + utm_medium + '">');
        jQueryform.append('<input type="hidden" name="utm_campaign" value="' + utm_campaign + '">');
        jQueryform.append('<input type="hidden" name="utm_term" value="' + utm_term + '">');
        jQueryform.append('<input type="hidden" name="utm_content" value="' + utm_content + '">');
        jQueryform.append('<input type="hidden" name="gclid" value="' + gclid + '">');
    });

    //Button Scroll To Target

    jQuery(document).on('click', '.scroll-to', function (e) {
        e.preventDefault();

        var href = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(href).offset().top
        }, 1000);
    });

    //Adaptive Roket

    if ( winWid <= 540 ){

        var margWid = (540 - winWid)/2;

        jQuery('.fb-partner .bg-pic-wrapper').css({'margin-right' :'-'+margWid+'px', 'margin-left' :'-'+margWid+'px'});

        jQuery(window).resize( function () {
            var winNow = jQuery(window).width();
            var margin = (540 - winNow)/2;
            jQuery('.fb-partner .bg-pic-wrapper').css({'margin-right' :'-'+margin+'px', 'margin-left' : '-'+margin+'px'});
        });

        jQuery('.effective-marketing .rocket-wrapper').css({'margin-right' :'-'+margWid+'px', 'margin-left' :'-'+margWid+'px'});

        jQuery(window).resize( function () {
            var winNow = jQuery(window).width();
            var margin = (540 - winNow)/2;
            jQuery('.effective-marketing .rocket-wrapper').css({'margin-right' :'-'+margin+'px', 'margin-left' : '-'+margin+'px'});
        });


    }

    // Lazy load

    $('.lazy').lazy();

    //Web Solutions Mobile

    if ( winWid <= 992 ){

        jQuery('.web-solutions .item').on('click', function (e) {
            e.preventDefault();

            var $this = jQuery(this);

            var triger = $this.find('.text-container').attr('data-visible');

            if( triger == 'close' ){
                $this.find('.pic').css({'opacity' : '0'});

                $this.find('.show-btn').css({'transform' : 'rotate(180deg)'});

                $this.find('.text-container').slideDown(500);

                jQuery('.web-solutions .item').each( function () {

                    var nowPosition = jQuery(this).find('.text-container').attr('data-visible');

                    if( nowPosition == 'open' ){
                        jQuery(this).find('.text-container').slideUp(500);
                        jQuery(this).find('.text-container').attr('data-visible', 'close');
                        jQuery(this).find('.pic').css({'opacity' : '1'});
                        jQuery(this).find('.show-btn').css({'transform' : 'rotate(0deg)'});
                    }
                });

                $this.find('.text-container').attr('data-visible', 'open');
            }

            if( triger == 'open' ){
                $this.find('.text-container').slideUp(500);
                $this.find('.show-btn').css({'transform' : 'rotate(0deg)'});
                $this.find('.pic').css({'opacity' : '1'});

                $this.find('.text-container').attr('data-visible', 'close');
            }

        });

    }

    //Custom Scroll Bar

    if ( jQuery('.screen-wrapper').length ){

        jQuery('.screen-wrapper .screen').mCustomScrollbar({
                theme:"dark"
            }
        );
    }

    //Check Active Link

    if( jQuery('.more-services').length ){

        jQuery('.more-services .item').each(function () {

            var href = jQuery(this).attr('href');

            if( href !== ''){
                jQuery(this).css({'pointer-events' : 'auto'});
            }
        })
    }

    //Auto Target Popup Form

    /*if( jQuery('.page-template-template-target').length ){

        if( winWid > 1024 ){
            setTimeout( function () {
                jQuery(document).on('mouseleave', function () {
                    jQuery('#autoTargetformModal').modal('show');
                    jQuery(document).off('mouseleave');
                });
            }, 90000)
        }else{
            setTimeout( function () {
                jQuery('#autoTargetformModal').modal('show');
            }, 90000)
        }

        jQuery('#autoTargetformModal').on('hidden.bs.modal', function() {
            jQuery('#autoTargetformModal').removeAttr('id');
        });
    }*/

  if( jQuery('.page-template-template-target').length ) {

    if (winWid > 1024) {
      setTimeout(function () {
        jQuery(document).on('mouseleave', function () {
          jQuery('#autoTargetformModal').modal('show');
          jQuery(document).off('mouseleave');
        });
      }, 90000);
    }

    jQuery('#autoTargetformModal').on('hidden.bs.modal', function () {
      jQuery('#autoTargetformModal').removeAttr('id');
    });
  }


    //Brief Video Modal

    jQuery('.video-ex').on('click', function (e) {
        e.preventDefault();

        var videoId = jQuery(this).data('exvideoid');

        jQuery('#videoModal').modal("show");

        jQuery('#videoModal .video').html('<iframe src="https://www.youtube-nocookie.com/embed/'+videoId+'?rel=0&autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1"></iframe>');
    });

    //Contact Form Check Button

    jQuery('.ch-button-wrapper .ch-button').on('click', function () {

        jQuery(this).toggleClass('active-ch');

    });

    //Brief Triger Question

    if( jQuery('.page-template-template-brief-context').length ){

        jQuery('.radio-asw input').on('change', function () {

            var ansvValue = jQuery(this).val();

            if( ansvValue == 1 ){


                jQuery('.page-template-template-brief-context .trigger-question').fadeIn(400);
            }else{
                jQuery('.page-template-template-brief-context .trigger-question').fadeOut(400);
            }


        });
    }

    //Breafs Seve Data If Close

    if( jQuery('.page-template-template-brief-context').length ){

        jQuery('.page-template-template-brief-context .question').each(function () {

            var index = jQuery(this).index();

            var enterValue;

            var localKey = 'briefContextAnswer' + index + '';

            var thisLocalAnswer = localStorage.getItem(localKey);

            if( thisLocalAnswer == null ){

                jQuery(this).find('textarea').blur(function () {
                    enterValue = jQuery(this).val();

                    localStorage.setItem(localKey, enterValue);
                });

            }else{
                jQuery(this).find('textarea').val(thisLocalAnswer);
            }

        });

        jQuery('#brief-form').on('submit', function () {

            localStorage.clear();
        });

    };

    if( jQuery('.page-template-template-brief').length ){

        jQuery('.page-template-template-brief .question').each(function () {

            var index = jQuery(this).index();

            var enterValue;

            var localKey = 'briefTargetAnswer' + index + '';

            var thisLocalAnswer = localStorage.getItem(localKey);

            console.log(thisLocalAnswer);

            if( thisLocalAnswer == null ){

                jQuery(this).find('textarea').blur(function () {
                    enterValue = jQuery(this).val();

                    localStorage.setItem(localKey, enterValue);
                });

            }else{
                jQuery(this).find('textarea').val(thisLocalAnswer);
            }

        });

        jQuery('#brief-form').on('submit', function () {

            localStorage.clear();
        });

    };

    //Case Autoplay Video

  if( jQuery('.cases-template-template-case-page').length ){

    var autoplayVideo = jQuery('.case-about-info .part-2 .part-about .part-gallery .autoplay-video-wrapper');

    autoplayVideo.viewportChecker({

      offset: 250,

      callbackFunction: function (elem, action) {

        jQuery('.case-about-info .part-2 .part-about .part-gallery .autoplay-video-wrapper.visible').each(function () {

          jQuery(this).find('video').attr('src', jQuery(this).find('video').attr('data-videosrc'));
          jQuery(this).find('video').get(0).play();
        });

      }
    });

  }

    /*//Btn More Text

    if ( jQuery('.page-template-template-smm ').length ){

        jQuery('.business-in-good-hands .item').each(function () {

            var thisItem = jQuery(this);

            thisItem.find('.more').on('click', function (e) {

                e.preventDefault();

                thisItem.find('p').toggleClass('more-text');

                jQuery(this).toggleClass('open');
            });
            
        });
    }*/


    /*
     *-----------------------*
     * All Sliders Functions *
     *-----------------------*
    */

    //Trust Slider

    /*jQuery("#trust-us-slider").owlCarousel({
        loop: !0,
        margin: 70,
        lazyLoad : true,
        responsiveClass: !0,
        dots: !1,
        autoplay: !0,
        autoplayTimeout: 1000,
        fluidSpeed: 500,
        autoplaySpeed: 500,
        smartSpeed: 700,
        responsive: {
            0: {
                items: 2,
                nav: !1
            },
            440: {
                items: 3,
                nav: !1
            },
            575: {
                items: 4,
                nav: !1
            },
            1025: {
                items: 6,
                nav: !1,
                loop: !0
            }
        }
    });*/
    if( jQuery('#trust-us-slider').length){
        jQuery('#trust-us-slider').slick({
            autoplay: true,
            autoplaySpeed: 500,
            lazyLoad: 'ondemand',
            slidesToShow: 6,
            pauseOnHover: false,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            dots: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 440,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }


    //Reviews Slider

    jQuery('#rev-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        lazyLoad: 'ondemand',
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

    jQuery('.reviews .prev').click(function(e){
        e.preventDefault();

        jQuery('#rev-slider').slick('slickPrev');
    });

    jQuery('.reviews .next').click(function(e){
        e.preventDefault();

        jQuery('#rev-slider').slick('slickNext');
    });

    //Text Reviews

    /*var slideRevH = jQuery('#rev-slider').height();

    jQuery('#rev-slider .slide .text-rev-wrap').each(function () {

       var thisRevTextSlide = jQuery(this);

       var slideTextRevH = thisRevTextSlide.find('.text-rev').height();

       if ( slideTextRevH > slideRevH){

           thisRevTextSlide.addClass('modal-rev');
           /!*console.log(1);*!/
       }

        /!*console.log(slideRevH, slideTextRevH);*!/

    });*/



    //Fb Partners Slider

    if( jQuery('.fb-partner').length){

        jQuery('#fb-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            fade: true,
            asNavFor: '#fb-slider-nav'
        });

        jQuery('#fb-slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '#fb-slider',
            vertical: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            focusOnSelect: true

        });
    }

    //Step 3 Slider

    if ( jQuery('#step-3-slider').length ){

        jQuery('#step-3-slider').slick({
            autoplay: false,
            autoplaySpeed: 5000,
            lazyLoad: 'ondemand',
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            fade: false,
            dots: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        autoplay: true,
                        autoplaySpeed: 2000
                    }
                }
            ]
        });
    }

    //Step 6 Slider

    if ( jQuery('#step6-slider').length ){

        jQuery('#step6-slider').slick({
            autoplay: true,
            autoplaySpeed: 1000,
            centerMode: true,
            slidesToShow: 3,
            arrows: false,
            vertical: true,
            fade: false

        });
    }

    //Dev Portfolio Slider

    if ( jQuery('#portfolio-slider .case-item').length ){

        jQuery('.page-template-template-development .cases-cat-wrapper .inner .cat:nth-child(1)').addClass('active-cat');

        if ( winWid <= 992 ){
            jQuery('#portfolio-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                fade: true
            });
        }

        var allPortSlides = jQuery('#portfolio-slider .case-item');

        var firstPortfolioPrev = jQuery('#portfolio-slider .case-item:nth-child(1) img').attr('src');

        if ( winWid > 992 ){
            jQuery('#portfolio-slider .case-item:nth-child(1)').addClass('focuse-prev');
        }

        jQuery('.portfolio-slider-wrapper .desk-prev').css({'background-image' : 'url("'+firstPortfolioPrev+'")'});

        allPortSlides.each(function () {

            var hoverItem = jQuery(this);

            hoverItem.mouseenter(function () {
                jQuery('#portfolio-slider .case-item').removeClass('focuse-prev');
                jQuery(this).addClass('focuse-prev');
                var accentPic = jQuery(this).find('img').attr('src');
                jQuery('.portfolio-slider-wrapper .desk-prev').css({'background-image' : 'url("'+accentPic+'")'});
            });
        });
    }

    //Case Page Dev Disign Slider

    if( jQuery('#case-dev-dis-slider').length ){

        jQuery('#case-dev-dis-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '25%',
            arrows: false,
            dots: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        centerPadding: '20%'
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        centerPadding: '15%'
                    }
                }
            ]

        });

        jQuery('.dis-slider-wrapper .prev').click(function(e){
            e.preventDefault();

            jQuery('#case-dev-dis-slider').slick('slickPrev');
        });

        jQuery('.dis-slider-wrapper .next').click(function(e){
            e.preventDefault();

            jQuery('#case-dev-dis-slider').slick('slickNext');
        });
    }

    //Solution Slider

    jQuery('#slider-solution').slick({
        autoplay: false,
        variableWidth: true,
        useTransform: true,
        lazyLoad: 'ondemand',
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    jQuery('.web-solutions .prev').click(function(e){
        e.preventDefault();

        jQuery('#slider-solution').slick('slickPrev');
    });

    jQuery('.web-solutions .next').click(function(e){
        e.preventDefault();

        jQuery('#slider-solution').slick('slickNext');
    });

    jQuery('#slider-solution').on('beforeChange', function(event, slick, currentSlide, nextSlide){

        jQuery('.web-solutions .slide-number span').text(nextSlide+1);

    });

    //Slider Development Process

    jQuery('#development-process-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        arrows: false,
        fade: true,
        asNavFor: '#development-process-slider-previews',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    adaptiveHeight: true
                }
            }
        ]
    });

    jQuery('#development-process-slider-previews').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        speed: 500,
        asNavFor: '#development-process-slider',
        vertical: true,
        arrows: false,
        focusOnSelect: true

    });

    jQuery('.development-process .prev').click(function(e){
        e.preventDefault();

        jQuery('#development-process-slider-previews').slick('slickPrev');
    });

    jQuery('.development-process .next').click(function(e){
        e.preventDefault();

        jQuery('#development-process-slider-previews').slick('slickNext');
    });

    jQuery('#development-process-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

        jQuery('.development-process .current-slide-number span, .development-process .current-number span').text(nextSlide+1);

    });

    //Slider Dev Team

    jQuery('#dev-team-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '12%',
        autoplay: false,
        autoplaySpeed: 3000,
        arrows: false,
        fade: false,
        /* asNavFor: '#dream-team-numbers',*/
        responsive: [

            {
                breakpoint: 768,
                settings: {
                    centerPadding: '8%'
                }
            },

            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '25%'
                }
            },

            {
                breakpoint: 375,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '18%'
                }
            }

        ]
    });

    var devMenName = jQuery('#dev-team-slider .slick-center').attr('data-menname');
    var devMenPost = jQuery('#dev-team-slider .slick-center').attr('data-menpost');

    jQuery('.cooperation-with-agency .men-info h3').text( devMenName );
    jQuery('.cooperation-with-agency .men-info p').text( devMenPost );

    /*jQuery('#dev-team-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){

        var devMenName = jQuery('#dev-team-slider .slick-center').attr('data-menname');
        var devMenPost = jQuery('#dev-team-slider .slick-center').attr('data-menpost');

        jQuery('.cooperation-with-agency .men-info h3').text( devMenName );
        jQuery('.cooperation-with-agency .men-info p').text( devMenPost );

    });*/

  jQuery('#dev-team-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

    var slideObject = slick['$slides'][nextSlide];

    var arraySlide = jQuery.makeArray(slideObject);

    var devMenName = arraySlide[0]['dataset']['menname'];
    var devMenPost = arraySlide[0]['dataset']['menpost'];

    jQuery('.cooperation-with-agency .men-info h3').text( devMenName );
    jQuery('.cooperation-with-agency .men-info p').text( devMenPost );


  });

    /*jQuery('#dev-team-left-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        vertical: true,
        arrows: false
    });*/

    /*jQuery('#dev-team-right-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        autoplay: true,
        centerMode: true,
        arrows: false,
        vertical: true,
        verticalSwiping: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0px'
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0',
                    centerMode: false,
                    autoplay: false,
                    vertical: false,
                    verticalSwiping: false,
                    touchThreshold: 15,
                    fade: false
                }
            }
        ]
    });*/

    /*jQuery('.cooperation-with-agency .controls-wrapper .prev').click(function(e){
        e.preventDefault();

        jQuery('#dev-team-right-slider').slick('slickPrev');
        jQuery('#dev-team-left-slider').slick('slickNext');
    });

    jQuery('.cooperation-with-agency .controls-wrapper .next').click(function(e){
        e.preventDefault();

        jQuery('#dev-team-left-slider').slick('slickPrev');
        jQuery('#dev-team-right-slider').slick('slickNext');
    });*/

    /*var currentMen = jQuery('#dev-team-right-slider .slick-center');

    var targetMenData = jQuery('.cooperation-with-agency .info-wrapper .team-men-info');

    var devTeameSlideCount = jQuery('#dev-team-right-slider .slide').length;
    var devClone = jQuery('#dev-team-right-slider .slide.slick-cloned').length;

    devTeameSlideCount = devTeameSlideCount - devClone;

    targetMenData.find('h3').text(currentMen.attr('data-menname'));
    targetMenData.find('p').text(currentMen.attr('data-menpost'));

    jQuery('#dev-team-right-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

        targetMenData.find('h3').css({'opacity' : '0'});
        targetMenData.find('p').css({'opacity' : '0'});

        var nextPrevTest = nextSlide - (currentSlide+1);

        if((nextSlide) == (currentSlide+1) || ( nextPrevTest == -devTeameSlideCount )){
            jQuery('#dev-team-left-slider').slick('slickPrev');

        }else{
            jQuery('#dev-team-left-slider').slick('slickNext');
        }

    });

    jQuery('#dev-team-right-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){

        var currentMen = jQuery('#dev-team-right-slider .slick-current.slick-active');

        targetMenData.find('h3').text(currentMen.attr('data-menname')).css({'opacity' : '1'});
        targetMenData.find('p').text(currentMen.attr('data-menpost')).css({'opacity' : '1'});

    });*/

    //Dream Team Slider

    if( jQuery('.dream-team').length){

        jQuery('#dream-team-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '12%',
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: false,
            fade: false,
           /* asNavFor: '#dream-team-numbers',*/
            responsive: [

                {
                    breakpoint: 768,
                    settings: {
                        centerPadding: '8%'
                    }
                },

                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: '25%'
                    }
                },

                {
                    breakpoint: 375,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: '18%'
                    }
                }

            ]
        });

        jQuery('#dream-team-numbers').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '#dream-team-slider',
            arrows: false,
            autoplay: false,
            autoplaySpeed: 3000,
            centerMode: true,
            focusOnSelect: true

        });

        var dreanMenName = jQuery('#dream-team-slider .slick-center').attr('data-menname');
        var dreanMenPost = jQuery('#dream-team-slider .slick-center').attr('data-menpost');

        jQuery('.dream-team .men-info h3').text( dreanMenName );
        jQuery('.dream-team .men-info p').text( dreanMenPost );

        jQuery('.dream-team .controls-wrapper .prev').click(function(e){
            e.preventDefault();

            jQuery('#dream-team-slider').slick('slickPrev');
            jQuery('#dream-team-numbers').slick('slickPrev');
        });

        jQuery('.dream-team .controls-wrapper .next').click(function(e){
            e.preventDefault();

            jQuery('#dream-team-slider').slick('slickNext');
            jQuery('#dream-team-numbers').slick('slickNext');

        });

        /*jQuery('#dream-team-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){

            var dreanMenName = jQuery('#dream-team-slider .slick-center').attr('data-menname');
            var dreanMenPost = jQuery('#dream-team-slider .slick-center').attr('data-menpost');

            jQuery('.dream-team .men-info h3').text( dreanMenName );
            jQuery('.dream-team .men-info p').text( dreanMenPost );

        });*/

      jQuery('#dream-team-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

        var slideObject = slick['$slides'][nextSlide];

        var arraySlide = jQuery.makeArray(slideObject);

        var dreanMenName = arraySlide[0]['dataset']['menname'];
        var dreanMenPost = arraySlide[0]['dataset']['menpost'];

        jQuery('.dream-team .men-info h3').text( dreanMenName );
        jQuery('.dream-team .men-info p').text( dreanMenPost );

      });
    }

    //Design Mukup Sliders

    if ( jQuery('.page-template-template-design ').length ){

        jQuery('#disign-page-nout-slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 1500,
            centerMode: false,
            cssEase: 'linear',
            slidesToShow: 1,
            arrows: false,
            vertical: false,
            fade: true
        });

    }

  // SMM Case Design Slider

  if ( $('.smm-case-design-slider').length ){

    $('.smm-case-design-slider').slick({
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: 4,
      lazyLoad: 'ondemand',
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      dots: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 440,
          settings: {
            slidesToShow: 1,
          }
        }
      ]

    });
  }

  // SMM Case Before After Slider

  if ( $('.before-after-wrapper').length ){

    $('.before-after-wrapper').slick({
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: 2,
      lazyLoad: 'ondemand',
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      dots: true,
      responsive: [
        {
          breakpoint: 440,
          settings: {
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            fade: true,
          }
        }
      ]

    });
  }

  // SMM Case Best Slider

  if ( $('#best-gallery').length ){

    $('#best-gallery').slick({
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      centerMode: true,
      centerPadding: '33%',
      dots: true,
      fade: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            centerPadding: '25%',
          }
        },
        {
          breakpoint: 575,
          settings: {
            centerPadding: '20%',
          }
        },
        {
          breakpoint: 385,
          settings: {
            centerPadding: '10%',
          }
        }
      ]

    });
  }

    /*
     *--------------------------*
     * All Animations Functions *
     *--------------------------*
    */

    //Steps Animations

    var startAnimationDelay = 200;

    if( jQuery('.our-approach').length ){

        var step1Tracking = jQuery('.our-approach .step1');

        step1Tracking.viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                var tupeText1 = jQuery('.our-approach .step1 .tipe-el-1').data('tipedtext');
                var tupeText2 = jQuery('.our-approach .step1 .tipe-el-2').data('tipedtext');

                setTimeout(function () {
                    jQuery('.our-approach .step1 .tipe-el-1').addClass('em-focus');
                }, 200);

                setTimeout( function () {
                    new Typed(".our-approach .step1 .tipe-el-1 p", {
                        strings: [tupeText1],
                        typeSpeed: 100,
                        showCursor: true,
                        loopCount:1
                    });
                }, 200);

                setTimeout(function () {
                    jQuery('.our-approach .step1 .tipe-el-1').removeClass('em-focus');
                    jQuery('.our-approach .step1 .tipe-el-1 span').remove();
                }, 1300);

                setTimeout(function () {
                    jQuery('.our-approach .step1 .tipe-el-2').addClass('em-focus');
                }, 1500);

                setTimeout( function () {
                    new Typed(".our-approach .step1 .tipe-el-2 p", {
                        strings: [tupeText2],
                        typeSpeed: 100,
                        showCursor: true,
                        loopCount:1
                    });
                }, 2200);

                setTimeout(function () {
                    jQuery('.our-approach .step1 .tipe-el-2').removeClass('em-focus');
                    jQuery('.our-approach .step1 .tipe-el-2 span').remove();
                }, 4000);

            }
        });

        var step2Tracking = jQuery('.our-approach .step2');

        step2Tracking.viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                animSt2 = lottieStep2.loadAnimation(paramsStep2);

            }
        });


        var step4Tracking = jQuery('.our-approach .step4');

        step4Tracking.viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                var part1Text = jQuery('.our-approach .step4 .item4 .name').text();

                setTimeout(function () {

                    jQuery('.our-approach .step4 .item3').removeClass('animation-item');

                    jQuery('.our-approach .step4 .item4 .name').text( part1Text + ' 1');

                }, 500);

                setTimeout(function () {

                    jQuery('.our-approach .step4 .item3').removeClass('new');

                    jQuery('.our-approach .step4 .item2').removeClass('animation-item');

                    jQuery('.our-approach .step4 .item3 .name').text( part1Text + ' 2');

                }, 1500);

                setTimeout(function () {

                    jQuery('.our-approach .step4 .item2').removeClass('new');

                    jQuery('.our-approach .step4 .item1').removeClass('animation-item');

                    jQuery('.our-approach .step4 .item2 .name').text( part1Text + ' 3');

                }, 2000);

            }
        });

        var step5Tracking = jQuery('.our-approach .step5');

        step5Tracking.viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                animSt5 = lottieStep2.loadAnimation(paramsSt5);

            }
        });
    }

    var animationTracking = jQuery('.animation-tracking');

    animationTracking.each(function () {

        var thisTrack = jQuery(this);

        thisTrack.viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                jQuery('.visible .first-up').addClass('animate');

                setTimeout(function () {
                    jQuery('.visible .second-up').addClass('animate');
                }, 500);

            }
        });
    });

    //Emulator Code Editor Typed Animation

    if ( jQuery('.emulator-code-editor').length ){

        var stringPoint = jQuery('.emulator-code-editor .editor-body p');

        stringPoint.each(function () {

            var thisTrack = jQuery(this);

            thisTrack.viewportChecker({

                offset: 50,

                callbackFunction: function (elem, action) {

                    setTimeout(function () {
                        jQuery('.visible').css({'opacity' : '1'});
                    }, 200);

                }
            });
        });
    }

    //Cool Marketing Typed Animation

    if ( jQuery('.cool-marketing').length ){

        var str1Part1 = jQuery('.cool-marketing .printing-wrapper p:nth-child(1) span:nth-child(1)').data('typest11');
        var str1Part2 = jQuery('.cool-marketing .printing-wrapper p:nth-child(1) span:nth-child(2)').data('typest12');
        var str1Part3 = jQuery('.cool-marketing .printing-wrapper p:nth-child(1) span:nth-child(3)').data('typest13');
        var str2 = jQuery('.cool-marketing .printing-wrapper p:nth-child(2)').data('typest2');
        var str3Part1 = jQuery('.cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(1)').data('typest31');
        var str3Part2 = jQuery('.cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(2)').data('typest32');
        var str3Part3 = jQuery('.cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(3)').data('typest33');
        var str3Part4 = jQuery('.cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(4)').data('typest34');
        var str3Part5 = jQuery('.cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(5)').data('typest35');
        var str3Part6 = jQuery('.cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(6)').data('typest36');
        var str4Part1 = jQuery('.cool-marketing .printing-wrapper p:nth-child(4) span:nth-child(1)').data('typest41');
        var str4Part2 = jQuery('.cool-marketing .printing-wrapper p:nth-child(4) span:nth-child(2)').data('typest42');
        var str4Part3 = jQuery('.cool-marketing .printing-wrapper p:nth-child(4) span:nth-child(3)').data('typest43');
        var str5 = jQuery('.cool-marketing .printing-wrapper p:nth-child(5)').data('typest5');


        jQuery('.cool-marketing .printing-wrapper p:nth-child(1)').viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(1) span:nth-child(1)", {
                        strings: [str1Part1],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 200);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(1) span:nth-child(2)", {
                        strings: [str1Part2],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 1200);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(1) span:nth-child(3)", {
                        strings: [str1Part3],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 1700);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(2)", {
                        strings: [str2],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 1800);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(1)", {
                        strings: [str3Part1],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 1900);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(2)", {
                        strings: [str3Part2],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 2900);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(3)", {
                        strings: [str3Part3],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 3000);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(4)", {
                        strings: [str3Part4],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 3200);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(5)", {
                        strings: [str3Part5],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 3400);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(3) span:nth-child(6)", {
                        strings: [str3Part6],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 3900);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(4) span:nth-child(1)", {
                        strings: [str4Part1],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 4000);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(4) span:nth-child(2)", {
                        strings: [str4Part2],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 4500);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(4) span:nth-child(3)", {
                        strings: [str4Part3],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 5400);

                setTimeout( function () {
                    new Typed(".cool-marketing .printing-wrapper p:nth-child(5)", {
                        strings: [str5],
                        typeSpeed: 40,
                        showCursor: false,
                        loopCount:1
                    });
                }, 5500);
            }
        });
    }

    //Effective Marketing Rocket Animation

    if( jQuery('.effective-marketing').length ){

        jQuery('.effective-marketing .rocket-wrapper').viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                jQuery('.visible .roket-part1').addClass('roket-part-1-anumation');

                jQuery('.visible .roket-part2').addClass('roket-part-2-anumation');

                jQuery('.visible .roket-part3').addClass('roket-part-3-anumation');

                jQuery('.visible .roket-part4').addClass('roket-part-4-anumation');
            }
        });
    }

    //Case Scroll Pic Animation

    if ( jQuery('.case-about-info .part-gallery').length ){

        var galleryList = jQuery('.case-about-info .part-gallery');

        galleryList.each(function () {

            var $this = jQuery(this);

            var row1Position = $this.find('.pic:nth-child(1)').offset(); //Координаты первой строки

            if ( $this.find('.pic:nth-child(3)').length ){

                var row2Position = $this.find('.pic:nth-child(3)').offset(); //Координаты первой строки
                row2Position = row2Position.top;
            }

            row1Position = row1Position.top;

            var stopRow1Position; //Конечная точка анимации
            var stopRow2Position; //Конечная точка анимации

            if ( winWid <= 992 && winWid > 440 ){

                var pic1H = $this.find('.pic:nth-child(1) img').height();

                var pic2H = $this.find('.pic:nth-child(2) img').height();

                if (  $this.find('.pic:nth-child(2)').length || $this.find('.pic:nth-child(3)').length ){

                }else{
                    var pic3H = $this.find('.pic:nth-child(3) img').height();

                    var pic4H = $this.find('.pic:nth-child(4) img').height();

                    if ( pic3H > pic4H ){

                        $this.find('.pic:nth-child(4)').addClass('fx-sc2');

                        stopRow2Position = pic3H - pic4H;

                        stopRow2Position = stopRow2Position + row2Position;

                    }else{

                        $this.find('.pic:nth-child(3)').addClass('fx-sc2');

                        stopRow2Position = pic4H - pic3H;

                        stopRow2Position = stopRow2Position + row2Position;
                    }
                }

                if ( pic1H > pic2H ){

                    $this.find('.pic:nth-child(2)').addClass('fx-sc1');

                    stopRow1Position = pic1H - pic2H;

                    stopRow1Position = stopRow1Position + row1Position;

                }else{

                    $this.find('.pic:nth-child(1)').addClass('fx-sc1');

                    stopRow1Position = pic2H - pic1H;

                    stopRow1Position = stopRow1Position + row1Position;
                }

                jQuery(document).scroll(function () {

                    var scrollPosition = jQuery(this).scrollTop(); //Получение значения скролла

                    if ( scrollPosition >= row1Position &&  scrollPosition <= stopRow1Position ){

                        $this.find('.fx-sc1').css({'padding-top' : ( scrollPosition - row1Position) + 'px'});
                    }

                    if ( $this.find('.pic:nth-child(2)').length || $this.find('.pic:nth-child(3)').length ){

                    }else{
                        if ( scrollPosition >= row2Position &&  scrollPosition <= stopRow2Position ){

                            $this.find('.fx-sc2').css({'padding-top' : ( scrollPosition - row2Position) + 'px'});
                        }
                    }
                });
            }
        });
    }

    //Case Page Main Screen Ticker Animation

    if( jQuery('.cases-template-template-case-page').length || jQuery('.cases-template-template-case-smm-page').length){
        jQuery('.name-ticker').marquee({
            duration: 30000,
            startVisible: true,
            direction: 'right',
            duplicated: true
        });
    }

    //Design Page Step Scroll Animation, Dialog Animation

    if( jQuery('.page-template-template-design ').length ){

        var position = jQuery(window).scrollTop();

        jQuery(document).scroll( function () {

            var scrollPosition = jQuery(this).scrollTop();

            var indentToStart = windHeig / 3;

            var stepContentPosition = jQuery('.des-how-we-work .content').offset();

            var stopPosition = jQuery('#stop-position').offset();

            stopPosition = stopPosition.top;

            var stopProgressBar = stepContentPosition.top;

            stepContentPosition = stepContentPosition.top;

            var stopAnimationPosition =  jQuery('.des-how-we-work .content').height();

            stepContentPosition = stepContentPosition - indentToStart;

            var progresPositionstart = jQuery('.des-how-we-work .content .step:nth-child(2)').offset();

            var marker1 = jQuery('.des-how-we-work .content .step:nth-child(2) .marker p');
            var marker2 = jQuery('.des-how-we-work .content .step:nth-child(3) .marker p');
            var marker3 = jQuery('.des-how-we-work .content .step:nth-child(4) .marker p');
            var marker4 = jQuery('.des-how-we-work .content .step:nth-child(5) .marker p');

            var marker1position = marker1.offset();
            var marker2position = marker2.offset();
            var marker3position = marker3.offset();
            var marker4position = marker4.offset();

            marker1position = marker1position.top;
            marker2position = marker2position.top;
            marker3position = marker3position.top;
            marker4position = marker4position.top;

            var stopProgress = marker4position;

            var progressHeig = stopAnimationPosition - (stopPosition - stopProgress);

            var stopBarPosition  = progressHeig + stopProgressBar + 10;

            if( winWid <= 767 ){
                stopBarPosition = (progressHeig + stopProgressBar) - 20;
            }

            progresPositionstart = progresPositionstart.top;

            jQuery('.des-how-we-work .content .progress-bar').css({'top' : ( (marker1position - progresPositionstart) + 5 ) + 'px'});

            marker1position = marker1position - indentToStart;
            marker2position = marker2position - indentToStart;
            marker3position = marker3position - indentToStart;
            marker4position = marker4position - indentToStart;

            if( (scrollPosition + indentToStart) >= stepContentPosition && (scrollPosition + indentToStart) <= stopBarPosition ){

                var animateDown = scrollPosition - stepContentPosition;

                if( scrollPosition > position){

                    jQuery('.des-how-we-work .content .progress-bar span').css({'height' : animateDown + 'px'})

                }else{

                    jQuery('.des-how-we-work .content .progress-bar span').css({'height' : animateDown + 'px'});
                }

                if( scrollPosition >= marker1position ){
                    marker1.addClass('active-marker');

                    jQuery('.des-how-we-work .content .step:nth-child(2) .text').css({'box-shadow' : '0px 4px 15px rgba(174, 172, 236, 0.25)'});
                }else{
                    marker1.removeClass('active-marker');
                    jQuery('.des-how-we-work .content .step:nth-child(2) .text').css({'box-shadow' : 'none'});
                }

                if( scrollPosition >= marker2position ){
                    marker2.addClass('active-marker');

                    jQuery('.des-how-we-work .content .step:nth-child(3) .text').css({'box-shadow' : '0px 4px 15px rgba(174, 172, 236, 0.25)'});
                }else{
                    marker2.removeClass('active-marker');
                    jQuery('.des-how-we-work .content .step:nth-child(3) .text').css({'box-shadow' : 'none'});
                }

                if( scrollPosition >= marker3position ){
                    marker3.addClass('active-marker');

                    jQuery('.des-how-we-work .content .step:nth-child(4) .text').css({'box-shadow' : '0px 4px 15px rgba(174, 172, 236, 0.25)'});
                }
                else{
                    marker3.removeClass('active-marker');
                    jQuery('.des-how-we-work .content .step:nth-child(4) .text').css({'box-shadow' : 'none'});
                }

                if( scrollPosition >= marker4position ){

                    marker4.addClass('active-marker');
                    jQuery('.des-how-we-work .content .progress-bar span').css({'background' : '#221EC4'});

                    jQuery('.des-how-we-work .content .step:nth-child(5) .text').css({'box-shadow' : '0px 4px 15px rgba(174, 172, 236, 0.25)'});
                }
                else{
                    marker4.removeClass('active-marker');
                    jQuery('.des-how-we-work .content .progress-bar span').css({'background' : 'linear-gradient(180deg, #221EC4 76.56%,  #E4E4F6 100%)'});
                    jQuery('.des-how-we-work .content .step:nth-child(5) .text').css({'box-shadow' : 'none'});
                }

            }

            position = scrollPosition;

        });

        /*jQuery('.real-advantages .item:last-child').viewportChecker({

            offset: startAnimationDelay,

            callbackFunction: function (elem, action) {

                setTimeout( function () {
                    jQuery('.real-advantages .item .question .avatar').css({'opacity' : '1'});

                }, 200);

                setTimeout( function () {
                    jQuery('.real-advantages .item .question .text').css({'opacity' : '1', 'transform' : 'translateY(0)'});

                }, 400);

                setTimeout( function () {
                    jQuery('.real-advantages .item .answer .avatar').css({'opacity' : '1'});

                }, 600);

                setTimeout( function () {
                    jQuery('.real-advantages .item .answer .text').css({'opacity' : '1', 'transform' : 'translateY(0)'});

                }, 800);
                
            }
        });*/

        jQuery('.real-advantages .item:last-child .dialog-wrapper').attr('id', 'dis-dialog-slider-animation');

        if ( jQuery('#dis-dialog-slider-animation').length ){

            jQuery('#dis-dialog-slider-animation').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                centerMode: false,
                slidesToShow: 2,
                arrows: false,
                vertical: true,
                adaptiveHeight: true,
                fade: false

            });
        }
    };

    //SMM Page Business Mob Animation

    if ( winWid <= 992 ){
        console.log(1);

      var businessVisibleItem = jQuery('.business-in-good-hands .items-wrapper .item');

      businessVisibleItem.each(function () {

        var thisTrack = jQuery(this);

        thisTrack.viewportChecker({

          offset: startAnimationDelay,
          repeat: true,

          callbackFunction: function (elem, action) {

            thisTrack.removeClass('active');

            jQuery('.visible').addClass('active');

          }
        });
      });
    }

    /*
     *--------------------*
     * All Quiz Functions *
     *--------------------*
    */

    //Quiz Slider

    jQuery('#q-form-slider').slick({
        autoplay: false,
        infinite: false,
        swipe: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: true,
        fade: true

    });
    // Next Prev Button

    jQuery('#next-q').click(function(e){
        e.preventDefault();

        jQuery('#q-form-slider').slick('slickNext');
    });

    jQuery('#prev-q').click(function(e){
        e.preventDefault();

        jQuery('#q-form-slider').slick('slickPrev');
    });

    // All Questions

    var allQestions = jQuery('#q-form-slider .slide').length;

    var stepLang = 100 / allQestions;

    allQestions = allQestions - 1;

    // Progress bar

    var slIndex;
    var innerProgress = "<span></span>";
    for ( slIndex = 0; slIndex < allQestions; slIndex++) {

        innerProgress += "<span></span>";
    }

    jQuery('.question-progress-bar .all-questions').text(allQestions+1);

    jQuery('#progress-wrapper').html(innerProgress);

    jQuery('.progress-wrapper span').css({'width' : stepLang+'%'});

    // If Question Change

    jQuery('#q-form-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){

        jQuery('.progress-wrapper span:nth-child('+(currentSlide+1)+')').addClass('active-step');

        jQuery('html, body').animate({
            scrollTop: jQuery('#question-bar').offset().top
        }, 1000);

        jQuery('.question-progress-bar .curent-question').text(currentSlide+1);

        if( currentSlide !== 0 ){
            jQuery('#prev-q').removeClass('invisible');
            jQuery('#prev-q').addClass('visible');
        }else{
            jQuery('#prev-q').removeClass('visible');
            jQuery('#prev-q').addClass('invisible');
        }

        if( currentSlide === allQestions ){
            jQuery('#next-q').removeClass('d-block');
            jQuery('#next-q').addClass('d-none');
        }else{
            jQuery('#next-q').removeClass('d-none');
            jQuery('#next-q').addClass('d-block');
        }

        jQuery('#next-q').addClass('disabled');

        jQuery('#q-form-slider .slick-current').each(function () {

            var $this = jQuery(this);

            var type = $this.find('input').attr('type');

            if( type === 'text' ){
                var typTextVal = $this.find('input').val();

                $this.find('input').keyup(function () {
                    var inpData = $this.find('.text-out output').val();

                    if ( inpData !==''){
                        jQuery('#next-q').removeClass('disabled');

                    }else {
                        jQuery('#next-q').addClass('disabled');

                    }
                });

                $this.find('input').on('change', function () {
                    typTextVal = jQuery(this).val();

                    if( typTextVal !== '' ){
                        jQuery('#next-q').removeClass('disabled');
                    }else {
                        jQuery('#next-q').addClass('disabled');
                    }

                });


                if( typTextVal !== '' ){
                    jQuery('#next-q').removeClass('disabled');
                }

            }

            if( type === 'radio' ){
                var typRadioVal = $this.find('input:checked').size();

                $this.find('input').on('change', function () {
                    typRadioVal = $this.find('input:checked').size();

                    var myAnsv = $this.find('input:checked').val();

                    if( myAnsv == 'my-ans'){

                        $this.find('.you-var').fadeIn(500);
                        $this.find('.radio-type-wrapper').fadeOut(500);
                        $this.find('.radio-image-type-wrapper').fadeOut(500);
                        jQuery('#q-form-slider .slick-list').css({'height' : '420px'});
                    }else{
                        $this.find('.you-var').fadeOut(500);

                        jQuery('#q-form-slider').slick('slickNext');
                    }

                    if( typRadioVal !== 0 && myAnsv !== 'my-ans'){
                        jQuery('#next-q').removeClass('disabled');
                    }else{
                        jQuery('#next-q').addClass('disabled');

                        var typMyTextVal = $this.find('.you-var input').val();

                        $this.find('.you-var input').keyup(function () {
                            var inpData = $this.find('.you-var .text-out output').val();

                            if ( inpData !==''){
                                jQuery('#next-q').removeClass('disabled');

                            }else {
                                jQuery('#next-q').addClass('disabled');

                            }
                        });

                        $this.find('.you-var input').on('change', function () {
                            typMyTextVal = jQuery(this).val();

                            if( typMyTextVal !== '' ){
                                jQuery('#next-q').removeClass('disabled');
                            }else {
                                jQuery('#next-q').addClass('disabled');
                            }

                        });

                        if( typMyTextVal !== '' ){
                            jQuery('#next-q').removeClass('disabled');
                        }
                    }

                });

                if( typRadioVal !== 0 ){
                    jQuery('#next-q').removeClass('disabled');
                }
            }

            if( type === 'checkbox' ){

                var typChboxVal = $this.find('input:checked').size();

                $this.find('input').on('change', function () {
                    typChboxVal = $this.find('input:checked').size();
                    var typChboxValText = $this.find('input:checked').val();

                    if( typChboxVal !== 0 && typChboxValText !=='my-ans'){
                        jQuery('#next-q').removeClass('disabled');

                    }else{
                        jQuery('#next-q').addClass('disabled');

                        var typMyTextVal = $this.find('.you-var input').val();

                        $this.find('.you-var input').keyup(function () {
                            var inpData = $this.find('.you-var .text-out output').val();

                            if ( inpData !==''){
                                jQuery('#next-q').removeClass('disabled');

                            }else {
                                jQuery('#next-q').addClass('disabled');

                            }
                        });

                        $this.find('.you-var input').on('change', function () {
                            typMyTextVal = jQuery(this).val();

                            if( typMyTextVal !== '' ){
                                jQuery('#next-q').removeClass('disabled');
                            }else {
                                jQuery('#next-q').addClass('disabled');
                            }

                        });

                        if( typMyTextVal !== '' ){
                            jQuery('#next-q').removeClass('disabled');
                        }
                    }
                });

                if( typChboxVal !== 0 ){
                    jQuery('#next-q').removeClass('disabled');
                }
            }

        });

        if ( winWid <= 992 ){
            jQuery('#autoTargetformModal').removeAttr('id');
        }

    });

    jQuery('#prev-q').on('click', function () {
        jQuery('#q-form-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){

            jQuery('.progress-wrapper span:nth-child('+(currentSlide+2)+')').removeClass('active-step');
        });
    });

    // Input Not Empty
    jQuery('#q-form-slider .slick-current').each(function () {

        var $this = jQuery(this);

        var type = $this.find('input').attr('type');

        if( type === 'text' ){
            var typTextVal = $this.find('input').val();

            $this.find('input').keyup(function () {
                var inpData = $this.find('.text-out output').val();

                if ( inpData !==''){
                    jQuery('#next-q').removeClass('disabled');

                }else {
                    jQuery('#next-q').addClass('disabled');

                }
            });

            /*$this.find('.text-input-type input').keyup(function () {
                var inpData = $this.find('.text-input-type .text-out output').val();

                if ( inpData !==''){
                    jQuery('#next-q').removeClass('disabled');

                }else {
                    jQuery('#next-q').addClass('disabled');

                }
            });*/

            $this.find('input').on('change', function () {
                typTextVal = jQuery(this).val();

                if( typTextVal !== '' ){
                    jQuery('#next-q').removeClass('disabled');
                }else {
                    jQuery('#next-q').addClass('disabled');
                }

            });

            if( typTextVal !== '' ){
                jQuery('#next-q').removeClass('disabled');
            }
        }

        if( type === 'radio' ){
            var typRadioVal = $this.find('input:checked').size();

            $this.find('input').on('change', function () {
                typRadioVal = $this.find('input:checked').size();

                var myAnsv = $this.find('input:checked').val();


                if( myAnsv == 'my-ans'){

                    jQuery('#next-q').addClass('disabled');

                    $this.find('.you-var').fadeIn(500);
                    $this.find('.radio-type-wrapper').fadeOut(500);
                    jQuery('#q-form-slider .slick-list').css({'height' : '320px'});

                    var typMyTextVal = $this.find('.you-var input').val();

                    $this.find('.you-var input').keyup(function () {
                        var inpData = $this.find('.you-var .text-out output').val();

                        if ( inpData !==''){
                            jQuery('#next-q').removeClass('disabled');

                        }else {
                            jQuery('#next-q').addClass('disabled');

                        }
                    });

                    $this.find('.you-var input').on('change', function () {
                        typMyTextVal = jQuery(this).val();

                        if( typMyTextVal !== '' ){
                            jQuery('#next-q').removeClass('disabled');
                        }else {
                            jQuery('#next-q').addClass('disabled');
                        }

                    });

                    if( typMyTextVal !== '' ){
                        jQuery('#next-q').removeClass('disabled');
                    }
                }else{
                    $this.find('.you-var').fadeOut(500);

                    if( typRadioVal !== 0  ){
                        jQuery('#next-q').removeClass('disabled');
                    }else{
                        jQuery('#next-q').addClass('disabled');
                    }
                }

            });

            if( typRadioVal !== 0 ){
                jQuery('#next-q').removeClass('disabled');
            }
        }

        if( type === 'checkbox' ){

            var typChboxVal = $this.find('input:checked').size();

            $this.find('input').on('change', function () {
                typChboxVal = $this.find('input:checked').size();
                var typChboxValText = $this.find('input:checked').val();

                if( typChboxVal !== 0 && typChboxValText !=='my-ans'){
                    jQuery('#next-q').removeClass('disabled');


                }else{
                    jQuery('#next-q').addClass('disabled');

                    var typMyTextVal = $this.find('.you-var input').val();

                    $this.find('.you-var input').keyup(function () {
                        var inpData = $this.find('.you-var .text-out output').val();

                        if ( inpData !==''){
                            jQuery('#next-q').removeClass('disabled');

                        }else {
                            jQuery('#next-q').addClass('disabled');

                        }
                    });

                    $this.find('.you-var input').on('change', function () {
                        typMyTextVal = jQuery(this).val();

                        if( typMyTextVal !== '' ){
                            jQuery('#next-q').removeClass('disabled');
                        }else {
                            jQuery('#next-q').addClass('disabled');
                        }

                    });

                    if( typMyTextVal !== '' ){
                        jQuery('#next-q').removeClass('disabled');
                    }
                }

            });

            if( typChboxVal !== 0 ){
                jQuery('#next-q').removeClass('disabled');
            }
        }

    });

    var initYouVar = jQuery('#q-form-slider .slide');

    initYouVar.each(function () {

        var thisQuestion = jQuery(this);

        var thisRadio = thisQuestion.find('.radio-type-wrapper');

        var nameAttr = thisRadio.find('.form-check:first-child input[type=radio]').attr('name');

        thisQuestion.find('.you-var input').removeAttr('name');

        thisRadio.find('input[type=radio]').on('change', function () {

            var checkVal = jQuery(this).val();

            if( checkVal == 'my-ans' ){

                thisRadio.find('input[type=radio]').removeAttr('name');
                thisQuestion.find('.you-var input').attr('name', nameAttr);

            }

        });

        var thisRadioImage = thisQuestion.find('.radio-image-type-wrapper');

        var nameAttrImage = thisRadioImage.find('.form-check:first-child input[type=radio]').attr('name');

        thisRadioImage.find('input[type=radio]').on('change', function () {

            var checkValImage = jQuery(this).val();

            if( checkValImage == 'my-ans' ){

                thisRadioImage.find('input[type=radio]').removeAttr('name');
                thisQuestion.find('.you-var input').attr('name', nameAttrImage);

            }

        });

        var thisCbox = thisQuestion.find('.checkbox-type-wrapper');
        var thisCboxImage = thisQuestion.find('.checkbox-image-type-wrapper');

        var nameAttrCbox = thisCbox.find('.form-check-inline:first-child input[type=checkbox]').attr('name');
        var nameAttrCboxImage = thisCboxImage.find('.form-check-inline:first-child input[type=checkbox]').attr('name');

        thisCbox.find('input.cast').on('change', function () {

            var auestionHeig = jQuery('#q-form-slider .slick-list').height();

            thisQuestion.find('.you-var').toggleClass('ad-ans');

            if( thisQuestion.find('.you-var.ad-ans').length){

                jQuery('#q-form-slider .slick-list').css({'height' : (auestionHeig + 130)+'px'});
                thisQuestion.find('.you-var').slideDown(400);

            }else{
                thisQuestion.find('.you-var').fadeOut(400);
                jQuery('#q-form-slider .slick-list').css({'height' : (auestionHeig - 130)+'px'});

            }

            thisQuestion.find('.you-var input').toggleClass('active-inp');
            thisQuestion.find('.you-var input').attr('disabled', 'disabled');
            thisQuestion.find('.you-var input').removeAttr('name');
            thisQuestion.find('.you-var input.active-inp').removeAttr('disabled', 'name');
            thisQuestion.find('.you-var input.active-inp').attr('name', nameAttrCbox);

        });

        thisCboxImage.find('input.cast').on('change', function () {

            var auestionHeig = jQuery('#q-form-slider .slick-list').height();

            thisQuestion.find('.you-var').toggleClass('ad-ans');

            if( thisQuestion.find('.you-var.ad-ans').length){

                jQuery('#q-form-slider .slick-list').css({'height' : (auestionHeig + 130)+'px'});
                thisQuestion.find('.you-var').slideDown(400);

            }else{
                thisQuestion.find('.you-var').fadeOut(400);
                jQuery('#q-form-slider .slick-list').css({'height' : (auestionHeig - 130)+'px'});

            }

            thisQuestion.find('.you-var input').toggleClass('active-inp');
            thisQuestion.find('.you-var input').attr('disabled', 'disabled');
            thisQuestion.find('.you-var input').removeAttr('name');
            thisQuestion.find('.you-var input.active-inp').removeAttr('disabled', 'name');
            thisQuestion.find('.you-var input.active-inp').attr('name', nameAttrCboxImage);

        });
    });

    //Quiz Thx

    jQuery('#quiz-form').on('submit', function (e) {

        e.preventDefault();

       jQuery('.our-quiz .quiz-thx').addClass('quiz-successful');

        var th = jQuery(this);

        jQuery.ajax({
            type: "POST",
            dataType: 'json',
            url: "https://smmstudio.com/wp-content/themes/smmstudio/quze-send.php",
            /*url: "http://new-smmstudio.loc/wp-content/themes/smmstudio/quze-send.php", */
           /* url: "https://new-smmstudio.smmstudio.com.ua/wp-content/themes/smmstudio/quze-send.php",*/
            data: th.serialize()

        });

        jQuery('#autoTargetformModal').removeAttr('id');
    });

    /*
    *--------------------*
    * All Ajax Functions *
    *--------------------*
   */

  //Ajax Form Submit
  /*jQuery('#form_pagePopup, #form_pageTarget, #form_pageCases, #form_pageSMM, #form_pageRazrabotka, #form_pageDesign, #form_pageCase').on('submit', function (e){
    e.preventDefault();

    let thisForm = jQuery(this).serializeArray();

    let siteLang = thisForm[2];
    siteLang = siteLang.value;

    let thxPage = '';

    if ( siteLang == 'ua'){
      thxPage = 'dyakuiemo';
    }else if(siteLang == 'ru'){
      thxPage = 'spasibo';
    }else if(siteLang == 'en'){
      thxPage = 'thanks';
    }else if(siteLang == 'pl'){
      thxPage = 'dzieki';
    }



    jQuery.ajax({
      url : myajax.url, // Here goes our WordPress AJAX endpoint.
      type : 'post',
      data : thisForm,
    });



    window.location.href = 'https://smmstudio.com/'+siteLang+'/'+thxPage;

  })*/

    //Ajax Cases Navigation

  //Вывод куйсов на услугах таргет

  if (jQuery('.page-template-template-target-services').length ){

    var activeCat = jQuery('#cases-list').attr('data-targcat');

    var allPosts = Number(jQuery('#cases-list').attr('data-allposts'));

    jQuery('#mor-cases-dtn-wrap').attr('data-allposts', allPosts);

    var targetAllPosts = Number(jQuery('#mor-cases-dtn-wrap').attr('data-allposts'));

    var moreBtn = jQuery('#more-cases');
    var lessBtn = jQuery('#less-cases');

    if ( targetAllPosts <= 6 ){
      moreBtn.addClass('d-none');
    }else{
      moreBtn.removeClass('d-none');
    }

    moreBtn.attr('data-currentcat', activeCat);

    lessBtn.attr('data-currentcat', activeCat);

    moreBtn.on('click', function (e) {
      e.preventDefault();

      var caseLeng = jQuery(this).attr('data-lang');
      var caseOffset = Number(jQuery(this).attr('data-offsetpost'));
      var caseMainCat = Number(jQuery(this).attr('data-maincat'));
      var caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
      var caseAllCat = Number(jQuery(this).attr('data-allcat'));

      targetAllPosts = Number(jQuery('#mor-cases-dtn-wrap').attr('data-allposts'));

      var moreCasesTarget = {
        action: 'more_cases_target',
        currentLang: caseLeng,
        postIn: 6,
        allCat: caseAllCat,
        offsetPosts: caseOffset,
        mainCat: caseMainCat,
        currentCat: caseCurrentCat
      };

      jQuery.post( myajax.url, moreCasesTarget, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#cases-list').append(response);
        }
      });

      jQuery(this).attr('data-offsetpost', caseOffset + 1);

      if ( ((caseOffset + 1) * 6) >= targetAllPosts){
        jQuery(this).addClass('d-none');
      }

      console.log(caseOffset, targetAllPosts);

      lessBtn.removeClass('d-none');

    });

    lessBtn.on('click', function (e) {
      e.preventDefault();

      var caseLeng = jQuery(this).attr('data-lang');
      var caseOffset = Number(jQuery(this).attr('data-offsetpost'));
      var caseMainCat = Number(jQuery(this).attr('data-maincat'));
      var caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
      var caseAllCat = Number(jQuery(this).attr('data-allcat'));

      var moreCasesTarget = {
        action: 'more_cases_target',
        currentLang: caseLeng,
        postIn: 6,
        allCat: caseAllCat,
        offsetPosts: caseOffset,
        mainCat: caseMainCat,
        currentCat: caseCurrentCat
      };

      jQuery.post( myajax.url, moreCasesTarget, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#cases-list').html(response);
        }
      });

      jQuery(this).addClass('d-none');
      moreBtn.removeClass('d-none');

      moreBtn.attr('data-offsetpost', 1);

      var href = jQuery(this).attr('href');

      jQuery('html, body').animate({
        scrollTop: jQuery(href).offset().top
      }, 1000);
    })
  }

    //Смена категории кейса для страницы "Таргет"

    jQuery('.page-template-template-target .cases-cat-wrapper .cat').on('click', function (e) {
        e.preventDefault();

        jQuery('.page-template-template-target .cases-cat-wrapper .cat').removeClass('active-cat');

        jQuery(this).addClass('active-cat');

        var catId = jQuery(this).data('catid');

        var subCatId = jQuery(this).data('subcatid');

        var allCat = jQuery(this).data('allcat');

        var currentLang = jQuery(this).data('lang');

        var pageCatNavWrapper = jQuery('.mor-cases-dtn-wrap');

        var allCatPosts = Number(jQuery(this).attr('data-allposts'));

        jQuery('#mor-cases-dtn-wrap').attr('data-allposts', allCatPosts);

        var targetAllPosts = Number(jQuery('#mor-cases-dtn-wrap').attr('data-allposts'));

        var moreBtn = jQuery('#more-cases');
        var lessBtn = jQuery('#less-cases');

        lessBtn.addClass('d-none');

        if ( targetAllPosts <= 6 ){
            moreBtn.addClass('d-none');
        }else{
            moreBtn.removeClass('d-none');
        }

        moreBtn.attr('data-maincat', catId);
        moreBtn.attr('data-currentcat', subCatId);
        moreBtn.attr('data-allcat', allCat);
        moreBtn.attr('data-offsetpost', 1);

        lessBtn.attr('data-currentcat', subCatId);
        lessBtn.attr('data-maincat', catId);
        lessBtn.attr('data-allcat', allCat);

        pageCatNavWrapper.addClass('d-none');

        pageCatNavWrapper.each(function () {

            var $this = jQuery(this);
            var activeCat = $this.data('catnav');

            if( activeCat == catId ){
                $this.toggleClass('d-none');
            }
        });

        var data = {

            action: 'change_cases_category',
            catId: catId,
            allCat: allCat,
            currentLang: currentLang,
            subCatId: subCatId

        };

        jQuery.post( myajax.url, data, function(response) {

            if(jQuery.trim(response) !== ''){

                jQuery('#cases-list').html(response);
            }
        });

    });

  //Якорный переход в конкретную категорию кейсов на главной

  if ( jQuery('.page-template-template-target').length ){

    var hash = window.location.hash;

    if ( hash == '#estate' || hash == '#services' || hash == '#education' || hash == '#e-commerce' ){

      let currentLang = jQuery('.cases-cat-wrapper .cat.active-cat').attr('data-lang');

      jQuery('.cases-cat-wrapper .cat').removeClass('active-cat');

      var anhorSubCatId = 0;

      if ( hash == '#services' ){

        if ( currentLang == 'ru' ){
          anhorSubCatId = 12;
        }else if (currentLang == 'en' ){
          anhorSubCatId = 147;
        }else if (currentLang == 'ua' ){
          anhorSubCatId = 29;
        }
      }else if( hash == '#estate' ){
        if ( currentLang == 'ru' ){
          anhorSubCatId = 18;
        }else if (currentLang == 'en' ){
          anhorSubCatId = 141;
        }else if (currentLang == 'ua' ){
          anhorSubCatId = 35;
        }
      }else if( hash == '#education' ){
        if ( currentLang == 'ru' ){
          anhorSubCatId = 16;
        }else if (currentLang == 'en' ){
          anhorSubCatId = 143;
        }else if (currentLang == 'ua' ){
          anhorSubCatId = 33;
        }
      }
      else if( hash == '#e-commerce' ){
        if ( currentLang == 'ru' ){
          anhorSubCatId = 14;
        }else if (currentLang == 'en' ){
          anhorSubCatId = 145;
        }else if (currentLang == 'ua' ){
          anhorSubCatId = 31;
        }
      }

      jQuery('.cases-cat-wrapper .cat').each( function () {

        let thisCat = jQuery(this);

        var subCatId = thisCat.data('subcatid');

        if ( subCatId == anhorSubCatId ){

          thisCat.addClass('active-cat');

          var catId = thisCat.data('catid');

          var allCat = thisCat.data('allcat');

          var currentLang = thisCat.data('lang');

          var pageCatNavWrapper = jQuery('.mor-cases-dtn-wrap');

          var allCatPosts = Number(thisCat.attr('data-allposts'));

          jQuery('#mor-cases-dtn-wrap').attr('data-allposts', allCatPosts);

          var targetAllPosts = Number(jQuery('#mor-cases-dtn-wrap').attr('data-allposts'));

          var moreBtn = jQuery('#more-cases');
          var lessBtn = jQuery('#less-cases');

          lessBtn.addClass('d-none');

          if ( targetAllPosts <= 6 ){
            moreBtn.addClass('d-none');
          }else{
            moreBtn.removeClass('d-none');
          }

          moreBtn.attr('data-maincat', catId);
          moreBtn.attr('data-currentcat', subCatId);
          moreBtn.attr('data-allcat', allCat);
          moreBtn.attr('data-offsetpost', 1);

          lessBtn.attr('data-currentcat', subCatId);
          lessBtn.attr('data-maincat', catId);
          lessBtn.attr('data-allcat', allCat);

          pageCatNavWrapper.addClass('d-none');

          pageCatNavWrapper.each(function () {

            var $this = jQuery(this);
            var activeCat = $this.data('catnav');

            if( activeCat == catId ){
              $this.toggleClass('d-none');
            }
          });


          var data = {

            action: 'change_cases_category',
            catId: catId,
            allCat: allCat,
            currentLang: currentLang,
            subCatId: subCatId

          };

          jQuery.post( myajax.url, data, function(response) {

            if(jQuery.trim(response) !== ''){

              jQuery('#cases-list').html(response);
            }
          });
        }
      })
    }
  }

    //Вывод больше кейсов для страницы "Тааргет"

    if ( jQuery('.page-template-template-target').length ){


        var activeCat = jQuery('.cases-cat-wrapper .cat.active-cat');
        var allPosts = Number(activeCat.attr('data-allposts'));

        jQuery('#mor-cases-dtn-wrap').attr('data-allposts', allPosts);

        var targetAllPosts = Number(jQuery('#mor-cases-dtn-wrap').attr('data-allposts'));

        var moreBtn = jQuery('#more-cases');
        var lessBtn = jQuery('#less-cases');

        if ( targetAllPosts <= 6 ){
            moreBtn.addClass('d-none');
        }else{
            moreBtn.removeClass('d-none');
        }

        moreBtn.attr('data-maincat', activeCat.attr('data-catid'));
        moreBtn.attr('data-currentcat', activeCat.attr('data-subcatid'));
        moreBtn.attr('data-allcat', activeCat.attr('data-allcat'));

        lessBtn.attr('data-currentcat', activeCat.attr('data-subcatid'));
        lessBtn.attr('data-maincat', activeCat.attr('data-catid'));
        lessBtn.attr('data-allcat', activeCat.attr('data-allcat'));

        moreBtn.on('click', function (e) {
            e.preventDefault();

            var caseLeng = jQuery(this).attr('data-lang');
            var caseOffset = Number(jQuery(this).attr('data-offsetpost'));
            var caseMainCat = Number(jQuery(this).attr('data-maincat'));
            var caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
            var caseAllCat = Number(jQuery(this).attr('data-allcat'));

            targetAllPosts = Number(jQuery('#mor-cases-dtn-wrap').attr('data-allposts'));

            var moreCasesTarget = {
                action: 'more_cases_target',
                currentLang: caseLeng,
                postIn: 6,
                allCat: caseAllCat,
                offsetPosts: caseOffset,
                mainCat: caseMainCat,
                currentCat: caseCurrentCat
            };

            jQuery.post( myajax.url, moreCasesTarget, function(response) {

                if(jQuery.trim(response) !== ''){

                    jQuery('#cases-list').append(response);
                }
            });

            jQuery(this).attr('data-offsetpost', caseOffset + 1);

            if ( ((caseOffset + 1) * 6) >= targetAllPosts){
                jQuery(this).addClass('d-none');
            }

            console.log(caseOffset, targetAllPosts);

            lessBtn.removeClass('d-none');

        });

        lessBtn.on('click', function (e) {
            e.preventDefault();

            var caseLeng = jQuery(this).attr('data-lang');
            var caseOffset = Number(jQuery(this).attr('data-offsetpost'));
            var caseMainCat = Number(jQuery(this).attr('data-maincat'));
            var caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
            var caseAllCat = Number(jQuery(this).attr('data-allcat'));

            var moreCasesTarget = {
                action: 'more_cases_target',
                currentLang: caseLeng,
                postIn: 6,
                allCat: caseAllCat,
                offsetPosts: caseOffset,
                mainCat: caseMainCat,
                currentCat: caseCurrentCat
            };

            jQuery.post( myajax.url, moreCasesTarget, function(response) {

                if(jQuery.trim(response) !== ''){

                    jQuery('#cases-list').html(response);
                }
            });

            jQuery(this).addClass('d-none');
            moreBtn.removeClass('d-none');

            moreBtn.attr('data-offsetpost', 1);

            var href = jQuery(this).attr('href');

            jQuery('html, body').animate({
                scrollTop: jQuery(href).offset().top
            }, 1000);
        })


    }

  //Вывод больше кейсов для страницы "Разработка"

  if ( jQuery('.page-template-template-development').length ){

    var allPosts = Number(jQuery('#mor-cases-btn-wrap').attr('data-allposts'));

    var moreBtn = jQuery('#more-cases');
    var lessBtn = jQuery('#less-cases');

    if ( allPosts <= 3 ){
      moreBtn.addClass('d-none');
    }else{
      moreBtn.removeClass('d-none');
    }

    moreBtn.on('click', function (e) {
      e.preventDefault();

      var caseLeng = jQuery(this).attr('data-lang');
      var caseOffset = Number(jQuery(this).attr('data-offsetpost'));
      var caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));

      var moreCasesDev = {
        action: 'more_cases_dev',
        currentLang: caseLeng,
        postIn: 3,
        offsetPosts: caseOffset,
        currentCat: caseCurrentCat
      };

      jQuery.post( myajax.url, moreCasesDev, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#cases-list').append(response);
        }
      });

      jQuery(this).attr('data-offsetpost', caseOffset + 1);

      if ( ((caseOffset + 1) * 3) >= allPosts){
        jQuery(this).addClass('d-none');
      }

      lessBtn.removeClass('d-none');

    });

    lessBtn.on('click', function (e) {
      e.preventDefault();

      var caseLeng = jQuery(this).attr('data-lang');
      var caseOffset = Number(jQuery(this).attr('data-offsetpost'));
      var caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));

      var moreCasesDev = {
        action: 'more_cases_dev',
        currentLang: caseLeng,
        postIn: 3,
        offsetPosts: caseOffset,
        currentCat: caseCurrentCat
      };

      jQuery.post( myajax.url, moreCasesDev, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#cases-list').html(response);
        }
      });

      jQuery(this).addClass('d-none');
      moreBtn.removeClass('d-none');

      moreBtn.attr('data-offsetpost', 1);

      var href = jQuery(this).attr('href');

      jQuery('html, body').animate({
        scrollTop: jQuery(href).offset().top
      }, 1000);
    })
  }

    //Смена категории кейса для страницы "Разработки"

    jQuery('.page-template-template-development .cases-cat-wrapper .cat').on('click', function (e) {
        e.preventDefault();

        jQuery('.page-template-template-development .cases-cat-wrapper .cat').removeClass('active-cat');

        jQuery(this).addClass('active-cat');

        var catId = jQuery(this).data('catid');

        var subCatId = jQuery(this).data('subcatid');

        var allCat = jQuery(this).data('allcat');

        var currentLang = jQuery(this).data('lang');

        var pageCatNavWrapper = jQuery('.mor-cases-dtn-wrap');

        pageCatNavWrapper.addClass('d-none');

        pageCatNavWrapper.each(function () {

            var $this = jQuery(this);
            var activeCat = $this.data('catnav');

            if( activeCat == catId ){
                $this.toggleClass('d-none');
            }

        });

        var data = {

            action: 'change_dev_cases_category',
            catId: catId,
            allCat: allCat,
            currentLang: currentLang,
            subCatId: subCatId
        };

        jQuery.post( myajax.url, data, function(response) {

            if(jQuery.trim(response) !== ''){

                jQuery('#cases-list').html(response);

                if ( winWid <= 992 ){

                    jQuery('#portfolio-slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true,
                        fade: true
                    });

                }

                var allPortSlides = jQuery('#portfolio-slider .case-item');

                var firstPortfolioPrev = jQuery('#portfolio-slider .case-item:nth-child(1) img').attr('src');

                if ( winWid > 992 ){
                    jQuery('#portfolio-slider .case-item:nth-child(1)').addClass('focuse-prev');
                }

                jQuery('.portfolio-slider-wrapper .desk-prev').css({'background-image' : 'url("'+firstPortfolioPrev+'")'});

                allPortSlides.each(function () {

                    var hoverItem = jQuery(this);

                    hoverItem.mouseenter(function () {
                        jQuery('#portfolio-slider .case-item').removeClass('focuse-prev');
                        jQuery(this).addClass('focuse-prev');
                        var accentPic = jQuery(this).find('img').attr('src');
                        jQuery('.portfolio-slider-wrapper .desk-prev').css({'background-image' : 'url("'+accentPic+'")'});
                    })
                });
            }

        });

    });

    //Вывод разнеого кол-ва кейсов на странице всех кейсов при разных расширениях

    //Кнопка Больше кейсов на странице все кейсы

    if( jQuery('.page-template-template-all_cases').length ){

        //All Cases Page First Screen Pic Gallery Position

        if( winWid > 992 ){
            var caseMainScreenH = jQuery('.main-all-cases-screen').height();

            var caseMainScreenItemH = caseMainScreenH / 100;

            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item').css({'height' : (caseMainScreenItemH * 35.4) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(1),.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(3), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(5)').css({'left' : (caseMainScreenItemH * 7.1) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(2),.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(4), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(10)').css({'right' : (caseMainScreenItemH * 7.1) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(6)').css({'left' : (caseMainScreenItemH * 46.8) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(9)').css({'right' : (caseMainScreenItemH * 46.8) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(7)').css({'left' : (caseMainScreenItemH * 86.6) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(8)').css({'right' : (caseMainScreenItemH * 86.6) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(1), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(2)').css({'bottom' : (caseMainScreenItemH * 79.6) +'px'});
            jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(3), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(4)').css({'bottom' : (caseMainScreenItemH * 39.8) +'px'});

            jQuery(window).resize(function () {
                var caseMainScreenH = jQuery('.main-all-cases-screen').height();

                var caseMainScreenItemH = caseMainScreenH / 100;

                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item').css({'height' : (caseMainScreenItemH * 35.4) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(1),.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(3), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(5)').css({'left' : (caseMainScreenItemH * 7.1) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(2),.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(4), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(10)').css({'right' : (caseMainScreenItemH * 7.1) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(6)').css({'left' : (caseMainScreenItemH * 46.8) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(9)').css({'right' : (caseMainScreenItemH * 46.8) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(7)').css({'left' : (caseMainScreenItemH * 86.6) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(8)').css({'right' : (caseMainScreenItemH * 86.6) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(1), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(2)').css({'bottom' : (caseMainScreenItemH * 79.6) +'px'});
                jQuery('.main-all-cases-screen .bg-gallery-wrapper .item:nth-child(3), .main-all-cases-screen .bg-gallery-wrapper .item:nth-child(4)').css({'bottom' : (caseMainScreenItemH * 39.8) +'px'});
            });
        }


        if( winWid < 1025 ){
            jQuery('.our-cases .first-up').addClass('animate');
        }

        var currentCat = jQuery('.page-template-template-all_cases .cases-cat-wrapper .active-cat').attr('data-catid');

        var allCat = jQuery('.page-template-template-all_cases .cases-cat-wrapper .active-cat').attr('data-allcat');

        var allCases = jQuery('.page-template-template-all_cases .cases-cat-wrapper .active-cat').attr('data-allposts');

        var btnMoreCases = jQuery('.page-template-template-all_cases #more-cases');

        btnMoreCases.attr('data-currentcat', currentCat);
        btnMoreCases.attr('data-allcat', allCat);
        btnMoreCases.attr('data-allcases', allCases);

        var currentPageLang = btnMoreCases.attr('data-lang');

        if( winWid > 768 ){

            var adaptivAllCases = {
                action: 'adaptive_all_cases',
                currentLang: currentPageLang,
                postIn: 12
            };

            jQuery.post( myajax.url, adaptivAllCases, function(response) {

                if(jQuery.trim(response) !== ''){
                    jQuery('#cases-list').html(response);
                }
            });

        }else{

            var adaptivAllCases = {
                action: 'adaptive_all_cases',
                currentLang: currentPageLang,
                postIn: 6
            };

            jQuery.post( myajax.url, adaptivAllCases, function(response) {

                if(jQuery.trim(response) !== ''){
                    jQuery('#cases-list').html(response);
                }
            });
        }
    }

    jQuery('.page-template-template-all_cases #more-cases').on('click', function (e) {
        e.preventDefault();

        var offsetPost = Number( jQuery(this).attr('data-offsetpost') );

        var catId = jQuery(this).attr('data-currentcat');

        var allCases = jQuery(this).attr('data-allcases');

        var allCat = jQuery(this).attr('data-allcat');

        var currentLang = jQuery(this).attr('data-lang');

        var postPapPage;

        if( winWid > 768 ){
            postPapPage = 12;
        }else{
            postPapPage = 6;
        }

        allCases = allCases / postPapPage;

        if( allCases < (offsetPost + 1) || allCases == (offsetPost + 1) ){
            jQuery('#mor-cases-btn-wrap').addClass('d-none');
        }

        var nextOffset = offsetPost + 1;

        jQuery(this).attr('data-offsetpost', nextOffset);

        offsetPost = offsetPost * postPapPage;

        var data = {
            action: 'all_cases_page',
            catId: catId,
            allCat: allCat,
            offset: offsetPost,
            postIn: postPapPage,
            currentLang: currentLang
        };

        jQuery.post( myajax.url, data, function(response) {

            if(jQuery.trim(response) !== ''){

                jQuery('#cases-list').append(response);
            }
        });
    });

    //Переход по категорияс на странице всех кейсов

    jQuery('.page-template-template-all_cases .cases-cat-wrapper .cat').on('click', function (e) {
        e.preventDefault();

        jQuery('.page-template-template-all_cases .cases-cat-wrapper .cat').removeClass('active-cat');

        jQuery(this).addClass('active-cat');

        var catId = jQuery(this).data('catid');

        var allCat = jQuery(this).data('allcat');

        var allPosts = jQuery(this).attr('data-allposts');

        var postPapPage;

        if( winWid > 768 ){
            postPapPage = 12;
        }else{
            postPapPage = 6;
        }

        if( allPosts > postPapPage ){
            jQuery('#mor-cases-btn-wrap').removeClass('d-none');
        }else{
            jQuery('#mor-cases-btn-wrap').addClass('d-none');
        }

        var btnMore = jQuery('#more-cases');

        btnMore.attr('data-currentcat', catId);

        btnMore.attr('data-allcat', allCat);

        btnMore.attr('data-allcases', allPosts);

        btnMore.attr('data-offsetpost', 1);

        var currentLang = jQuery(this).data('lang');

        var data = {

            action: 'change_all_cases_category',
            catId: catId,
            allCat: allCat,
            postIn: postPapPage,
            currentLang: currentLang
        };

        jQuery.post( myajax.url, data, function(response) {

            if(jQuery.trim(response) !== ''){

                jQuery('#cases-list').html(response);

            }

        });

    });

  //Вывод больше кейсов для страницы "SMM"

  if ( jQuery('.page-template-template-smm').length ){

    let allPosts = Number(jQuery('#mor-cases-btn-wrap').attr('data-allposts'));

    let moreBtn = jQuery('#more-cases');
    let lessBtn = jQuery('#less-cases');

    if ( allPosts <= 6 ){
      moreBtn.addClass('d-none');
    }else{
      moreBtn.removeClass('d-none');
    }

    moreBtn.on('click', function (e) {
      e.preventDefault();

      let caseLeng = jQuery(this).attr('data-lang');
      let caseOffset = Number(jQuery(this).attr('data-offsetpost'));
      let caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));

      let moreCasesDev = {
        action: 'more_cases_smm',
        currentLang: caseLeng,
        postIn: 6,
        offsetPosts: caseOffset,
        currentCat: caseCurrentCat
      };

      jQuery.post( myajax.url, moreCasesDev, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#cases-list').append(response);
        }
      });

      jQuery(this).attr('data-offsetpost', caseOffset + 1);

      if ( ((caseOffset + 1) * 6) >= allPosts){
        jQuery(this).addClass('d-none');
      }

      lessBtn.removeClass('d-none');

    });

    lessBtn.on('click', function (e) {
      e.preventDefault();

      let caseLeng = jQuery(this).attr('data-lang');
      let caseOffset = Number(jQuery(this).attr('data-offsetpost'));
      let caseCurrentCat = Number(jQuery(this).attr('data-currentcat'));

      let moreCasesDev = {
        action: 'more_cases_smm',
        currentLang: caseLeng,
        postIn: 6,
        offsetPosts: caseOffset,
        currentCat: caseCurrentCat
      };

      jQuery.post( myajax.url, moreCasesDev, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#cases-list').html(response);
        }
      });

      jQuery(this).addClass('d-none');
      moreBtn.removeClass('d-none');

      moreBtn.attr('data-offsetpost', 1);

      let href = jQuery(this).attr('href');

      jQuery('html, body').animate({
        scrollTop: jQuery(href).offset().top
      }, 1000);
    })
  }




    /*
    *------------------------------------------*
    * All Garbage Functions Delete After Relise*
    *------------------------------------------*
   */


    // ANIMATE INIT

    /*new WOW().init();*/

    // MAP INIT

    /*function initMap() {
        var location = {
            lat: 48.268376,
            lng: 25.9301257
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
            scrollwheel: false
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        var marker = new google.maps.Marker({ // кастомный марекр + подпись
            position: location,
            title:"Город, Улица, \n" +
            "Дом, Квартира",
            map: map,
            icon: {
                url: ('img/marker.svg'),
                scaledSize: new google.maps.Size(141, 128)
            }
        });

        jQuery.getJSON("map-style_dark.json", function(data) { // подключения стиля для гугл карты
            map.setOptions({styles: data});
        });

    }

    initMap();*/

    // MOB-MENU

    /*jQuery('#menu-btn').on('click', function (e) {
       e.preventDefault();

       jQuery('#mob-menu').toggleClass('active-menu');
       jQuery(this).toggleClass('open-menu');
    });

    jQuery('#mob-menu a').on('click', function (e) {
        e.preventDefault();

        jQuery('#mob-menu').removeClass('active-menu');
        jQuery('#menu-btn').removeClass('open-menu');
    });*/




    // CASTOME SLIDER ARROWS

    /*jQuery('.mein-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true

    });

    jQuery('.main-page .arrow-left').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickPrev');
    });

    jQuery('.main-page .arrow-right').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickNext');
    });*/



    // DTA VALUE REPLACE

    /*jQuery('.open-form').on('click', function (e) {
        e.preventDefault();
        var type = jQuery(this).data('type');
        jQuery('#type-form').find('input[name=type]').val(type);
    });*/

    // FORM LABEL FOCUS UP

    /*jQuery('.form-control').on('focus', function() {
        jQuery(this).closest('.form-control').find('label').addClass('active');
    });

    jQuery('.form-control').on('blur', function() {
        var jQuerythis = jQuery(this);
        if (jQuerythis.val() == '') {
            jQuerythis.closest('.form-control').find('label').removeClass('active');
        }
    });*/

    // SCROLL TOP.

    /*jQuery(document).on('click', '.up-btn', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 300);
    });*/

    // SHOW SCROLL TOP BUTTON.

    /*jQuery(document).scroll(function() {
        var y = jQuery(this).scrollTop();

        if (y > 800) {
            jQuery('.up-btn').fadeIn();
        } else {
            jQuery('.up-btn').fadeOut();
        }
    });*/



});


// Disable form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        let forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        let validation = Array.prototype.filter.call(forms, function(form) {


            form.addEventListener('submit', function(event) {

              let phoneValue = jQuery(this).find('input[name = phone]').val();

              if ( phoneValue.length < 9 ){
                event.preventDefault();
                event.stopPropagation();
                jQuery(this).find('.phone-group .invalid-feedback').show(200);
              }
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');

            }, false);
        });
    }, false);
})();

// PRELOADER

jQuery(window).on('load', function () {

    var winWid = jQuery(window).width();

    /*jQuery("footer").load("/wp-content/themes/smmstudio/template-parts/popup.php");*/

    jQuery('#loader').fadeOut(400);

    if( jQuery('.page-template-template-target').length ){

      if( jQuery('.mokup-video').length ){
        if( winWid >= 992 ){
          var videoLink = jQuery('.main-serv-screen video').attr('data-videosrc');
          jQuery('.main-serv-screen video').attr('src', videoLink);
          jQuery('.main-serv-screen video').get(0).play();
        }
      }

      setTimeout(function () {
        jQuery('.main-serv-screen .text-wrapper').addClass('visual');
      }, 500);

    }
});

