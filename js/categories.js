$(document).ready(function(){
	$(".categorydel").click(function() {
		var id = $(this).attr('id');		
		$("#categories-"+id).modal('show');
		
});
});

function deletecategory(id,childto)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'childto': childto,
		},
		url:'../ajaxs/deletecategory.php',
		success: function (response) { if(response == 1) { $("#tr-"+id).hide(); } else alert(response); }
	});
}