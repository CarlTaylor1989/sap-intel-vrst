$(function () {
    $('#register_form').live('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        var data = form.serialize();
		
		var submitForm = "Y";
		
		$('.selectacheck').hide();
		
		if((!$('#october6').is(':checked')) && (!$('#october7').is(':checked')) && (!$('#october8').is(':checked')) && (!$('#october9').is(':checked')) && (!$('#october10').is(':checked')))
		{
			submitForm = "N";
			$('.selectacheck').show();
		}						
		
		if (submitForm == "Y") 
		{
			$.ajax({
				type: 'post',
				url: 'backend/test.php',
				data: data,
				success: function (res) {
	
					// display thankyou message
					$(".register-event").empty();
	
					$(".register-event").append("<h2>Thank you for registering your interest you will receive a confirmation email shortly.</h2>");
	
				},
				error: function () {
					alert('Unknown Error, please try again later.');
				}
			}); 
		}
    });

    $('a').live('click', function (e) {
        var link = $(this);
        if (link.attr('href') === '#register_form') {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: $('#register_form').offset().top - 100
            }, 900);
        }
    });

    // Tabs
    $('.our-shows-mob a').on('click', function() {
        var chevron = $('.fa', $(this));
        var isUp = chevron.hasClass('fa-chevron-up');

        $('.fa').each(function() {
            $(this).removeClass('fa-chevron-up');
            $(this).addClass('fa-chevron-down');
        });

        if (isUp) {
            chevron.removeClass('fa-chevron-up');
            chevron.addClass('fa-chevron-down');
        } else {
            chevron.addClass('fa-chevron-up');
            chevron.removeClass('fa-chevron-down');
        }
    });

    $('#no1 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');

        $('.mon').show();
        $('.toff').show();
        $('.woff').show();
        $('.thoff').show();
        $('.foff').show();

        $('.moff').hide();
        $('.ton').hide();
        $('.won').hide();
        $('.thon').hide();
        $('.fon').hide();
    });

    $('#no2 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');

        $('.moff').show();
        $('.ton').show();
        $('.woff').show();
        $('.thoff').show();
        $('.foff').show();

        $('.mon').hide();
        $('.toff').hide();
        $('.won').hide();
        $('.thon').hide();
        $('.fon').hide();
    });

    $('#no3 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');

        $('.moff').show();
        $('.toff').show();
        $('.won').show();
        $('.thoff').show();
        $('.foff').show();

        $('.mon').hide();
        $('.ton').hide();
        $('.woff').hide();
        $('.thon').hide();
        $('.fon').hide();
    });

    $('#no4 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');

        $('.moff').show();
        $('.toff').show();
        $('.woff').show();
        $('.thon').show();
        $('.foff').show();

        $('.mon').hide();
        $('.ton').hide();
        $('.won').hide();
        $('.thoff').hide();
        $('.fon').hide();
    });

    $('#no5 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');

        $('.moff').show();
        $('.toff').show();
        $('.woff').show();
        $('.thoff').show();
        $('.fon').show();

        $('.mon').hide();
        $('.ton').hide();
        $('.won').hide();
        $('.thon').hide();
        $('.foff').hide();
    });
	
	// speaker bios
	
    $('#showDetails').click(function (e) {
        e.preventDefault();
		$('#speakerbio').toggle();
    });	
	
    $('#showDetails2').click(function (e) {
        e.preventDefault();
		$('#speakerbio2').toggle();
    });	
	
    $('#showDetails3').click(function (e) {
        e.preventDefault();
		$('#speakerbio3').toggle();
    });	
	
    $('#showDetails4').click(function (e) {
        e.preventDefault();
		$('#speakerbio4').toggle();
    });	
	
    $('#showDetails5').click(function (e) {
        e.preventDefault();
		$('#speakerbio5').toggle();
    });	
	
    $('#showDetails6').click(function (e) {
        e.preventDefault();
		$('#speakerbio6').toggle();
    });	
	
    $('#showDetails7').click(function (e) {
        e.preventDefault();
		$('#speakerbio7').toggle();
    });	
	
    $('#showDetails8').click(function (e) {
        e.preventDefault();
		$('#speakerbio8').toggle();
    });	
	
    $('#showDetails9').click(function (e) {
        e.preventDefault();
		$('#speakerbio9').toggle();
    });	
	
    $('#showDetails10').click(function (e) {
        e.preventDefault();
		$('#speakerbio10').toggle();
    });	

//$( "#id-icon-1" ).mouseover(function() {
 // alert("mouse out");
//});
    if ($(window).width() > 990) {
    	$( "#vid-icon-1" ).hover(
    	  function() {
    		  $( "#vid-icon-1"  ).css( "background", "url('/content/img/play-video-hover.png') no-repeat" );
    		  $(".vid-det-1").show();
    		//alert("hovered");
    	  }, function() {
    		$( "#vid-icon-1"  ).css( "background", "url('/content/img/play-video.png') no-repeat" );
    		$(".vid-det-1").hide(500);
    	  }
    	);
    	
    	$( "#vid-icon-2" ).hover(
    	  function() {
    		  $( "#vid-icon-2"  ).css( "background", "url('/content/img/play-video-hover.png') no-repeat" );
    		  $(".vid-det-2").show();
    		//alert("hovered");
    	  }, function() {
    		$( "#vid-icon-2"  ).css( "background", "url('/content/img/play-video.png') no-repeat" );
    		$(".vid-det-2").hide(500);
    	  }
    	);	
    	
    	$( "#vid-icon-3" ).hover(
    	  function() {
    		  $( "#vid-icon-3"  ).css( "background", "url('/content/img/play-video-hover.png') no-repeat" );
    		  $(".vid-det-3").show();
    		//alert("hovered");
    	  }, function() {
    		$( "#vid-icon-3"  ).css( "background", "url('/content/img/play-video.png') no-repeat" );
    		$(".vid-det-3").hide(500);
    	  }
    	);
    }

	var name = getUrlVars()["name"];
	 
	 $('.personname').append(name);

    function autoPlayYouTubeModal() {
        var trigger = $("body").find('[data-toggle="modal"]');
        trigger.click(function () {
            var theModal = $(this).data("target"),
                videoSRC = $(this).attr("data-video"),
                videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    }

    $('#videoModal').on('hidden.bs.modal', function () {
        $("#videoModal iframe").attr("src", "");
    });

    autoPlayYouTubeModal();
												
});

var viewportWidth = $('body').innerWidth();

$(document).ready(function(){
    $('.navbar-toggle').click(function() {
        if($(this).hasClass('collapsed')) {
            $(this).find('.fa-bars').addClass('hide');
            $(this).find('.fa-close').removeClass('hide');
        } else {
            $(this).find('.fa-bars').removeClass('hide');
            $(this).find('.fa-close').addClass('hide');
        }
    })
	$("a[rel^='prettyPhoto']").prettyPhoto({
	social_tools:false,
	deeplinking:false});
  });

function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}