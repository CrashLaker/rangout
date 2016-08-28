function showmap(){
	var rs = $("#showmap").val();
	if (rs == "on"){
		$("#container").fadeOut();
		$("#container2").fadeIn();
	}else{
		$("#container2").fadeOut();
		$("#container").fadeIn();
	}
}
