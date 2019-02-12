<?php
class HTMLtemplate {

	public function createHTMLtemplate($title="Bsc-Projekt", $description="Bsc-Projekt.", 
	$activeTag="", $content=array()) {
		echo '<!DOCTYPE html>
			<html lang="de">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<meta name="description" content="';
				echo $description;
				echo '" />
				<meta name="author" content="Andr&ecute; Becker" />
				<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW">
				<title>';
				echo $title;
				echo '</title>';
				echo '<link rel="stylesheet" type="text/css" href="./css/main.css">
					<link rel="stylesheet" type="text/css" href="./css/menu.css">';
				echo '</head>
			<body>
				<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
				<div id="header">';
				echo '</div>	
				<div class="mainContent">';
					echo $content;
				echo '</div>
				<footer>
					<nav id="footer_nav">
						<ul>
							<li class="li_none"><a href="./">Zum Haupmen&uuml;</a></li><li class="li_none"><a href="./impressum">Impressum</a></li></ul></nav>
						<ul>
							<li id="copyright">(c) 2018 Andr&eacute; Becker</li>
						</ul>
				</footer>
			</body>
		</html>';
		
	}

}