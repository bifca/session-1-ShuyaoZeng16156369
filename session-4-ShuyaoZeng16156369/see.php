<?php
if(!$_GET['title']){
	echo '请输入电影名字';die;
}else{
	$url = 'http://www.omdbapi.com/?apikey=DF1323AF&t='.urlencode($_GET['title']);
	$res = json_decode(file_get_contents($url),true);
	echo '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<title>Final Destination</title>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/willesPlay.css"/>
<script src="js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/willesPlay.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="willesPlay">
	<div class="playHeader">
		<div class="videoName">'.$res['Title'].'</div>
	</div>
	<div class="playContent">
		<video width="100%" height="100%" id="playVideo" poster="'.$res['Poster'].'">
			<source src="'.$_GET['video'].'" type="video/mp4"></source>			
		</video>
		<div class="playTip glyphicon glyphicon-play"></div>
	</div>
	<div class="playControll">
		<div class="playPause playIcon"></div>
		<div class="timebar">
			<span class="currentTime">0:00:00</span>
			<div class="progress">
				<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
				</div>
			<span class="duration">0:00:00</span>
		</div>
		<div class="otherControl">
			<span class="volume glyphicon glyphicon-volume-down"></span>
			<span class="fullScreen glyphicon glyphicon-fullscreen"></span>
			<div class="volumeBar">
					<div class="volumewrap">
						<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 8px;height: 40%;"></div>
					</div>
						</div>
				</div>
		</div>
	</div>
</div>
			
		</div>
	</div>
</div>

<div style="text-align:center;clear:both;">
	<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
	<script src="/follow.js" type="text/javascript"></script>
</div>
</body>
</html>
';
}
