$(document).ready(function(){
	$(".sliderimgdel").click(function() {
		var id = $(this).attr('id');
		var path = $(this).attr('path');
		var thpath = $(this).attr('thpath');

		$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'path': path,
		'thpath': thpath,
		},
		url:'../ajaxs/deletesliderimage.php',
		success: function (response) { $("#sliderimgdel-"+id).hide(); }
	});		
});
});

/*
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
*/