<!DOCTYPE html>
<html lang="en">    <head>        <meta charset="UTF-8">
  	<meta http-equiv="Cache-control" content="public">
      <!-- Bootstrap -->
      <link href="/css/bootstrap.css" rel="stylesheet">
           <link href="/css/style.css" rel="stylesheet">
                <link rel="shortcut icon" href="/favicon.ico">
                     <link rel="stylesheet" type="text/css" href="css/component.css" />
                           <link href="/css/cssmenu.css" rel="stylesheet">
                              <link rel="stylesheet" href="/css/styles_new.css">
                                    <link rel="stylesheet" href="/css/styles-update_new.css">
                                    <script src="/js/jquery-1.11.3.min.js"></script>
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.css" />
                                   </head>


<style>
	body{
		line-height: 1.7;
		/*background: url('img/bg555.png');
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;*/
	}
	img.linktag{		    height: 30px;	}
	.box-no-padding{
		padding-left:0;
		padding-right:0;
	}

	.bg_blue{
		    color: #eee;
		background-color: #3696e8 ;
	}
	/*.main-menu div.main-menu-navbar a, .main-menu div.main-menu-navbar a {
		color: #fff;
	}
	.main-menu div.main-menu-navbar a:hover, .main-menu div.main-menu-navbar a.active {
		background-color: #3ba5ff;
		color: #fff;
	}
	.box3{
		background-color: #3696e8;
		    color: #dcdcdc;
	}*/
	.box3{
		padding: 5px 0px;
		background-color: #e19517;
	}

	@media screen and (min-width: 768px){
		header {
			padding: 10px 0 10px 0 !important;
		}
	}
	header .reload-btn-container {
		padding-top: 10px;
	}
	.head-box{
		background-color: rgb(20, 94, 169);
color: #ffffff;
	}
	.box-foot{
		background-color: transparent;
	}

	.match_remove{
		display: none !important;
	}
	.match_end{
		background-color: #d50000;
	}
	.blink_me {
		-webkit-animation-name: blinker;
		-webkit-animation-duration: 1s;
		-webkit-animation-timing-function: linear;
		-webkit-animation-iteration-count: infinite;

		-moz-animation-name: blinker;
		-moz-animation-duration: 1s;
		-moz-animation-timing-function: linear;
		-moz-animation-iteration-count: infinite;

		animation-name: blinker;
		animation-duration: 1s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
	}

	@-moz-keyframes blinker {
		0% { opacity: 1.0; }
		50% { opacity: 0.0; }
		100% { opacity: 1.0; }
	}

	@-webkit-keyframes blinker {
		0% { opacity: 1.0; }
		50% { opacity: 0.0; }
		100% { opacity: 1.0; }
	}

	@keyframes blinker {
		0% { opacity: 1.0; }
		50% { opacity: 0.0; }
		100% { opacity: 1.0; }
	}
	.box-foot{
		margin-top: 20px;

	}
	.text-black{
		color:#FFFFFF;

	}
	.flagicon{
		max-width:25px;
		max-height:25px;
	}

	.overlay {
	  position: fixed;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  background: rgba(0, 0, 0, 0.7);
	  transition: opacity 500ms;
	  visibility: visible;
	  opacity: 1;
	      z-index: 5;
	}
	.hidden {
	  visibility: hidden;
	  opacity: 0;
	}

	.popup {
		margin: 70px auto;
    padding: 20px;
    background: rgba(165, 161, 161, 0.21);
    margin-top: 13%;
    border-radius: 5px;
    width: 23%;
    position: relative;
    transition: all 5s ease-in-out;
	}
  h4, .h4 {
      font-size: 25px;
  }
	.popup h2 {
	  margin-top: 0;
	  color: #333;
	  font-family: Tahoma, Arial, sans-serif;
	}
	.popup h4 {
	      margin-top: 5px;
	  color: #eee;
	  font-size: 15px;
	  font-family: Tahoma, Arial, sans-serif;
	}
	.popup .close {

		top: 153px;
	right: 5px;
	transition: all 200ms;
	font-size: 42px;
	font-weight: bold;
	text-decoration: none;
	color: #fff;
	opacity: 1.2;
	text-shadow: 0 0px 0 #ffffff;
	font-family: Tahoma, Arial, sans-serif;
	}
	.popup .close:hover {
	  color: #a74d00;
	}
	.popup .content {
	  max-height: 30%;
	  overflow: auto;
	  text-align:center;
		position: fixed;
    top: 315px;
    left: 667px;
    opacity: 1;
    overflow: visible;
	}
	.fixed{
		position:absolute;
		z-index:1;
		transition: all 100ms;
	}
	.fixed_warper{
		position: relative;
		float: left;
		width: 100%;
		min-width: 1px;
		height: auto;
	}
	.fixed_warper_height{
		margin-bottom: 4px;
display: block;
	}
	.box2, .box3{font-size: 19px;}

	@media screen and (max-width: 700px){

		.popup{
			width: 70%;
		}
		.fixed_warper_height{
			height:auto;
			margin-bottom:10px;
		}
		.box2, .box3{font-size: 9px;}
  img.linktag{		    height: 13px;	}
	}

	/*tablefootbal*/
	.table-bordered > tbody > tr > td{    border: 1px solid #000000;}
	.ured {
	    color: #F00;
	    font-weight: bolder;
	}
	.utable_league {
	    font-size: medium;
	    color: #ffffff;
	}
	.table__data.table__data--table1{  padding: 0.5em;
	    vertical-align: middle;
	    text-align: center;
	    border: 1px solid #555;}

	.utable_f1{  padding: 0.5em;
	    vertical-align: middle;
	    text-align: center;
	    border: 1px solid #555;}
	    .utable_f3{ padding: 0.5em;
	        vertical-align: middle;
	        text-align: center;
	        border: 1px solid #555;}
	        .utable_f7{ padding: 0.5em;
	            vertical-align: middle;
	            text-align: center;
	            border: 1px solid #555;}
	        .utable_f5{ padding: 0.5em;
	            vertical-align: middle;
	            text-align: center;
	            border: 1px solid #555;}
	            .utable_f6{ padding: 0.5em;
	                vertical-align: middle;
	                text-align: center;
	                border: 1px solid #555;}
									td.utable_f4.f{display: inline-flex;}
									td.utable_f2.f{display: inline-flex}
                  body{
                      /*  -webkit-filter: grayscale(60%);*/
                  }

</style>



<header class="container">
	<div class="row">

		<div class="col-xs-12 col-sm-6 col-md-4 reload-btn-container">

			<div class="col-xs-2"><img src="/img/facebook-2.png" /></div>
			<div class="col-xs-10 text-left"><a class="no-margin" href="https://www.facebook.com/doballyoutube" target="_blank">ดูบอลสด ดูบอลออนไลน์ << คลิ๊กลิ้งติดตามเพจ</a></div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 reload-btn-container">
			<div class="col-xs-2"><img src="/img/line.png" style=""></div>
			<div class="col-xs-10 text-left"><a href="line://ti/p/%40doball" class="atline no-margin" target="_blank">@DOBALL << กดลิ้งเพื่อรับลิ้งทางมือถือ</a></div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 reload-btn-container">
			<input value="" onclick="javascript:location.reload();" type="button" class="reload-btn lang-1" style="padding:0px;" />
		</div>
	</div>
	<div class="col-md-12 center"> <a href="http://doball.com"><img src="/img/doball.png"></a></div>

</header>
<!-- end: Header -->
<div class="container main-menu">
	<div class="row">
		<nav class="col-xs-12 bg_orange no-padding">
			<a href="javascript:void(0);" class="pull">MENU <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
			<div class="main-menu-navbar">
				<a class="hide-menu col-count-5" href="http://doball.com">ดูบอลสด</a>
				<a class="hide-menu col-count-5" href="http://www.doball.com/%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B9%81%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%9A%E0%B8%AD%E0%B8%A5/">โปรแกรมบอล</a>
				<a class="hide-menu col-count-5" href="http://www.doball.com/%E0%B8%9C%E0%B8%A5%E0%B8%9A%E0%B8%AD%E0%B8%A5/">ผลบอล</a>
				<a class="hide-menu col-count-5" href="http://www.doball.com/%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B9%80%E0%B8%A3%E0%B8%B2/">ติดต่อเรา</a>
			</div>
		</nav>
	</div>
</div>








<?php

$d=strtotime("Monday");
$e= date("Y-m-d", $d)  ;
$day=date("Y-m-d ") ;

if(trim($e)==trim($day)){
?>
<div id="popup1" class="overlay">
<div class="popup" style="text-align:center;">

	<a class="close" href="javascript:closePopup();" style="
padding: 10px;
background: red;
margin-bottom: 10px;
font-size: x-large;
">close </a>

	<a href="https://line.me/R/ti/p/%40lui8121o" class="popup-sportpool" target="_blank">
		<img src="http://doball.com/img/bannerdoball.png" />
	</a>


	<div class="content">


	</div>
</div>
</div>
<?php
}else{
$n = rand(1,3);

if($n=='1'){
?><div id="popup1" class="overlay">
<div class="popup" style="text-align:center;">

	<a class="close" href="javascript:closePopup();" style="
padding: 10px;
background: red;
margin-bottom: 10px;
font-size: x-large;
">close </a>



	<a href="https://goo.gl/fXKasi" class="popup-sportpool" target="_blank">
		<img src="http://doball.com/img/ballgulu060960popup.gif" />




		<!--<div class="popup" style="text-align:center;">

			<a href="https://goo.gl/fXKasi" class="popup-sportpool" target="_blank">  </a>
			<!--  <img src="img/ballgulu060960popup" style="max-height: 100px;" />
			<!--<h2>@<span style="color:#2cbe13;">LINE</span>DOBALL</h2>-->
			<!-- <h4>ทีเด็ดบอล ลิ้งดูบอล คลิ๊กเลย</h4>-->
			<!--<a class="close" href="javascript:closePopup();">--&times; </a>
			<a href="https://www.facebook.com/groups/sportpool/" class="popup-sportpool" target="_blank">
				<img src="img/v2new.gif" />-->
	</a>


	<div class="content">
		<!--<a href="line://ti/p/%40kbf3755n" class="popup-sportpool" target="_blank">-->

	</div>
</div>
</div><?php
}else if($n=='2'){ ?><div id="popup1" class="overlay">
<div class="popup" style="text-align:center;">

	<a class="close" href="javascript:closePopup();" style="
padding: 10px;
background: red;
margin-bottom: 10px;
font-size: x-large;
">close </a>

	<a href="https://line.me/R/ti/p/%40cku6673q" class="popup-sportpool" target="_blank">
		<img src="http://doball.com/img/dooballditang.gif" />


	</a>



	<div class="content">
		<!--<a href="line://ti/p/%40kbf3755n" class="popup-sportpool" target="_blank">-->

	</div>
</div>
</div> <?}else{ ?><div id="popup1" class="overlay">
<div class="popup" style="text-align:center;">

	<a class="close" href="javascript:closePopup();" style="
padding: 10px;
background: red;
margin-bottom: 10px;
font-size: x-large;
">close </a>



	<a href="https://goo.gl/46U77g" class="popup-sportpool" target="_blank">
		<img src="http://doball.com/img/nocr.gif" />




		<!--<div class="popup" style="text-align:center;">

			<a href="https://goo.gl/fXKasi" class="popup-sportpool" target="_blank">  </a>
			<!--  <img src="img/ballgulu060960popup" style="max-height: 100px;" />
			<!--<h2>@<span style="color:#2cbe13;">LINE</span>DOBALL</h2>-->
			<!-- <h4>ทีเด็ดบอล ลิ้งดูบอล คลิ๊กเลย</h4>-->
			<!--<a class="close" href="javascript:closePopup();">--&times; </a>
			<a href="https://www.facebook.com/groups/sportpool/" class="popup-sportpool" target="_blank">
				<img src="img/v2new.gif" />-->
	</a>



	<div class="content">
		<!--<a href="line://ti/p/%40kbf3755n" class="popup-sportpool" target="_blank">-->

	</div>
</div>
</div> <?}}
?>
<!-- start: marquee -->
