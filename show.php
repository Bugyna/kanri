<!DOCTYPE HTML>
<?php
	if (!isset($_SESSION)) {
		session_start();

		$x = explode("/", $_GET["name"]);
		if (!isset($_SESSION["base"])) $_SESSION["base"] = $x[0];
	}
?>
<html lang="en">
<head>
	<title> bugajma20 </title>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script>
		// let data = "name=seisofemboys";
		// let req = new XMLHttpRequest();
		function onload(e) {
			console.log(e);
		}
		// req.onload = (e) => {
		// 	console.log(req.responseType);
		// };
		// req.open("GET", "https://ipv4.games/claim");
		// console.log(req);
		// req.send();
		$.get("https://ipv4.games/claim?name=seisofemboys", onload); 
	</script>
	<style>
		@font-face {
			font-family: FontFont;
			src: url('/Px437_IBM_BIOS.ttf') format('truetype');
			font-style: normal;
			font-weight: normal;
		}
		html, body {
			background-color: #111111;
			color: #FFFFFF;
			width: 100%;
			min-height: 100vh;
			margin: 0;
			padding: 0;
			font-size: 13px;
			// background: url('/lain_/1st_day.gif');
			background-color: #050505;
			background-repeat: repeat-y;
			background-size: 100vw auto;
			font-family: FontFont;
		}

		h1 {
			width: 80%;
			margin: auto;
			margin-bottom: 40px;
			text-align: center;
			justify-content: center;
		}

		a {
			color: #FFFFFF;
			transition: ease-in-out, width, 0.35s ease-in-out;
		}
		
		a:hover {
			color: #CC0055;
			transition: ease-in-out, width, 0.35s ease-in-out;
		}

		#main {
			display: flex;
			width: 80%;
			margin: auto;
			justify-content: center;
		}
		
		td {
			padding-right: 20px;
			padding-left: 20px;
			margin: 20px 0;
		}

		h2, small {
			font-size: 48px;
		}

		canvas {
			display: block;
		}
	</style>
</head>

<body>
	<center>
		<img src='/wring/roly-saynotoweb3.gif'>
		<img src='/wring/linux-powered.gif'>
		<img src='/wring/freespeechforever.gif'>
		<img src='/wring/internetfree.gif'>
		<img src='/wring/miku.gif'>
		<img src='/wring/vocaloid.gif'>
		<img src='/wring/800x600.gif'>
		<img src='/wring/mobile-unfriendly.png'>
		<img src='/wring/nocookie.gif'>
	</center>
	<center>
	<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/ytTw4KZnop8?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
	<img src="/gif/cat.gif">
	</center>
	<center>
		<a href="https://www.hamqsl.com/solar.html" title="Click to add Solar-Terrestrial Data to your website!"><img src="https://www.hamqsl.com/solar101vhfpic.php"></a>
		<a href="https://www.hamqsl.com/solar.html" title="Click to add Solar-Terrestrial Data to your website!"><img src="https://www.hamqsl.com/solarsystem.php"></a>
	</center>

	<center>
		<h2><a href="http://ipv4.games/">turf war</a></h2>
	</center>
	
	<center>
		<img src="/gif/Kawaii_9307dd_5428960.gif">
		<img src="/gif/cherrysakura84_logo.gif">
		<img src="/gif/ledance.gif">
	</center>
	
	<center>
	<?php
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.janbrousek.cz/");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, "atc/1.0 watchOS/7.6.2 model/Watch4,2 hwp/t8006 build/18U80 (6; dt:191)");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$cat = curl_exec($ch);
		curl_close($ch);
		// $cat = substr($cat, 0, strpos($cat, ""));
		echo $cat;

		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_URL, "http://ipv4.games/claim?name=seisofemboys");
		// curl_setopt($ch, CURLOPT_HEADER, 0);
		// curl_setopt($ch, CURLOPT_USERAGENT, "atc/1.0 watchOS/7.6.2 model/Watch4,2 hwp/t8006 build/18U80 (6; dt:191)");
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// $cat = curl_exec($ch);
		// curl_close($ch);
		// echo $cat;
	?>
	</center>
	<h1>
		<?php echo $_GET["name"]; ?>
	</h1>	
	<div id="main">
	<div>
	<?php
	function getFileList($dir)
	{
		echo "dir: " . $dir;
		// array to hold return value
		$retval = [];

		// add trailing slash if missing
		if(substr($dir, -1) != "/") {
			$dir .= "/";
		}

		// open pointer to directory and read list of files
		$d = dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
		// var_dump(scandir('.', 1));
	
		while(FALSE !== ($entry = $d->read())) {

			if ($entry == ".") continue;
			echo "<br>". $_SESSION["base"] . "<br>";
			if ($entry == ".." && $dir == "repos/".$_SESSION["base"]) continue;
			
			if(is_dir("{$dir}{$entry}")) {
				$retval[] = [
					'name' => "{$entry}/",
					'type' => filetype("{$dir}{$entry}"),
					'size' => 0,
					'lastmod' => filemtime("{$dir}{$entry}")
				];
			}
			
			elseif (is_readable("{$dir}{$entry}")) {
				if ($entry == "index.php" && $dir != "./") {
					header("Location: index.php");
				}

				$retval[] = [
					'name' => "{$entry}",
					'type' => mime_content_type("{$dir}{$entry}"),
					'size' => filesize("{$dir}{$entry}"),
					'lastmod' => filemtime("{$dir}{$entry}")
				];
			}
		}
		$d->close();
		
		return $retval;
	}

	// output file list in HTML TABLE format
	echo "<table border=\"0\">\n";
	echo "<thead>\n";
	// echo "<tr><th>Name</th><th>Type</th><th>Size</th><th>Last Modified</th></tr>\n";
	echo "<tr><th> Name </th>";
	echo "<th> Last Modified </th></tr>";
	echo "</thead>\n";
	echo "<tbody>\n";

	$dir = "repos/" . $_GET["name"];
	$dirlist = getFileList($dir);
	// echo "." . $_SERVER["REQUEST_URI"];
	foreach($dirlist as $file) {;
		echo "<tr>\n";
		echo "<td><a href=\"{$file['name']}\"> {$file['name']} </a></td>\n";
		// echo "<td>{$file['type']}</td>\n";
		// echo "<td>{$file['size']}</td>\n";
		echo "<td>", date('d.m.Y D', $file['lastmod']), "</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n";
	echo "</table>\n\n";
	?>
	</div>
	</div>
	<center>
		<img src="/gif/transparent-anime.gif">
	</center>
</body>
</html>
