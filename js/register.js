/*    Start Register Form    */
$(document).ready(function(){
	$("#dealeruc").hide();
	$("#dealer").change(function(){
		if(this.checked)
		{
			$("#name").attr('required', 'required');
			$("#phone").attr('required', 'required');
			$("input[name=dealertype]:radio").attr('required', 'required');
			$("#productstype").attr('required', 'required');
			$("#images").attr('required', 'required');
			$("#dealeruc").show();
		}
		else
		{
			$("#name").removeAttr('required');
			$("#name").val('');
			$("#phone").removeAttr('required');
			$("#phone").val('');
			$("input[name=dealertype]:radio").removeAttr('required');
			$("input[name=dealertype]:radio").removeAttr('checked');
			$("#productstype").removeAttr('required');
			$("#productstype").val('');
			$("#images").removeAttr('required');
			$("#images").val('');
			$("#dealeruc").hide();
			
			$("#company").removeAttr('required');
			$("#company").val('');
			$("#dealercompany").hide();
		}
	});
});

$(document).ready(function(){
	$("#dealercompany").hide();
	$("input[name=dealertype]:radio").change(function(){
		if(this.value == 'company')
		{
			$("#company").attr('required', 'required');
			$("#dealercompany").show();
		}
		else
		{
			$("#company").removeAttr('required');
			$("#company").val('');
			$("#dealercompany").hide();
		}
	});
});
/*    End Register Form    */

/*    Start Register Page    */
$(document).ready(function(){
	$("#pdealeruc").hide();
	$("#pdealer").change(function(){
		if(this.checked)
		{
			$("#pname").attr('required', 'required');
			$("#pphone").attr('required', 'required');
			$("input[name=pdealertype]:radio").attr('required', 'required');
			$("#pproductstype").attr('required', 'required');
			$("#pimages").attr('required', 'required');
			$("#pdealeruc").show();
		}
		else
		{
			$("#pname").removeAttr('required');
			$("#pname").val('');
			$("#pphone").removeAttr('required');
			$("#pphone").val('');
			$("input[name=pdealertype]:radio").removeAttr('required');
			$("input[name=pdealertype]:radio").removeAttr('checked');
			$("#pproductstype").removeAttr('required');
			$("#pproductstype").val('');
			$("#pimages").removeAttr('required');
			$("#pimages").val('');
			$("#pdealeruc").hide();
			
			$("#pcompany").removeAttr('required');
			$("#pcompany").val('');
			$("#pdealercompany").hide();
		}
	});
});

$(document).ready(function(){
	$("#pdealercompany").hide();
	$("input[name=pdealertype]:radio").change(function(){
		if(this.value == 'company')
		{
			$("#pcompany").attr('required', 'required');
			$("#pdealercompany").show();
		}
		else
		{
			$("#pcompany").removeAttr('required');
			$("#pcompany").val('');
			$("#pdealercompany").hide();
		}
	});
});
/*    End Register Page    */