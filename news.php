<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/smoothness/jquery-ui.css" media="all"/>
		<link rel="stylesheet" href="http://www.atm.ncu.edu.tw/css/page.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://www.atm.ncu.edu.tw/js/jquery-ui.custom.min.js"></script>
		<title>公告::中央大學大氣科學系暨大氣物理研究所</title>
		<link rel="stylesheet" href="http://www.atm.ncu.edu.tw/css/table-2.css" media="all"/>
		<link rel="stylesheet" href="http://www.atm.ncu.edu.tw/css/demo_table_jui.css" media="all"/>
		<link rel="stylesheet" href="http://www.atm.ncu.edu.tw/css/jquery-ui.custom.css" media="all"/>
		<link rel="stylesheet" href="http://www.atm.ncu.edu.tw/css/colorbox.css" media="all"/>
		<link rel="stylesheet" href="http://www.atm.ncu.edu.tw/css/jquery.fileupload-ui.css" media="all"/>
		<!-- STYLESHEET CSS FILES -->
				<link rel="stylesheet" href="css/bootstrap.min.css">


				<link rel="stylesheet" href="css/animate.min.css">
				<link rel="stylesheet" href="css/font-awesome.min.css">
				<link rel="stylesheet" href="css/nivo-lightbox.css">
				<link rel="stylesheet" href="css/nivo_themes/default/default.css">
				<link rel="stylesheet" href="css/style.css">
				<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		
		<script src="http://www.atm.ncu.edu.tw/js/jquery.fileupload.js"></script>
		<script src="http://www.atm.ncu.edu.tw/js/jquery.fileupload-ui.js"></script>
		<script src="http://www.atm.ncu.edu.tw/js/jquery.fileupload-uix.js"></script>
		<script src="http://www.atm.ncu.edu.tw/js/jquery.fileupload.application.js"></script>
		<script src="http://www.atm.ncu.edu.tw/js/jquery.dataTables.js"></script>
		<script src="http://www.atm.ncu.edu.tw/js/jquery.colorbox-min.js"></script>
		<script src="http://www.atm.ncu.edu.tw/ckeditor/ckeditor.js"></script>
		<script src="http://www.atm.ncu.edu.tw/ckeditor/adapters/jquery.js"></script>
		<script src="http://www.atm.ncu.edu.tw/js/jquery.tmpl.min.js"></script>
		<script id="template_confirm_close" type="text/x-jquery-tmpl"><div class="confirm_close" title="Confirm close"><p>表單填寫中，確定要關閉嗎？</p></div></script>
		<script> 
		$(document).ready(function() {
			$( ".radioc" ).buttonset();
			$.fn.acbcolorbox = function (option) {
				var opti = {height:'90%',innerWidth:'640px',opacity: .8,returnFocus:false,overlayClose:false,onComplete:function(){
						$('#file_upload').PfileUploadUIX();
						//$('#file_upload').PfiledisplayUIX();
					},onClosed:function(){$('#file_upload').fileUploadUIX('destroy');}
				}
				$.extend(opti, option);
				$(this).colorbox(opti);
			}
			$(".colorbox").acbcolorbox();
			$('#example').dataTable( {
				"oLanguage": {
						"sLengthMenu": "Display _MENU_ records per page",
						"sZeroRecords": "沒有對應的資料。 Nothing found.",
						"sInfo": "_START_ to _END_ of _TOTAL_ records",
						"sInfoEmpty": "0 to 0 of 0 records",
						"sInfoFiltered": "(from _MAX_ total records)"
					},
				"bFilter": false,
				"aaSorting": [[ 0, "desc" ]],
				"bProcessing": true,
				"bRetrieve": true,
				"bJQueryUI": true,
				"iDisplayLength" :10,
				"aLengthMenu": [[10, 25, 50,  -1], [10, 25, 50, "All"]],
				"sPaginationType": "full_numbers",
				"bAutoWidth" : false
			} );
			var originalClose = $.colorbox.close; 
			$.colorbox.close = function(){ 
				var response; 
				var lefolt=0;
				$('#add_news').find('input.foc').each(function(){lefolt=lefolt+$(this).val().length;})
				$('#add_news').find('textarea.foc').each(function(){lefolt=lefolt+$(this).val().length;})
				if(lefolt > 0){ 
				var dialogs = $('#dialog_confirm_close');
		        if (!dialogs.length) {
		               dialogs = $('#template_confirm_close').tmpl().attr('id', 'dialog_confirm_close');
				}
		        var option = {
		                    modal: true,
		                    show: 'fade',
							//show: 'blind slide',
		                    hide: 'fade',
		                    //width: 400,
							zIndex: 10020,
							buttons: {
								"Close": function() {
									$(this).dialog("close");
									originalClose(); 
								},
								Cancel: function() {
									$(this).dialog("close");
								}
							}
		                };
		               dialogs.dialog(option);
		            
				   /*response = confirm('表單填寫中，確定要關閉嗎？'); 
				   if(!response){ 
					  return; // Do nothing. 
				   } */
				}else{
					originalClose(); 
				}
			};
			$.fn.adbcolorbox = function (option) {
				var opti = {height:'90%',innerWidth:'640px',returnFocus:false,overlayClose:false,onComplete:function(){
						var ckconfig = { 'toolbar':[
								['Undo','Redo'],
								['Source','-','Preview','Templates'],
								['Image','Table','HorizontalRule','Smiley','SpecialChar','NumberedList','BulletedList'],			
								['Outdent','Indent','Blockquote','JustifyLeft','JustifyCenter','JustifyRight'],
								'/',
								['Link','Unlink','Anchor','-','Subscript','Superscript','TextColor','BGColor'],
								['Bold','Italic','Underline','Strike','Format','FontSize']
												],'height': '150px'
									};
						$('.ckeditor').ckeditor(ckconfig);
						
						$('#file_upload').PfileUploadUIX();
						//$('#file_upload').PfiledisplayUIX();
						
					},
					onCleanup:function(){$('.ckeditor').ckeditorGet().destroy();},
					onClosed:function(){$('#file_upload').fileUploadUIX('destroy');}
				}
				$.extend(opti, option);
				$(this).colorbox(opti);
			}
			$("#adnebut").button({icons:{primary:"ui-icon-circle-plus"}}).adbcolorbox();
		});
		</script>
		<style>
			::-webkit-scrollbar{ /*chrome滾輪消失*/
				overflow: hidden;
			}
		</style>
	</head>
	<body class="navbarbod">
		<div class="navbar navbar-fixed-top">
		<ul class="filter-wrapper clearfix">
			<li><a href="lecture_slide.php">演講公告<br />Seminar Announcement</a></li><li class="active"><a href="news.php" style="background-color:#FFD321;">系辦公告<br />News & Events</a></li>
		</ul>
		</div>
		<hr style="margin-top:77px;">
		<div class="container">
		        <div class="radioc">
		    		</div>
		    <div id="dynamic" class="ex_highlight_row">
		      <table width="100%" id="example" class="display" summary="news">
		                <thead>
		          <tr>
		            <th width="7%" scope="col">類型<br />Type</th>
		            <th scope="col">公告主題<br />Title</th>
		            <th width="28%" scope="col">公告日期<br />Date</th>
		                      </tr>
		        </thead>
		        <tbody>
		                               <tr class="odd">
		              <td class="center tdlocal">置頂</td>
		              <td class="tdlocal"><a href="news_detail.php?lid=70" class="colorbox">本系觀測園區受理申請參訪與儀器架設公告</a></td>
		              <td class="tdtime">2015/05/22~</td>
		                         </tr>
		                     <tr>
		              <td class="center tdlocal">一般</td>
		              <td class="tdlocal"><a href="news_detail.php?lid=43" class="colorbox">地科院英檢補助申請注意事項</a></td>
		              <td class="tdtime">2014/07/10~</td>
		                         </tr>
		                            </tbody>
		      </table>
		    </div>
		</div>
	</body>
</html>