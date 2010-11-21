<?php
function make_head($title)
{
?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title><?php echo $title?></title>
	<link type="text/css" href="/css/style.css" rel="stylesheet" media="screen" />
	<!--[if IE]>
	<style type="text.css">
		.clearfix {
			zoom: 1;
		}
	</style>
	<![endif]-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/cufon-yui.js"></script>
	<script type="text/javascript" src="/js/Helvetica_300.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('p,h1,table');
	</script>
<?php
}
?>