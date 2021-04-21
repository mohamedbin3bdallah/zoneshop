function clearcart(ip)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'ip': ip,
		},
		url:'ajaxs/clearcart.php',
		success: function (response) { if(response == 1) { $(".cart-items").hide(); document.getElementById("totalcart").innerHTML = 0; } }
	});
}