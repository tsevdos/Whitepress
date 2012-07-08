// Sidebar code
$(document).ready(function(){
	$('#first_container #first_container_nav li a').click(function(){
		$('#first_container > div').hide().filter(this.hash).fadeIn();
		$('#first_container #first_container_nav li a').removeClass('selected');
		$(this).addClass('selected');
		return false;
	}).filter(':first').click();
});

$(document).ready(function(){
	$('#second_container #second_container_nav li a').click(function(){
		$('#second_container > div').hide().filter(this.hash).fadeIn('slow');
		$('#second_container #second_container_nav li a').removeClass('selected');
		$(this).addClass('selected');
		return false;
	}).filter(':first').click();
});

// Comments code
$(document).ready(function (){
	$('#content #posts #comments ol#commentslist > li').each(function(i) {
		i++;
		var node = '<span class="comment_number">' + i + '<\/span>';
		$(this).prepend(node);
	});
});