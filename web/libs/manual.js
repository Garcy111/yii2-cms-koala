
// SumoSelect BEGIN //
// Документация http://hemantnegi.github.io/jquery.sumoselect/sumoselect_demo.html
// <link rel="stylesheet" href="/public/libs/sumoselect/sumoselect.css" />
// <script src="/public/libs/sumoselect/jquery.sumoselect.min.js"></script>

$('.SlectBox').SumoSelect({ placeholder: 'This is a placeholder' });

// <select class="SlectBox" multiple="multiple" onchange="sumoSelect($(this).children(':selected'))">
//     <option value="volvo" disabled>Volvo</option>
//     <option value="saab">Saab</option>
//     <option value="mercedes">Mercedes</option>
//     <option value="audi">Audi</option>
// </select>


function sumoSelect(that) {
	var length = that.length;
	that.each(function(){
		console.log($(this).val());
	});
}
// SumoSelect END //



// Countdown BEGIN //
//Таймер обратного отсчета Countdown
//Документация: http://keith-wood.name/countdown.html
// <link rel="stylesheet" href="/public/libs/countdown/jquery.countdown.css" />
// <script src="/public/libs/countdown/jquery.plugin.js"></script>
// <script src="/public/libs/countdown/jquery.countdown.min.js"></script>
// <script src="/public/libs/countdown/jquery.countdown-ru.js"></script>

//<div class="countdown" date-time="2015-01-07"></div>

var austDay = new Date($(".countdown").attr("date-time"));
$(".countdown").countdown({until: austDay, format: 'yowdHMS'});
// Countdown END //


// FancyBox BEGIN
//Попап менеджер FancyBox
//Документация: http://fancybox.net/howto
// <link rel="stylesheet" href="/public/libs/fancybox/jquery.fancybox.css" />
// <script src="/public/libs/fancybox/jquery.fancybox.pack.js"></script>

//<a class="fancybox"><img src="image.jpg" /></a>
//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
$(".fancybox").fancybox();
// FancyBox END



// Waypoint BEGIN
//Добавляет классы дочерним блокам .block для анимации
//Документация: http://imakewebthings.com/jquery-waypoints/
// <script src="/public/libs/waypoints/waypoints-1.6.2.min.js"></script>
$(".block").waypoint(function(direction) {
	if (direction === "down") {
		$(".class").addClass("active");
	} else if (direction === "up") {
		$(".class").removeClass("deactive");
	};
}, {offset: 100});
// Waypoint END



// scrollTo BEGIN
//Плавный скролл до блока .div по клику на .scroll
//Документация: https://github.com/flesler/jquery.scrollTo
// <script src="/public/libs/scrollto/jquery.scrollTo.min.js"></script>
$("a.scroll").click(function() {
	$.scrollTo($(".div"), 800, {
		offset: -90
	});
});
// scrollTo END



// owlcarousel BEGIN
//Каруселька
//Документация: http://owlgraphic.com/owlcarousel/
// <link rel="stylesheet" href="/public/libs/owl-carousel/owl.carousel.css" />
//<script src="/public/libs/owl-carousel/owl.carousel.min.js"></script>
 
var owl = $("#owl-demo");

owl.owlCarousel({
  items : 3, //10 items above 1000px browser width
  itemsDesktop : [1000,5], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,3], // betweem 900px and 601px
  itemsTablet: [600,2], //2 items between 600 and 0
  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
});

// Custom Navigation Events
$(".next").click(function(){
owl.trigger('owl.next');
});
$(".prev").click(function(){
owl.trigger('owl.prev');
});
$(".play").click(function(){
owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
});
$(".stop").click(function(){
owl.trigger('owl.stop');
});
// owlcarousel END




//Кнопка "Наверх"
//Документация:
//http://api.jquery.com/scrolltop/
//http://api.jquery.com/animate/
$("#top").click(function () {
	$("body, html").animate({
		scrollTop: 0
	}, 800);
	return false;
});