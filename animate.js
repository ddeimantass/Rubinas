var shake = 'animated shake';
var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

$('#ieskoti').on('click', function(){
	$('#searchField').addClass(shake).one(animationend, function(){
		$(this).removeClass(shake)
	});
});

var p = $('.question');
p.css({ cursor: 'pointer' });

$('#Q1').click(function(){
    if($('#A1').css('display') == 'none')
        {$('#A1').show();}
    else
        {$('#A1').hide();}
});

$('#Q2').click(function(){
    if($('#A2').css('display') == 'none')
        {$('#A2').show();}
    else
        {$('#A2').hide();}
});
$('#Q3').click(function(){
    if($('#A3').css('display') == 'none')
        {$('#A3').show();}
    else
        {$('#A3').hide();}
});
$('#Q4').click(function(){
    if($('#A4').css('display') == 'none')
        {$('#A4').show();}
    else
        {$('#A4').hide();}
});
$('#Q5').click(function(){
    if($('#A5').css('display') == 'none')
        {$('#A5').show();}
    else
        {$('#A5').hide();}
});
$('#Q6').click(function(){
    if($('#A6').css('display') == 'none')
        {$('#A6').show();}
    else
        {$('#A6').hide();}
});

function initMap() {
  var myLatLng = {lat: 55.98271769999999, lng: 22.24843910000004};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}