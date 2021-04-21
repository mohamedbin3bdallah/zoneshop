function deletecart(id,product,ip,quantity)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'product': product,
		'ip': ip,
		'quantity': quantity,
		},
		url:'ajaxs/deletecart.php',
		success: function (response) {
			if(response == 1)	{}
			else if(response == 0)
			{
				$(".cart-items").hide();
				document.getElementById("totalcart").innerHTML = 0;
			}
			else
			{
				$("#tr-"+id).hide();
				document.getElementById("totalcart").innerHTML = response;
			}
		}
	});
}

function paypal(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/paypal.php',
		success: function (response) { /*$("#tr-"+id).hide();*/ }
	});
}

/*function check(id)
{
		$.ajax({
			type:'POST',
			//data:dataString,
			data: {	
			'id': id,
			},
			url:'../check.php',
			success: function (response) { alert(id); }
		});
}*/