$(document).ready(function() {


	//wykorzystywanie ciasteczek przy pomocy pluginu
	if($.cookie("cookieslaw") != null)
		$("#cookiesalert").hide();
	else
		$("#cookiesalert").show();
	$("#cookiesaccept").click(function(){
		$.cookie("cookieslaw", "accepted", { expires: 1 });
		$("#cookiesalert").hide("slow");
	});


});
