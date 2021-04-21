$(document).ready(function(){
	$(".citydel").click(function() {
		var id = $(this).attr('id');		
		$("#cities-"+id).modal('show');
		
});
});

function deletecity(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/deletecity.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}