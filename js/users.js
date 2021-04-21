$(document).ready(function(){
	$(".userdel").click(function() {
		var id = $(this).attr('id');		
		$("#users-"+id).modal('show');
		
});
});

function deleteuser(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/deleteuser.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}