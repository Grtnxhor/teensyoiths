$(document).ready(function() 
{

	//signin
	$("#submit").click(function() 
	{

		$("#ModalCenter").modal("show");

		var password 	 = $("#pword").val();

		if (password == null || password == "") {

			$("#ModalCenter").on('shown.bs.modal', function () {
           
           $("#ModalCenter").modal("hide");

           $(toastr.error('Invalid Password Inputed'));
    });
		} else {

			
			$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {password:password},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
			
		}
	}
		)
		}

})


//create class
$("#crepart").click(function() 
{

	$("#ModalCenter").modal("show");

	var linkln 	 = $("#lnkln").val();

	if(linkln == null || linkln == '') {

		$(toastr.error('Class link cannot be empty'));


	}else {

		$(toastr.error('loading..Please wait'));

		$.ajax
(
{
	type 		:  'post',
	url			:  'functions/init.php',
	data 		:  {linkln:linkln},
	success 	:  function(data)
	{
		$(toastr.error(data)).html(data);
		
	}
}
	)

	}
})

})