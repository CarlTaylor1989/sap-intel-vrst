$(function() {
  $.getJSON( "../content/json/data.json", function(json) {
    // Get all json data from json file
    var data = json;

    // Compile markers template
    var source   = $("#markers-template").html();
    var template = Handlebars.compile(source);
    $("#all-markers").html(template(data));

    // Compile content template
    var source   = $("#content-template").html();
    var template = Handlebars.compile(source);
    $("#post-content").html(template(data));

    // Animation for marker click
    $('.this-marker').click(function() {
      $('.carousel').carousel('pause');
      var id = $(this).attr('id');

      $('.this-marker').removeClass('marker-active animated bounceIn').addClass('marker-inactive');
      $(this).removeClass('marker-inactive').addClass('marker-active animated bounceIn');
      $('.post-active').addClass('hide').removeClass('post-active');
      $('#post-content-carousel-'+id).carousel();
      $('.content-'+id).removeClass('hide').addClass('post-active');

      if($('#post-content-carousel-'+id).find('.item.active').hasClass('BigDataTruck')) {
        if(!$('.van-img').hasClass('bg-set')) {
          $('.van-img').css({
            "visibility": "visible",
            "background-image": "url(../content/img/van.png)"
          }).addClass('bg-set'); 
        }
      } else if($('#post-content-carousel-'+id).find('.item.active').hasClass('HannahTheOwl')) {
        $('.van-img').css("background-image", "url(../content/img/owl.png)").removeClass('bg-set'); 
      }

      $('#post-content-carousel-'+id).on('slid.bs.carousel', function () {
        if($(this).find('.item.active').hasClass('BigDataTruck')) {
          if(!$('.van-img').hasClass('bg-set')) {
            $('.van-img').css("background-image", "url(../content/img/van.png)").addClass('bg-set'); 
          }
        } else if($(this).find('.item.active').hasClass('HannahTheOwl')) {
          $('.van-img').css("background-image", "url(../content/img/owl.png)").removeClass('bg-set'); 
        }
      });
    });
    
  });  

  $('.ticker').easyTicker({
    direction: 'up',
    easing: 'swing',
    speed: 'slow',
    interval: 2500,
    height: 'auto',
    visible: 6,
    mousePause: 0,
    controls: {
      up: '',
      down: '',
      toggle: '',
      playText: 'Play',
      stopText: 'Stop'
    }
  });
  
  $('#carousel-example-generic').carousel({
      interval: 10000
  });
  
});