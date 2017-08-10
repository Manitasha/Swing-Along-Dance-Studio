<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">


<!--Remy Sharp Shim -->
<!--[if lte IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script>
<![endif]-->




<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<link href="css/style-acordian.css" type="text/css" rel="stylesheet">

<link href="css/styles.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".nav-button").click(function () {
  $(".nav-button,.primary-nav").toggleClass("open");
  });
});
</script>

<!-- Modernizr -->
<script src="js/modernizr.js"></script>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script src="js/drop-down.js" type="text/javascript"> </script>

<script src="js/script.js"></script>

<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>

<script type="text/javascript">
	$(function(){
		SyntaxHighlighter.all();
	});
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});
</script>


<!-- doctype end-->
