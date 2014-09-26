$(function() {
	var body = $('body');
	
//Preview the color schemes on hover
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
});