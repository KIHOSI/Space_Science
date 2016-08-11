<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/smoothness/jquery-ui.css" media="all"/>
		<link rel="stylesheet" href="http://www.atm.ncu.edu.tw/css/page.css">
		<!-- STYLESHEET CSS FILES -->
				<link rel="stylesheet" href="css/bootstrap.min.css">


				<link rel="stylesheet" href="css/animate.min.css">
				<link rel="stylesheet" href="css/font-awesome.min.css">
				<link rel="stylesheet" href="css/nivo-lightbox.css">
				<link rel="stylesheet" href="css/nivo_themes/default/default.css">
				<link rel="stylesheet" href="css/style.css">
				<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://www.atm.ncu.edu.tw/js/jquery-ui.custom.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/jquery-ui.min.js"></script>
		<script src="http://140.115.35.48/view/2012/publicv2_img.js"></script>
		<script src="http://140.115.35.48/view/2012/publictestdatev2_img.js"></script>
		<title>演講資訊::中央大學大氣科學系暨大氣物理研究所</title>
		<link href="http://www.atm.ncu.edu.tw/bxslider/jquery.bxslider.css" rel="stylesheet">
		<style type="text/css">
		.ui-datepicker-multi .ui-datepicker-group {
		  width: 100%;
		}
		::-webkit-scrollbar{ /*chrome滾輪消失*/
		overflow: hidden;
		}
		</style>
	</head>
	<body class="navbarbod" style="padding-top:130px;">
		<div class="navbar navbar-fixed-top">
			<ul class="filter-wrapper clearfix">
				<li class="active"><a href="lecture_slide.php" style="background-color:#FFD321;">演講公告<br />Seminar Announcement</a></li><li><a href="news.php">系辦公告<br />News & Events</a></li>
			</ul>
		</div>
		<hr>
		<div class="container">	<div class="row">
				<div class="col-sm-4">
					<div id="calendar"></div>
				</div>
				<div class="col-sm-8">
					<div class="sliderfa">
						<ul class="newsslider">

						</ul>
					</div>
				</div>
		<script src="http://www.atm.ncu.edu.tw/bxslider/jquery.bxslider.min.js"></script>
		<script>
			$(document).ready(function() {
				var add = true;
				var interval = setInterval(function() {
					if (eval('typeof public_myimages') == 'undefined'){
					}else if(add){
						for(var ix = 0; ix < public_myimages.length; ix++){
							$('.newsslider').append('<li><img src="http://140.115.35.48/view/2012/'+ public_myimages[ix] +'" /></li>');
						}
						add = false;
					}else{
						clearInterval(interval);
						$slide = $('.newsslider').bxSlider({
							auto: true,
							pause: 10000,
							speed: 600
						});
						if(public_myimages.length ==1){
							$slide.stopAuto();
						}
					}
				}, 50);
				
				var add4 = true;
				var interval4 = setInterval(function() {
					if (eval('typeof publictestdate_myimages') == 'undefined'){
					}else if(add4){
						$( "#calendar" ).datepicker({
						  inline: true,
						  numberOfMonths: [2, 1],
						  beforeShowDay: function(date){  
							  for(var i in publictestdate_myimages){  
								  var courseTime = publictestdate_myimages[i]*1000;  
								  if(courseTime == date.getTime()){  
									  return [true, 'hasCourse'];  
									  break;  
								  }  
							  }  
							  return [true, ''];  
						  } 
						});
						$('#calendar .hasCourse a').addClass('ui-state-error');
						add4 = false;
					}else{
						clearInterval(interval4);
					}
				}, 50);

			} );
		</script>
		</div>
	</body>
</html>