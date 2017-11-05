<?php
	$sources = '';
	$dir = scandir('.');
	if(isset($_GET["shuffle"])) {
		shuffle($dir);
	}
	foreach($dir as $key => $file) {
		$parts = explode('.', $file);
		if($parts[count($parts)-1] == 'mp3') {
			$sources .= "<source src='$file' type='audio/mp3'/>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Abaganon Audio</title>
		<link rel="stylesheet" href="mp3player/player.min.css"/>
	</head>
	<body>
		<div class="player row">
			<div class="buttons col col-30 center">
				<span class="rewind"></span>
				<span class="play"></span>
				<span class="forward"></span>
			</div>
			<div class="data col col-70">
				<div class="playerWindow">
					<div class="track-display row">
						<div class="col col-10">
							<span class="trackTime">--:--</span>
						</div>
						<div class="col col-80">
							<span class="trackTitle">&nbsp;</span>
						</div>
						<div class="col col-10">
							<span class="trackLength">--:--</span>
						</div>
					</div>
				</div>
			</div>
			<audio loop>
				<?php echo $sources; ?>
				HTML5 Audio Not Available
			</audio>
			<!--
			<div>Optional debug panel:</div>
			<div class="debug"></div>
			-->
		</div>
		<script src="mp3player/player.min.js"></script>
	</body>
</html>

