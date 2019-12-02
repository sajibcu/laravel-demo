
$(function () {

  $('.nsbd_slider').slick({
    autoplay: true,
    speed: 800,
    lazyLoad: 'progressive',
    arrows: false,
    dots: true,
  }).slickAnimation();

  $('.navbar-toggler').click(function () {
    //alert();
    $('#navbar-hamburger').toggleClass('hidden');
    $('#navbar-close').toggleClass('hidden');
  });

  if($('#topic_list').length){
    $('#topic_list').easyResponsiveTabs({
      type: 'vertical',
      width: 'auto',
      fit: true
    });
}

  $(".math_tab_container").delay(2000).fadeIn(500);

  $('.panel .nav-tabs').on('click', 'a', function (e) {
    e.preventDefault();
    var tab = $(this).parent(),
      tabIndex = tab.index(),
      tabPanel = $(this).closest('.panel'),
      tabPane = tabPanel.find('.tab-pane').eq(tabIndex);
    tabPanel.find('.active').removeClass('active');
    tab.addClass('active');
    tabPane.addClass('active');
  });

  //******************accordion*******************//
  var Accordion = function (el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    var links = this.el.find('.topic_article_title');
    links.on('click', {
      el: this.el,
      multiple: this.multiple
    }, this.dropdown)
  }
  Accordion.prototype.dropdown = function (e) {
    var $el = e.data.el;
    //alert($el);
    $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');
    /*
    if (!e.data.multiple) {
        $el.find('.topic_accor_content').not($next).slideUp().parent().removeClass('open');
    };*/
  }
  var accordion = new Accordion($('.topic_accor_container'), false);
  if($('#quiz_timer').length){
    $("#quiz_timer").TimeCircles({ 
      time: { Days: { show: false }, Hours: { show: true } },
      fg_width: 0.04,
      bg_width: 0.6,
      text_size: 0.08
    });
  }
});

