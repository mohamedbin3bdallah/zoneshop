$(document).ready(function(){
	$(".admindel").click(function() {
		var id = $(this).attr('id');		
		$("#admins-"+id).modal('show');
		
});
});

function deleteadmin(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/deleteadmin.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}