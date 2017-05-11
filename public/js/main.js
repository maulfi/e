$( document ).ready(function() {

  $(window).scroll(function() {
    if(getWidth()>320) {
      if ($(document).scrollTop() >= 50) {
        $(".header-home").addClass('header-home-fix');
      } else {
        $(".header-home").removeClass('header-home-fix');
      }
    }
    else {
      $('.header-home').css({
        "opacity": "1",
        "position":"relative",
        "padding":"0"
      });
    }
  });

  $( window ).resize(function() {
    if(getWidth()>320) {
      $('.header-home').css({
        "opacity": "0",
        "position":"fixed",
        "padding":"20px 0",
      });
      $('.nav-small').hide();
      if ($(document).scrollTop() >= 50) {
        $(".header-home").addClass('header-home-fix');
        $('.header-home').css({
          "opacity": "1",
          "position":"fixed",
          "padding":"20px 0"
        });
      } else {
        $(".header-home").removeClass('header-home-fix');
      }
    }
    else {
      $('.header-home').css({
        "opacity": "1",
        "position":"relative",
        "padding":"0"
      });
    }
  });

  if(getWidth()>320) {
    if ($(document).scrollTop() >= 50) {
      $(".header-home").addClass('header-home-fix');
    } else {
      $(".header-home").removeClass('header-home-fix');
    }
  }
  else {
    $('.header-home').css({
      "opacity": "1",
      "position":"relative",
      "padding":"0"
    });
  }

  console.log(getWidth());

  function switchImage(){
      $('#images img:visible').fadeOut(function(){
          $(this).next().length ? $(this).next().fadeIn() : $('#images img').eq(0).fadeIn();
      });
  };
  $('#images img').hide().eq(0).show(); // show only the first image
  setInterval(switchImage, 4000);

  $(".chosen-select").chosen();

  $('#datetimepicker2').datetimepicker({
    timepicker:false,
    format:'d/m/Y',
    formatDate:'Y/m/d',
    yearStart: 1996
    // minDate:'-1970/01/02', // yesterday is minimum date
    // maxDate:'+1970/01/02' // and tommorow is maximum date calendar
  });


  $(".choose-opt").click(function(event) {
  	$(".choose-opt").removeClass("selected");
      if($(this).hasClass("selected")){
        $(this).removeClass("selected");
      }
      else {
        $(this).addClass("selected");
      }
      
      event.preventDefault();

  });

  $(".picture-option").click(function(event) {
    $(".picture-option").removeClass("selected-picture");
      if($(this).hasClass("selected-picture")){
        $(this).removeClass("selected-picture");
      }
      else {
        $(this).addClass("selected-picture");
      }
      
      event.preventDefault();

  });

  // $('#blah').hide();
  // $('#remove').hide();  
  function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                  $('#blah').attr('src', e.target.result);
              }
              
              reader.readAsDataURL(input.files[0]);
          }
      }
      
      // $("#imgInp").change(function(){
      //     if( $('#imgInp').val()!=""){
              
      //         $('#remove').show();
      //         $('#blah').show('slow');
      //   }
      //     // else{ $('#remove').hide();$('#blah').show('slow');}
      //     readURL(this);
      // });

    
  //     $('#remove').click(function(){
  //           $('#imgInp').val('');
  //           $(this).hide();
  //           $('#blah').hide('slow');
  //  $('#blah').attr('src','http://upload.wikimedia.org/wikipedia/commons/thumb/4/40/No_pub.svg/150px-No_pub.svg.png');
  // });

  $(".toggle-term").click(function(event) {
    $(this).toggleClass('rotate');
    $(".check-pad p").slideToggle();
  });

  $(".hamburger").click(function(event) {
    $(".nav-small").slideToggle();
  });

  $('#unclick').unbind("click").bind('click',function (e) {
     e.preventDefault();
  } )

  $('#no-click').unbind("click").bind('click',function (e) {
     e.preventDefault();
  } )

  $("#remember").change(function(event) {
      if($(this).prop('checked')==true){
        // alert("checked");
        $('.put-dis').removeClass("button-disabled");
        $('#unclick').unbind("click").bind('click', function(){
          $('#register_form').submit();
        });
        $('#no-click').unbind("click").bind('click', function(){
          $('#register_form').submit();
        });
           // e.preventDefault();
           
      }
      else {
        // alert('Not checked');
        $('.put-dis').addClass("button-disabled");
        $('#unclick').unbind("click").bind('click',function (e) {
           e.preventDefault();
        } );
        $('#no-click').unbind("click").bind('click',function (e) {
           e.preventDefault();
        } );
      }

  });

});

function getWidth(){
 return $(window).width(); 
}


$(function () {
    $(".youtube").YouTubeModal({autoplay:0, width:640, height:480});
  });

$(function(){
  var share = new Share(".share-button", {
    image: 'http://www.comeaboard.co/images/image-og.png',
    networks: {
      google_plus: {
        url: "http://www.comeaboard.co"
      },
      facebook: {
        app_id: "1528803287337861",
        description: "You can do something to accelerate your dreams. The strength lies inside everyone is the biggest asset everyone has. Have you known it? The personality quiz will give you hint about your strength.",
        title: "Come Aboard Personality Quiz",
        caption: "comeaboard.co"
      },
      twitter: {
          description: "Knowing your true self is one step ahead to accelerate your dreams. Find out your strengtsh now on %23ComeAboard"
      },
      pinterest: {
            enabled: false
      },
      email: {
            enabled: false
      },

    }
  });
});