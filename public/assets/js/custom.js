var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

//



  jQuery(document).ready(function($) {
    var alterClass = function() {
      var ww = document.body.clientWidth;
      if (ww <= 1199) {
        $('.Education-Experience').removeClass('col-6')
      } else if (ww > 1199) {
        $('.Education-Experience').addClass('col-6')
      };
      if (ww <= 991.98) {
        $('.Education-Experience').removeClass('col-6')
        $('.Education-Experience').removeClass('col-6')
        
      } else if (ww > 991.98) {
        $('.Education-Experience').addClass('col-6')
        $('.Education-Experience').addClass('col-6')
      };
      //
      if (ww <= 1199) {
        $('.About-Col').removeClass('col-6')
        $(".about-img").css("margin-bottom", "20px");
      } else if (ww > 1199) {
        $('.About-Col').addClass('col-6')
        $(".about-img").css("margin-bottom", "");
      };
      if (ww <= 991.98) {
        $('.About-Col').removeClass('col-6')
        $(".about-img").css("margin-bottom", "20px");
        
      } else if (ww > 991.98) {
        $('.About-Col').addClass('col-6')
        $(".about-img").css("margin-bottom", "");
      };
    };
    $(window).resize(function(){
      alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
  });


  $( document ).ready(function() {
    $(".card-text-trim").each(function() {
        var lengthtrim = 700;
        if ($(this).text().length > lengthtrim) {
            $(this).text($(this).text().substr(0, lengthtrim));
            $(this).append('...');
        }
    });
  });