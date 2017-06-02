(function($) {
"use strict";
/*------------------------------------------------------------------
[Table of contents]

PREMIX - Custom Funtion
PREMIX - On screen INIT
PREMIX - Preloader
PREMIX - Progress Bar
PREMIX - Gallery
PREMIX - Slim Menu
PREMIX - Slider Range
PREMIX - CountDown
PREMIX - Gallery Grid Item
PREMIX - Carousel
PREMIX - Players
PREMIX - Full Screen
PREMIX - Twitter Tweet
PREMIX - Suffle Letters
PREMIX - SCROLL AND FIXED MENU
PREMIX - Contact Form
-------------------------------------------------------------------*/
  /* --------------------------------------------------------------------- */
  /*  PREMIX - Custom Funtion
  /* --------------------------------------------------------------------- */
  jQuery.fn.is_exists = function(){return this.length>0;}

  /* --------------------------------------------------------------------- */
  /*  PREMIX - On screen INIT
  /* --------------------------------------------------------------------- */
  $.fn.isOnScreen = function(){
      var bounds = this.offset();
      var win = $(window);
      var viewport = {
          top : $(window).scrollTop(),
          left : $(window).scrollLeft()
      };
      viewport.right = viewport.left + $(window).width();
      viewport.bottom = viewport.top + $(window).height();
      bounds.right = bounds.left + this.outerWidth();
      bounds.bottom = bounds.top + this.outerHeight();
      return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom)); 
  };
