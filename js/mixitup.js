var categoryfilter = document.querySelector('.container');
var mixer = mixitup(categoryfilter);

$('.cat-selected li').click(function(){
  $(this).addClass('selected').siblings().removeClass('selected');
});
