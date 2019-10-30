$(window).on('scroll', function () {
      if ($(window).scrollTop()) {
          $('nav').addClass('main-header-bar');
      } else {
          $('nav').removeClass('main-header-bar');
      }
  });
