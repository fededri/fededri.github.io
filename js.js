// DOCUMENTO CARGANDO

$(window).on("load",function(){
  slider();
});


$(document).on("ready",function(){

    scrollToSector()
} );



function scrollToSector(){
	$(".desplazamiento").click(function() {

		var toGo=$(this).attr('name');

		var aTag = $(toGo);

		$('html,body').animate({scrollTop: aTag.offset().top},'slow');

	});
}

function slider(){

var currentIndex = 0,
  items = $('.description-section'),
  itemAmt = items.length;

  function cycleItems() {
    var item = $('.description-section').eq(currentIndex);
    items.hide();
    item.fadeIn("slow");
  }

$('.next').click(function() {

  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems(currentIndex);
});

$('.prev').click(function() {

  currentIndex -= 1;
  if (currentIndex < 0) {
    currentIndex = itemAmt - 1;
  }
  cycleItems(currentIndex);
});

}
