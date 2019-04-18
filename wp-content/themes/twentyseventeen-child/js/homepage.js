// Scrolling Nav JavaScript 

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 800) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            //$('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 1500);
            return false;
        });
        
       // $('#back-to-top').tooltip('show');

});
//owl carousel

 $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
	dots: false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});


$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});

// Input range slider
$('.customRange input[type="range"]').change(function () {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
    
});
    

 //menu          

$(function () {
    var sf_menu_sub = $('.sub-menu');
    $('li.menu-item-has-children a').on('click', function (e) {
        e.stopPropagation();
         
        $(this).next('ul').slideToggle(10);
$(this).parent().siblings().children().next('ul').slideUp(10);

    });
    $(document).on('click', function (e) {
        sf_menu_sub.hide();
    });
});

$(function () {
    $(this).toggleClass('menuactive');

$( "li.menu-item-has-children a" ).click( function(e) {
    if( $(this).is('.menuactive') ) {
        $(this).removeClass( "menuactive" );
    }
    else {
        $( "li.menu-item-has-children a" ).removeClass( "menuactive" );
        $(this).addClass( "menuactive" );
    }
});
 $(document).on('click', function (e) {
          $('li.menu-item-has-children a').removeClass('menuactive');
    });
});


//animation//
new WOW().init();
$('.search-button').click(function () {
    $(this).parent().toggleClass('open');
});
  


//newsletter

$('.tnp-email').attr('placeholder', 'Email');

//search//
$('.serchBlock .search-field').attr('placeholder', 'search');

$("#es_txt_email").attr("placeholder", "Email Address");

//Hide unwanted text

$('.categories:contains("Categories")').each(function(){
    $(this).html($(this).html().split("Categories").join(""));
});
$('.glossary_menu:contains("Categories")').each(function(){
    $(this).html($(this).html().split("Categories").join(""));
});
$('.canvasjs-chart-canvas:contains("Trial Version")').each(function(){
    $(this).html($(this).html().split("Trial Version").join(""));
});

$('.link-more a').html("read more");
$('.my-posts:contains("…")').each(function(){
    $(this).html($(this).html().split("…").join(""));
});

//Interest tab css
$(function () {
$( "#myInterests .info_Block_inner" ).click( function(e) {
     e.stopPropagation();
        $(this).toggleClass( "border-class" );

    
});
$(document).on('click', function (e) {
          $('#myInterests .info_Block_inner').removeClass('border-class');
    });
});

$(".add_fav .wpfp-link").attr("id","favid");

//Child menus 
$(document).ready(function() {
  $('.parent').click(function() {
    $('.sub-nav').toggleClass('visible');
  });
  $( "li.parent ul.sub-nav li a" ).click( function(e) {
            $(this).removeClass( "menuactive" );
        });
   $(document).on('click', function (e) {
        $('.sub-nav').hide();
    });
});

// Add commas to number in input
$('input.comma_input').keyup(function(event) {

  // skip for arrow keys
  if(event.which >= 37 && event.which <= 40) return;

  // format number
  $(this).val(function(index, value) {
    return value
    .replace(/\D/g, "")
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    ;
  });
});
$(document).ready(function() {
  $(".comma_input").each(function() {
    var x = $(this).val();
    
    $(this).val(x.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ","));
  });
});

$('input.slider').change(function(event) {

  // skip for arrow keys
  if(event.which >= 37 && event.which <= 40) return;

  // format number
  $('input.comma_input').val(function(index, value) {
    return value
    .replace(/\D/g, "")
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    ;
  });
});

// var blogone = document.getElementById("cat_name1");
//   blogone.insertAdjacentHTML("afterend", "<span class='catarrow1'></span>");


// <div id="message">
//   <h3>Password must contain the following:</h3>
//   <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
//   <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
//   <p id="number" class="invalid">A <b>number</b></p>
//   <p id="length" class="invalid">Minimum <b>8 characters</b></p>
// </div>
 // var post = document.getElementById("favid");
 //  post.insertAdjacentHTML("afterbegin", "<span class='star glyphicon glyphicon-star'></span>");
