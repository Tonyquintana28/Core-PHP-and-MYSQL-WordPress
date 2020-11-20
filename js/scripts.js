$(function() {
	/* Contact Form */
	$("#form").submit(function(event){
		event.preventDefault();
		$(".send").html("").addClass("loading");
		$.post("form.php",$(this).serialize(),function(output){
			$("#ajax-message").fadeOut("slow",function(){
				$(this).html(output).fadeIn("slow",function() {
					if($(output).hasClass("success"))
					{
						$(".send").removeClass("loading").addClass("sent")
						.html("Sent!").attr("disabled","disabled");
						ga('send', 'event', 'form', 'sumbit');
					}
					else
					{
						$(".send").removeClass("loading").html("Send");
					}
				});
			});
		});
	});

	// For Mobile Contact
	$(".mobile").click(function(){
		$(this).next().slideToggle();
		$("html, body").animate({
			scrollTop: $(this).offset().top
		}, 500);
	});

});


