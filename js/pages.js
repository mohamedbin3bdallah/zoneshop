$(document).ready(function(){
	$(".pagedel").click(function() {
		var id = $(this).attr('id');		
		$("#pages-"+id).modal('show');
		
});
});

function deletepage(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/deletepage.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}