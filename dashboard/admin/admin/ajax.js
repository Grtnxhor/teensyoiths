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
		url			:  'functions/init.php',
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
	var walink 	 = $("#walink").val();
	var watext 	 = $("#watext").val();

	if(linkln == null || linkln == '') {

		$(toastr.error('Class link cannot be empty'));


	}else {

		$(toastr.error('loading..Please wait'));

		$.ajax
(
{
	type 		:  'post',
	url			:  'functions/init.php',
	data 		:  {linkln:linkln,walink:walink,watext:watext},
	success 	:  function(data)
	{
		$(toastr.error(data)).html(data);
		
	}
}
	)

	}
})

 //post article first step
 $("#part").click(function() 
 {

 var ptit    = $("#ptit").val();
 var pdet    = $('#pdet').val();

 if (ptit == null || ptit == "") {

	 $('#msg').html("Article title is empty");
 } else {

 if (pdet == null || pdet == "") {

	 $('#msg').html("Article details can`t be empty");
 } else {


	 $('#msg').html("Loading... Please wait");

	 $.ajax
 (
 {
	 type        :  'post',
	 url         :  'functions/init.php',
	 data        :  {ptit:ptit,pdet:pdet},
	 success     :  function(data)
	 {
		 $('#msg').html(data);
	 }
 }
	 )

 }
}

 $("#exampleModalCenter").modal();
})



//upload post article
$("#pstupl").click(function () {
 var fd = new FormData();
 var files = $("#psfile").prop("files")[0];
 fd.append("fle", files);

 if (files == null || files == "") {
   $("#msg").html("Kindly select a picture");
 } else {

	  $("#msg").html("Loading.. Make sure you have a strong internet connection");

   $.ajax({
	 type: "post",
	 url: "functions/init.php",
	 data: fd,
	 contentType: false,
	 processData: false,
	 success: function (data) {
	   $("#msg").html(data);
	 },
   });
 }
 $("#exampleModalCenter").modal();
});



//ed upload post article
$("#edpstupl").click(function () {
 var fd = new FormData();
 var files = $("#edpsfile").prop("files")[0];
 fd.append("edfle", files);

 if (files == null || files == "") {
   $("#msg").html("Kindly select a picture");
 } else {

	  $("#msg").html("Loading.. Make sure you have a strong internet connection");

   $.ajax({
	 type: "post",
	 url: "functions/init.php",
	 data: fd,
	 contentType: false,
	 processData: false,
	 success: function (data) {
	   $("#msg").html(data);
	 },
   });
 }
 $("#exampleModalCenter").modal();
});







//Delete article
 $("#movedel").click(function() 
 {

 var delsn    = $("#delsn").val();

	 $('#msg').html("Loading... Please wait");

	 $.ajax
 (
 {
	 type        :  'post',
	 url         :  'functions/init.php',
	 data        :  {delsn:delsn},
	 success     :  function(data)
	 {
		 $('#msg').html(data);
	 }
 }
	 )


 $("#exampleModalCenter").modal();
})



//edit an article move
$("#edmovedel").click(function() 
 {

 var eddelsn    = $("#eddelsn").val();

	 $('#msg').html("Loading... Please wait");

	 window.location.href = "eawrite?id="+eddelsn;

 $("#exampleModalCenter").modal();
})



//Edit article first step
 $("#svpart").click(function() 
 {

 var svptit    = $("#svptit").val();
 var svpdet    = $('#svpdet').val();
 var datat     = $('#datat').val();


 if (svptit == null || svptit == "") {

	 $('#msg').html("Article title is empty");
 } else {

 if (svpdet == null || svpdet == "") {

	 $('#msg').html("Article details can`t be empty");
 } else {


	 $('#msg').html("Loading... Please wait");

	 $.ajax
 (
 {
	 type        :  'post',
	 url         :  'functions/init.php',
	 data        :  {svptit:svptit,svpdet:svpdet,datat:datat},
	 success     :  function(data)
	 {
		 $('#msg').html(data);
	 }
 }
	 )

 }
}

 $("#exampleModalCenter").modal();
})

})