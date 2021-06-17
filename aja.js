$(document).ready(function() 
{

	
	$("#account").click(function() 
	{

		var act    = "account";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {act:act},
        success     :  function(data)
        {
            $('#act').text(data);
        }
    }
        )

})

$("#biology").click(function() 
	{

		var biology    = "biology";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {biology:biology},
        success     :  function(data)
        {
            $('#bio').text(data);
        }
    }
        )

})

$("#chemistry").click(function() 
	{

		var chemistry    = "chemistry";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {chemistry:chemistry},
        success     :  function(data)
        {
            $('#chm').text(data);
        }
    }
        )

})

$("#commerce").click(function() 
	{

		var commerce    = "commerce";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {commerce:commerce},
        success     :  function(data)
        {
            $('#com').text(data);
        }
    }
        )

})

$("#crk").click(function() 
	{

		var crk    = "crk";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {crk:crk},
        success     :  function(data)
        {
            $('#ck').text(data);
        }
    }
        )

})

$("#economics").click(function() 
	{

		var act    = "economics";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {economics:economics},
        success     :  function(data)
        {
            $('#eco').text(data);
        }
    }
        )

})

$("#english").click(function() 
	{

		var english    = "english";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {english:english},
        success     :  function(data)
        {
            $('#lit').text(data);
        }
    }
        )

})

$("#maths").click(function() 
	{

		var maths    = "maths";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {maths:maths},
        success     :  function(data)
        {
            $('#mat').text(data);
        }
    }
        )

})

$("#phy").click(function() 
	{

		var phy    = "phy";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {phy:phy},
        success     :  function(data)
        {
            $('#ph').text(data);
        }
    }
        )

})

$("#uoe").click(function() 
	{

		var uoe    = "uoe";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {uoe:uoe},
        success     :  function(data)
        {
            $('#uo').text(data);
        }
    }
        )

})

$("#lifechange").click(function() 
	{

		var lifechange    = "lifechange";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {lifechange:lifechange},
        success     :  function(data)
        {
            $('#life').text(data);
        }
    }
        )

})

$("#nude").click(function() 
	{

		var nude    = "nude";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {nude:nude},
        success     :  function(data)
        {
            $('#nud').text(data);
        }
    }
        )

})

$("#joke").click(function() 
	{

		var joke    = "joke";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {joke:joke},
        success     :  function(data)
        {
            $('#jk').text(data);
        }
    }
        )

})

$("#mb1").click(function() 
	{

		var mb1    = "mb1";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {mb1:mb1},
        success     :  function(data)
        {
            $('#m1').text(data);
        }
    }
        )

})

$("#mb2").click(function() 
	{

		var mb2    = "mb2";

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {mb2:mb2},
        success     :  function(data)
        {
            $('#m2').text(data);
        }
    }
        )

})
})	