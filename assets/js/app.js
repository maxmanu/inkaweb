!(function (e) {
  'use strict';
  function t(t, a) {
    t
      ? (e(a + ' .message-box')
          .removeClass('d-none')
          .addClass('d-block '),
        e(a + ' .message-box div')
          .removeClass('alert-danger')
          .addClass('alert-success')
          .text('Form submitted successfully'))
      : (e(a + ' .message-box')
          .removeClass('d-none')
          .addClass('d-block '),
        e(a + ' .message-box div')
          .removeClass('alert-success')
          .addClass('alert-danger')
          .text('Found error in the form. Please check again.'));
  }
  // e(function () {
  //   e('[data-background]').each(function () {
  //     e(this).css('background-image', 'url(' + e(this).attr('data-background') + ')');
  //   }),
  //     e('.scrolltop-btn').on('click', function () {
  //       e('body,html').animate({ scrollTop: 0 });
  //     }),
  //     e('.mobile-menu-toggle').on('click', function () {
  //       return e('.body-overlay').addClass('overlay-on'), e('.mobile-menu').addClass('active'), !1;
  //     }),
  //     e('.close-menu').on('click', function () {
  //       e('.mobile-menu').removeClass('active'), e('.body-overlay').removeClass('overlay-on');
  //     }),
  //     e('.body-overlay').on('click', function () {
  //       e('.mobile-menu').removeClass('active'), e(this).removeClass('overlay-on');
  //     }),
  //     // e('.mobile-menu ul li.has-submenu a').each(function () {
  //     //   e(this).on('click', function () {
  //     //     e(this).siblings('ul').slideToggle(), e(this).toggleClass('icon-rotate');
  //     //   });
  //     // }),
  //     e('.mobile-menu-toggler').on('click', function () {
  //       e('body').toggleClass('primary-mobile-menu-open');
  //     }),
  //     e('.ofcanvus-btn').on('click', function () {
  //       return e('.ofcanvus-menu').addClass('active'), !1;
  //     }),
  //     e('.close-canvus').on('click', function () {
  //       return e('.ofcanvus-menu').removeClass('active'), !1;
  //     }),
  //     e(document).on('mouseup', function (t) {
  //       const a = e('.ofcanvus-menu');
  //       a.is(t.target) || 0 !== a.has(t.target).length || a.removeClass('active');
  //     });
  //   var t = (e = !1) => {
  //       var t = document.querySelector(':root');
  //       e
  //         ? (t.setAttribute('data-bs-theme', 'dark'), localStorage.setItem('theme', 'dark'))
  //         : (t.setAttribute('data-bs-theme', 'light'), localStorage.setItem('theme', 'light'));
  //     },
  //     a = () => {
  //       var e = document.querySelector(':root').getAttribute('data-bs-theme');
  //       t('light' === e);
  //     };
  //   (() => {
  //     var e = localStorage.getItem('theme');
  //     t('dark' == e);
  //     var s = document.querySelector('.dark-light-switcher');
  //     s && s.addEventListener('click', a);
  //   })(),
  //     e('.switch-input').on('change', function () {
  //       this.checked
  //         ? (e('.yearly-price').css({ display: 'block' }), e('.monthly-price').css({ display: 'none' }))
  //         : (e('.yearly-price').css({ display: 'none' }), e('.monthly-price').css({ display: 'block' }));
  //     }),
  //     e('.expand-btn').each(function () {
  //       e(this).on('click', function () {
  //         e(this).siblings('.feature-list').toggleClass('expand-list'), e(this).toggleClass('active');
  //       });
  //     }),
  //     [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (e) {
  //       return new bootstrap.Tooltip(e);
  //     }),
  //     e('.hm2-accordion .accordion-header a').each(function () {
  //       e(this).on('click', function () {
  //         e(this).parents('.accordion').find('.show').parents('.acoridion-item').addClass('active');
  //       });
  //     }),
  //     e('.notice-close').on('click', function () {
  //       e('.notice-wrapper').slideUp(), e('.notice-bar').slideUp(), e('body').css('overflow', 'auto');
  //     }),
  //     e('.notice-toggle').on('click', function () {
  //       e('.notice-wrapper').toggleClass('active'),
  //         e('.notice-wrapper').hasClass('active')
  //           ? e('body').css('overflow', 'hidden')
  //           : e('body').css('overflow', 'auto');
  //     });
  // }),
    e('.vps-video-popup').magnificPopup({ type: 'iframe' }),
    e('.counter').counterUp({ delay: 10, time: 1e3 }),
    e('.countdown-timer').each(function () {
      var t = e(this).data('date');
      e(this).countdown({ date: t });
    }),
    e('.mn-data-center .data-center-pointer').each(function () {
      e(this).on('mouseenter', function () {
        e(this).parents('.mn-data-center').find('a.active').removeClass('active'), e(this).addClass('active');
      });
    }),
    e('.crm-monthly').each(function () {
      e(this).on('click', function () {
        e(this).parents('.crm-pricing-switch-wrapper').find('.crm-checkbox-switch').prop('checked', !1);
      });
    }),
    e('.crm-yearly').each(function () {
      e(this).on('click', function () {
        e(this).parents('.crm-pricing-switch-wrapper').find('.crm-checkbox-switch').prop('checked', !0);
      });
    }),
    e('.crm-pricing-switch').each(function () {
      e(this).on('click', function () {
        !0 !== e(this).find('.crm-checkbox-switch').is(':checked')
          ? (e(this).parents('.table').find('.crm_monthly_price').show(),
            e(this).parents('.table').find('.crm_yearly_price').hide())
          : (e(this).parents('.table').find('.crm_monthly_price').hide(),
            e(this).parents('.table').find('.crm_yearly_price').show());
      });
    }),
    e('.isb-price-btn').on('click', function () {
      e(this).toggleClass('clicked'),
        e('.isb-price.year ,.hds-price-year').toggleClass('show'),
        e('.isb-price.month , .hds-price-month').toggleClass('hide');
    }),
    e(window).on('scroll', function () {
      e(window).scrollTop() > 150 ? e('.scrolltop-btn').fadeIn() : e('.scrolltop-btn').fadeOut(),
        e(window).scrollTop() > 80 ? e('header').addClass('sticky-header') : e('header').removeClass('sticky-header');
    }),
    jQuery(window).on('load', function () {
      if (document.querySelectorAll('.feedback-wrapper').length > 0) {
        var t = document.querySelector('.feedback-massonry');
        new Masonry(t, { itemSelector: '.col-lg-4', columnWidth: 1 });
      }
      e('.loader-wrap').fadeOut(), e('.range-slider').slider({ min: 1, max: 6, value: 2 });
      var a = e('#vps_range_slider input'),
        s = a.val();
      s <= 1
        ? (e('.vps_value').hide(),
          e('.vps_1_value').show(),
          e('.vps_label').removeClass('active'),
          e('.vps_label_1').addClass('active'))
        : s <= 2
        ? (e('.vps_value').hide(),
          e('.vps_2_value').show(),
          e('.vps_label').removeClass('active'),
          e('.vps_label_2').addClass('active'))
        : s <= 3
        ? (e('.vps_value').hide(),
          e('.vps_3_value').show(),
          e('.vps_label').removeClass('active'),
          e('.vps_label_3').addClass('active'))
        : s <= 4
        ? (e('.vps_value').hide(),
          e('.vps_4_value').show(),
          e('.vps_label').removeClass('active'),
          e('.vps_label_4').addClass('active'))
        : s <= 5
        ? (e('.vps_value').hide(),
          e('.vps_5_value').show(),
          e('.vps_label').removeClass('active'),
          e('.vps_label_5').addClass('active'))
        : s <= 6 &&
          (e('.vps_value').hide(),
          e('.vps_6_value').show(),
          e('.vps_label').removeClass('active'),
          e('.vps_label_6').addClass('active')),
        a.on('change', function () {
          (s = e(this).val()) <= 1
            ? (e('.vps_value').hide(),
              e('.vps_1_value').show(),
              e('.vps_label').removeClass('active'),
              e('.vps_label_1').addClass('active'))
            : s <= 2
            ? (e('.vps_value').hide(),
              e('.vps_2_value').show(),
              e('.vps_label').removeClass('active'),
              e('.vps_label_2').addClass('active'))
            : s <= 3
            ? (e('.vps_value').hide(),
              e('.vps_3_value').show(),
              e('.vps_label').removeClass('active'),
              e('.vps_label_3').addClass('active'))
            : s <= 4
            ? (e('.vps_value').hide(),
              e('.vps_4_value').show(),
              e('.vps_label').removeClass('active'),
              e('.vps_label_4').addClass('active'))
            : s <= 5
            ? (e('.vps_value').hide(),
              e('.vps_5_value').show(),
              e('.vps_label').removeClass('active'),
              e('.vps_label_5').addClass('active'))
            : s <= 6 &&
              (e('.vps_value').hide(),
              e('.vps_6_value').show(),
              e('.vps_label').removeClass('active'),
              e('.vps_label_6').addClass('active'));
        });
      var o = e('#vps_range_slider .tooltip');
      if (o.length > 0) {
        var c = o.attr('style').match(/\d+/g);
        c[0],
          e('.price-slider-wrapper .vps_labels span.active').css({ marginLeft: c[0] - 2 + '%' }),
          a.on('change', function () {
            var t = o.attr('style').match(/\d+/g);
            e('.price-slider-wrapper .vps_labels span.active').css({ marginLeft: t[0] - 2 + '%' });
          });
      }
      var i = e('.gh-filter-items').isotope({});
      e('.gh-filter-controls').on('click', 'button', function () {
        var t = e(this).attr('data-filter');
        i.isotope({ filter: t });
      }),
        e('.gh-filter-controls button').each(function () {
          e(this).on('click', function () {
            e(this).parents('.gh-filter-controls').find('button.active').removeClass('active'),
              e(this).addClass('active');
          });
        });
      var n = e('.dtc-grid').isotope({});
      e('.data-center-filter-btns').on('click', 'button', function () {
        var t = e(this).attr('data-filter');
        n.isotope({ filter: t });
      }),
        e('.data-center-filter-btns button').each(function () {
          e(this).on('click', function () {
            e(this).parent().find('button.active').removeClass('active'), e(this).addClass('active');
          });
        }),
        setTimeout(function () {
          e('.notice-bar').slideDown();
        }, 500);
    }),
    e('#contactForm').length &&
      e('#contactForm').on('submit', function (a) {
        var s, o, c, i, n;
        a.isDefaultPrevented()
          ? t(!1, '#contact')
          : (a.preventDefault(),
            (s = e('#contactForm input[name="name"]').val()),
            (o = e('#contactForm input[name="email"]').val()),
            (c = e('#contactForm input[name="phone"]').val()),
            (i = e('#contactForm input[name="subject"]').val()),
            (n = e('#contactForm textarea[name="message"]').val()),
            s && o && n
              ? e.ajax({
                  type: 'POST',
                  url: 'libs/contact-form-process.php',
                  data: { name: s, email: o, phone: c, subject: i, message: n },
                  success: function (a) {
                    'success' == a ? (e('#contactForm')[0].reset(), t(!0, '#contact')) : t(!1, '#contact');
                  },
                })
              : t(!1, '#contact'));
      });
  const a = e('.primary-menu__link.has-sub');
  a.on('click', function (t) {
    t.preventDefault(),
      t.stopPropagation(),
      e(this).parent().toggleClass('active'),
      e(this).parent().siblings().removeClass('active');
  }),
    e(document).on('click', function () {
      a && a.parent().siblings().removeClass('active');
    }),
    e('.mega-tab').on('click', function (e) {
      e.stopPropagation();
    }),
    e('.mega-sub-menu').on('click', function (e) {
      e.stopPropagation();
    }),
    document.querySelectorAll('.scroller-x').forEach((e) => {
      e.setAttribute('data-animated', !0);
      const t = e.querySelector('.scroller-x__list');
      Array.from(t.children).forEach((e) => {
        const a = e.cloneNode(!0);
        a.setAttribute('aria-hidden', !0), t.appendChild(a);
      });
    }),
    document.querySelectorAll('.host-web-range-slider input').forEach((e) => {
      e.oninput = function () {
        e.parentElement.previousSibling.previousElementSibling.children[1].children[0].textContent = this.value + ' ';
      };
    });
})(jQuery);
