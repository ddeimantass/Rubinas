var shake = 'animated shake';
var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

$('#ieskoti').on('click', function(){
	$('#searchField').addClass(shake).one(animationend, function(){
		$(this).removeClass(shake)
	});
});