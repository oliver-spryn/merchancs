$(function() {
	var allowClose = true;
	var body = $('body');
	var open = false;
	var win = $(window);
	
//Preview the color schemes on hover and apply on click
	$('li.themes ul li a').mouseover(function() {
		if(body.attr('data-old-class') == undefined) {
			body.attr('data-old-class', body.attr('class'))
		}
		
		body.removeAttr('class').addClass($(this).attr('data-class'));
	}).mouseout(function() {
		if(body.attr('data-old-class') != undefined) {
			body.removeAttr('class').addClass(body.attr('data-old-class'));
			body.removeAttr('data-old-class');
		}
	}).click(function() {
		body.removeAttr('class').addClass($(this).attr('data-class'));
		body.removeAttr('data-old-class');
		$(this).parents('li').find('a.active').removeAttr('class');
		$(this).addClass('active');
	});
	
//Open the categories menu
	$('li a.browse').click(function() {
		body.hasClass('open') ? body.removeClass('open') : body.addClass('open');
		allowClose = false;
		open = body.hasClass('open');
	});
	
//Close the categories menu
	$('aside#categories').click(function() {
		allowClose = false;
	});
	
	body.click(function() {
		if(allowClose && open) body.removeClass('open');
		allowClose = true;
	});
	
//Minimize the heading
	win.scroll(function() {
		if(win.scrollTop() == 0) {
			$('header#main-header').removeClass('minimized');
		} else {
			$('header#main-header').addClass('minimized');
			body.removeClass('open');
			allowClose = true;
		}
	});
	
//Add category menu
	$(".category").click(function(){
		$.ajax({
			type: "GET",
			url: "ajaxDump.php",
			data: {type: "echoItems", category: $(this).text()},
			error: function() {alert("Failure");},
			success: function(out) {$("#itemDisplay").html(out);}
		});	
	});	
	
});