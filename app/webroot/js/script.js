$(function() {

	$("#instr-alert").alert();

	setTimeout(function() {
		$("#instr-alert").fadeOut(500, function() {
			$("#instr-alert").alert('close');
		});
	}, 3000);
});

// Mouse position 
var mouseX = 0;
var mouseY = 0;
$(document).mousemove(function(e) {
	mouseX = e.pageX;
	mouseY = e.pageY;
});
