$(document).ready(function(){
	$(".productimgdel").click(function() {
		var id = $(this).attr('id');
		var path = $(this).attr('path');
		var thumpath = $(this).attr('thumpath');

		$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'path': path,
		'thumpath': thumpath,
		},
		url:'../ajaxs/deleteproductimage.php',
		success: function (response) { $("#productimgdel-"+id).hide(); }
	});		
});
});

$(document).ready(function(){
	$(".productdel").click(function() {
		var id = $(this).attr('id');		
		$("#product-"+id).modal('show');
		
});
});

function deleteproduct(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/deleteproduct.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}