$(".menu1").next('ul').toggle();

$(".menu1").click(function(event) {
	$(this).next("ul").toggle(500);
});

$(document).ready(function(){
	$('prev').click(function(e){
		if($(this).hasClass('disabled')){
			e.preventDefault();
		}
	});
});