$(window).scroll(function() {
	
if(window.pageYOffset >= 668) {
	$('#headDrop').slideDown();
} else {
	$('#headDrop').slideUp();
}

if(window.pageYOffset >= 1068) {
	$('.magix-sideNav').fadeIn();
} else {
	$('.magix-sideNav').fadeOut();
}

if(window.pageYOffset < 1600) {
	resetLinks('whoLink');
}

if(window.pageYOffset >= 1600) {
	resetLinks('boardLink');
}

if(window.pageYOffset >= 2200) {
	resetLinks('eventLink');
}

if(window.pageYOffset >= 2800) {
	resetLinks('pressLink');
}
	
});


function resetLinks(type) {
	$('.hiddenNav').each(function(){
		$(this).removeClass('selected');
		$('#' + type).addClass('selected');
	});
}
