zk.onDocumentReady(['index','home-app'],function(sVars){var register=zk.register({entrance:sVars.default_entrance});$('#home-app-index-button').click(function(){$('#home-app').show();$('#home-app-register-step-one').hide();$('#home-app-register-step-two').hide();$('#home-app-login').hide();$('.captive-back').hide()});$('#home-app-couple-button').click(function(){$('#home-app').hide();$('#home-app-register-step-one').show();$('.captive-back').show()});$('#registration-button').click(function(){$('#home-app-register-step-one').hide();$('#home-app-register-step-two').show();$('.captive-back').show()});$('#login-button-app').click(function(){$('#home-app-register-step-one').hide();$('#home-app-login').show();$('.captive-back').show()});$('#fb_connect').click(function(e){e.preventDefault();$('body').statusIcon('loading');register.setEntrance($(this).data('entrance'));register.facebook(function(response){if(response.message){zk.message(response.message);$('body').statusIcon()}else{$('body').statusIcon();zk.redirect(response.url)}})});enquire.register(zk.MEDIA_QUERY.MOBILE,{match:function(){zk.intercom.setForcedShow();var pageHeight=$(window).height();zk.bindGlobalEvent('scroll',function(){var pageScroll=$(document).scrollTop();if(pageScroll>pageHeight){$('#register-landing').addClass('is__active');zk.intercom.showChat({},!0)}else{$('#register-landing').removeClass('is__active');zk.intercom.hideChat()}})},unmatch:function(){zk.intercom.setForcedShow(!1)}})});zk.onDocumentReady(['index','home'],function(sVars){var register=zk.register({entrance:sVars.default_entrance});$('.js-create-new-account').click(function(e){e.preventDefault();register.setEntrance($(this).data('entrance'));register.register(function(response){if(response.url){zk.redirect(response.url)}});return !1});$('#login-button').click(function(e){e.preventDefault();register.login(function(response){if(response.url){zk.redirect(response.url)}});return !1});$('#slider-home').swiper({pagination:'#slider-home .swiper-pagination',paginationClickable:!0,nextButton:'#slider-home .slider__arrow--next',prevButton:'#slider-home .slider__arrow--prev',simulateTouch:!1,preloadImages:!1,lazyLoading:!0,lazyLoadingInPrevNext:!0,onReachEnd:function(){$('.fake-arrow').removeClass('hide')},onSlideChangeStart:function(s){var isIE9=/MSIE [9]/.test(navigator.userAgent);if(s.lazy&&isIE9){var lazyLoadingOnTransitionStart=s.params.lazyLoadingOnTransitionStart;s.params.lazyLoadingOnTransitionStart=!0;s.lazy.onTransitionStart();s.params.lazyLoadingOnTransitionStart=lazyLoadingOnTransitionStart}}});$('#slider-home').find('.slider__arrow--prev').on('click',function(){$('.fake-arrow').addClass('hide')});var eventDemos=zk.get('event','slider','themes');enquire.register(zk.MEDIA_QUERY.TABLET_PORTRAIT,{match:function(){if(typeof eventDemos!='undefined'){eventDemos.swiper(3)}}});enquire.register(zk.MEDIA_QUERY.DESKTOP,{match:function(){if(typeof eventDemos!='undefined'){eventDemos.swiper(4)}}});enquire.register(zk.MEDIA_QUERY.MOBILE,{match:function(){if(typeof eventDemos!='undefined'){eventDemos.swiper(1)}
zk.intercom.setForcedShow();var pageHeight=$(window).height();zk.bindGlobalEvent('scroll',function(){var pageScroll=$(document).scrollTop();if(pageScroll>pageHeight){$('#register-landing').addClass('is__active');zk.intercom.showChat({},!0)}else{$('#register-landing').removeClass('is__active');zk.intercom.hideChat()}})},unmatch:function(){zk.intercom.setForcedShow(!1)}})})