$(window).on('load', function() {

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Preloader
  /* --------------------------------------------------------------------- */
  if($("#preloaders").is_exists()){
    $("#preloaders").fadeOut(400);
  }

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Progress Bar
  /* --------------------------------------------------------------------- */
  var getMax = function(){
      return $(document).height() - $(window).height();
  }   
  var getValue = function(){
      return $(window).scrollTop();
  }    
  if('max' in document.createElement('progress')){
      // Browser supports progress element
      var progressBar = $('progress');      
      // Set the Max attr for the first time
      progressBar.attr({ max: getMax() });
      $(document).on('scroll', function(){
          // On scroll only Value attr needs to be calculated
          progressBar.attr({ value: getValue() });
      });    
      $(window).on('resize',function(){
          // On resize, both Max/Value attr needs to be calculated
          progressBar.attr({ max: getMax(), value: getValue() });
      });   
  }
  else {
      var progressBar = $('.progress-bar'), 
          max = getMax(), 
          value, width;      
      var getWidth = function(){
          // Calculate width in percentage
          value = getValue();            
          width = (value/max) * 100;
          width = width + '%';
          return width;
      }     
      var setWidth = function(){
          progressBar.css({ width: getWidth() });
      }      
      $(document).on('scroll', setWidth);
      $(window).on('resize', function(){
          // Need to reset the Max attr
          max = getMax();
          setWidth();
      });
  }

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Gallery
  /* --------------------------------------------------------------------- */
  if($('#premix-gallery').is_exists()) {
    var $container = $('#premix-gallery'),
        colWidth = function () {
          var w = $container.width(), 
            columnNum = 1,
            columnWidth = 0;
          if (w > 1200) {
            columnNum  = 4;
          } else if (w > 900) {
            columnNum  = 4;
          } else if (w > 600) {
            columnNum  = 2;
          } else if (w > 450) {
            columnNum  = 2;
          } else if (w > 385) {
            columnNum  = 1;
          }
          columnWidth = Math.floor(w/columnNum);
          $container.find('.premix-gallery-grid-item').each(function() {
            var $item = $(this),
              multiplier_w = $item.attr('class').match(/premix-gallery-grid-item-w(\d)/),
              multiplier_h = $item.attr('class').match(/premix-gallery-grid-item-h(\d)/),
              width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
              height = multiplier_h ? columnWidth*multiplier_h[1]*0.4-12 : columnWidth*0.5;
            $item.css({
              width: width,
              //height: height
            });
          });
          return columnWidth;
        },
        isotope = function () {
          $container.isotope({
            resizable: false,
            itemSelector: '.premix-gallery-grid-item',
            masonry: {
              columnWidth: colWidth(),
              gutterWidth: 0
            }
          });
        };
      isotope();
      $(window).on('resize',isotope);
      var $optionSets = $('.rs-portfolio-nav .option-set'),
          $optionLinks = $optionSets.find('li');
      $optionLinks.on('click',function(){
      var $this = $(this);
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // creativewise, apply new options
          $container.isotope( options );
        }
        return false;
      }); 
  } // End is_exists
}); // end on.load event
$(document).ready(function() {

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Slim Menu
  /* --------------------------------------------------------------------- */
  $('.slimmenu').slimmenu(
  {
      resizeWidth: '991',
      collapserTitle: '',
      animSpeed: 'medium',
      easingEffect: null,
      indentChildren: false,
      childrenIndenter: '&nbsp;'
  });
  /* --------------------------------------------------------------------- */
  /*  PREMIX - Slider Range
  /* --------------------------------------------------------------------- */
  if($('#slider-range').is_exists()) {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } // End is_exists

  /* --------------------------------------------------------------------- */
  /*  PREMIX - CountDown
  /* --------------------------------------------------------------------- */
  if($('#main-example').is_exists()) {
    $('#main-example').countdown('2018/03/10').on('update.countdown', function(event) {
      var $this = $(this).html(event.strftime(' ' 
        + '<span class="timer-count">%-D <span class="timer-text">Days</span></span>  ' 
        + '<span class="timer-count">%H <span class="timer-text">Hours</span></span> ' 
        + '<span class="timer-count">%M <span class="timer-text">Minutes</span></span> ' 
        + '<span class="timer-count">%S <span class="timer-text">Secods</span></span>'));
    });
  } // End is_exists
 
  /* --------------------------------------------------------------------- */
  /*  PREMIX - Gallery Grid Item
  /* --------------------------------------------------------------------- */
  if($('.premix-gallery-grid-item').is_exists()) {
    $('.premix-gallery-grid-item').magnificPopup({
      type: 'image',
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
    });
  } // End is_exists

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Carousel
  /* --------------------------------------------------------------------- */
  if($('#premix-slider').is_exists()) {
    var owl1 = $("#premix-slider");
        owl1.owlCarousel({
        navigation : false,
        slideSpeed : 300,
        items: 3,
        paginationSpeed : 400,
        itemsTablet: [992,2],
        touchDrag: true,
        mouseDrag: true,
        pagination : true,
        autoHeight : true,
        stopOnHover : true,
        autoPlay : 5000,
        loop: true,
        transitionStyle : "fade",
    });
  } // End is_exists

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Players
  /* --------------------------------------------------------------------- */
  if($('#premix-player').is_exists()) {
      var ap4 = new APlayer({
        element: document.getElementById('premix-player'),
        narrow: false,
        autoplay: false,
        showlrc: false,
        mutex: true,
        theme: '#ad7a86',
        mode: 'random',
        music: [
            {
                title: 'Another Day In Paradise!',
                author: 'Phil Collins',
                url: 'media/01AnotherDayInParadise.mp3',
            },
            {
                title: 'A Thousand Years',
                author: 'Christina Perri',
                url: 'media/christinaperriathousandyears.mp3',
            },
            {
                title: 'Uptown Funk',
                author: 'Bruno Mars',
                url: 'media/BrunoMars-UptownFunk.mp3',
            },
            {
                title: 'Sacrifice',
                author: 'Elton John',
                url: 'media/EltonJohn-Sacrifice.mp3',
            },
            {
                title: 'Sugar',
                author: 'Maroon 5',
                url: 'media/Maroon5-Sugar.mp3',
            }
        ]
    });
  } // End is_exists

  if($('#premix-player-index').is_exists()) {
      var ap1 = new APlayer({
        element: document.getElementById('premix-player-index'),
        narrow: false,
        autoplay: false,
        showlrc: false,
        mutex: true,
        theme: '#e6d0b2',
        mode: 'random',
        music: [
              {
                  title: 'Another Day In Paradise!',
                  author: 'Phil Collins',
                  url: 'media/01AnotherDayInParadise.mp3',
              },
              {
                  title: 'A Thousand Years',
                  author: 'Christina Perri',
                  url: 'media/christinaperriathousandyears.mp3',
              },
              {
                  title: 'Uptown Funk',
                  author: 'Bruno Mars',
                  url: 'media/BrunoMars-UptownFunk.mp3',
              },
              {
                  title: 'Sacrifice',
                  author: 'Elton John',
                  url: 'media/EltonJohn-Sacrifice.mp3',
              },
              {
                  title: 'Sugar',
                  author: 'Maroon 5',
                  url: 'media/Maroon5-Sugar.mp3',
              }
          ]

    });
    $('.aplayer-list').addClass('aplayer-list-hide');
    $(document).on("click",".premix_player_next",function() {
        var list = $('.aplayer-list ol').children().length;
        if( ap1.playIndex == list - 1 ) {
            return;
        }
        ap1.setMusic(  ap1.playIndex + 1  );
    });
    $(document).on("click",".premix_player_prev",function() {
         if ( ap1.playIndex == 0 ) {
            return;
        }
        ap1.setMusic(  ap1.playIndex - 1  );
    });
  } // End is_exists

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Full Screen
  /* --------------------------------------------------------------------- */
  if($('#element').is_exists()) {
    $("#element").kenburnsy({
        fullscreen: true
    });
  } // End is_exists

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Twitter Tweet
  /* --------------------------------------------------------------------- */
  if($('.tweet').is_exists()) {
    $('.tweet').twittie({
        dateFormat: '%b. %d, %Y',
        template: '{{screen_name}} {{tweet}}',
        count: 10,
        username: 'SimpleeAloe',
        loadingText: 'Loading!'
    }, function () {
        var owl1 = $(".tweet ul");
        owl1.owlCarousel({
        navigation : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem : true,
        touchDrag: true,
        mouseDrag: true,
        pagination : false,
        autoHeight : false,
        stopOnHover : true,
        autoPlay : 5000,
        loop: true,
        transitionStyle : "fade",
    });
        });
  } // End is_exists

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Contact Form
  /* --------------------------------------------------------------------- */
  if($('#emailform').is_exists()) {
    $('#emailform').on('submit', function(e){

      e.preventDefault();

      var name = $('#form-name-px'),
          email = $('#form-email-px'),
          subject = $('#form-subject-px'),
          massage = $('#form-massage-px'),
          validate = false;

      function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }

      name.removeClass('error');
      email.removeClass('error');

      if(name.val() === ""){
        validate = true;
        name.addClass('error');
      }
      if(email.val() === ""){
        validate = true;
        email.addClass('error');
      }
      if(!validateEmail(email.val())){
        validate = true;
        email.addClass('error');
      }
      if(validate === false){
        $.ajax({
          method: "POST",
          url: "php/form-send.php",
          data: { 
            name: $('#form-name-px').val(), 
            email: $('#form-email-px').val(),
            subject: $('#form-subject-px').val(),
            message: $('#form-massage-px').val()
          },
          success: function(response){
            var res = JSON.parse(response);
            if(res.email_success){
              $('<div class="message-update alert alert-success">'+ res.email_success +'</div>').prependTo('.submit-button-sec');
            }
            if(res.email_error){
              $('<div class="message-update alert alert-danger">'+ res.email_error +'</div>').prependTo('.submit-button-sec');
            }

            $('#form-name-px').val(''); 
            $('#form-email-px').val('');
            $('#form-subject-px').val('');
            $('#form-massage-px').val('');            
          }
        });
      }
    });
  } // End is_exists
}); // End Document Ready
$(window).on('scroll', function(){

  /* --------------------------------------------------------------------- */
  /*  PREMIX - Suffle Letters
  /* --------------------------------------------------------------------- */
  $('.premix-section-heading').each(function(e){
    if($(this).isOnScreen() && !$(this).hasClass('premix-appeared') ) {

        setTimeout(function(){
          $(this).find('h2').shuffleLetters();

          $(this).addClass('premix-appeared');
         }.bind(this), 400);
    }
  });

  /* --------------------------------------------------------------------- */
  /*  PREMIX - SCROLL AND FIXED MENU
  /* --------------------------------------------------------------------- */
  if($('#main_menu_fixed').is_exists()) {
    var stickyfoulx = $('#main_menu_fixed').offset().top;
    if ($(window).scrollTop() > stickyfoulx){
      $(".premix-main-menu-area").addClass("fixedMenu"); 
    } else {
      $(".premix-main-menu-area").removeClass("fixedMenu"); 
    }
  }
}); // END Window Scroll
})(jQuery);