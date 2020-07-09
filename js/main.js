//Burger Nav
$('.burger, .overlay').click(function(){
$('.burger').toggleClass('clicked');
$('.overlay').toggleClass('show');
$('.mobile-menu').toggleClass('show');
$('body').toggleClass('overflow');
});

//Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

//FAQ Accordion: https://jsfiddle.net/nikdtu/3amzhp6z/
$(document).ready(function() {
  //toggle the component with class accordion_body
  $(".accordion_head").click(function() {
    if ($('.accordion_body').is(':visible')) {
      $(".accordion_body").slideUp(300);
      $(".plusminus").text('+');
    }
    if ($(this).next(".accordion_body").is(':visible')) {
      $(this).next(".accordion_body").slideUp(300);
      $(this).children(".plusminus").text('+');
    } else {
      $(this).next(".accordion_body").slideDown(300);
      $(this).children(".plusminus").text('-');
    }
  });
});

//Dropdown
$(".navigation li").hover(function() {
  var isHovered = $(this).is(":hover");
  if (isHovered) {
    $(this).children("ul").stop().slideDown(300);
  } else {
    $(this).children("ul").stop().slideUp(300);
  }
});

var categoryfilter = document.querySelector('.container');
var mixer = mixitup(categoryfilter);

$('.cat-selected li').click(function(){
  $(this).addClass('selected').siblings().removeClass('selected');
});
