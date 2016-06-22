// $(function(){
// 	getNotification();
// 	function getNotification()
// 	{
// 		$.ajax({
// 			url: "/admin/notification/index",
// 			type: "POST",
// 			dataType: "json",
// 			success: function(data) {
// 				var active = data['active'];
// 				var noActive = data['noActive'];
// 				var sumCount = active.length + noActive.length;
// 				if (sumCount > 0) {
// 					if (active.length > 0) {

// 						$('.notification').append('<div class="counter"><span>' + active.length + '</span></div>');

// 						var notice = document.getElementById('notice');
// 						if (localStorage.getItem('notice') === null) {
// 							notice.play();
// 							localStorage.setItem('notice', active.length);
// 						}

// 						if (active.length > localStorage.getItem('notice')) {
// 							localStorage.setItem('notice', active.length);
// 							notice.play();
// 						}

// 					}

// 					$('.list-items').find('.item').remove();

// 					for (i=0; active.length > i; i++) {
// 						$('.list-items').append('<div class="item active"><a href="' + active[i]['link'] + '"><h1>' + active[i]['name'] + '</h1><p class="date">' + active[i]['date'] + '</p></a></div>');
// 					}

// 					for (i=0; noActive.length > i; i++) {
// 						$('.list-items').append('<div class="item"><a href="' + noActive[i]['link'] + '"><h1>' + noActive[i]['name'] + '</h1><p class="date">' + noActive[i]['date'] + '</p></a></div>');
// 					}

// 				}
// 			}
// 		});
// 	}
// 	setInterval(function(){
// 		getNotification();
// 	}, 5000);
// });

// $(function(){
// 	$('.notification').mytoggle(function() {
// 		$('.list-items').show();
// 	}, function() {
// 		$('.list-items').hide();
// 		$.ajax({
// 			url: "/admin/notification/not-active",
// 			type: "POST"
// 		});
// 		$('.panel .counter').remove();
// 		localStorage.removeItem('notice');
// 	});
// });