<?php

// initialize htmltemplate	
require_once './inc/generalClasses/htmltemplate.php';
$html = new HTMLtemplate();	
$htmlTemplate = array();

$htmlTemplate['title'] = 'Start | Bsc-Projekt';
$htmlTemplate['description'] = 'Bsc-Projekt.';
$htmlTemplate['active'] = 'main';

$htmlTemplate['content'] = '<div class="hgroup"><h1>Umfrage</h1></div><form method="post" action="">';

$htmlTemplate['content'] .= '<div id="privacyText" class="category"><strong>Einwilligungserkl&auml;rung gem&auml;&szlig; Datenschutz f&uuml;r eine Umfrage zum Thema “Bsc.-Arbeit A. Becker”</strong><br><br>
							Nachfolgend wollen wir Ihnen ein paar Fragen stellen zum Thema “Bsc.-Arbeit A. Becker”. Ziel unser Umfrage ist, den Nutzen von Bsc.-Arbeit A. Becker besser bewerten zu
							k&ouml;nnen.<br><br>
							Im Abschluss der Umfrage wollen wir zudem n&auml;here Informationen zu Ihrer Person abfragen, um dadurch bei den Ergebnissen auch soziale Faktoren (Alter, Geschlecht) 
							einzubeziehen und so die Bewertung verbessern zu k&ouml;nnen.<br><br>
							Die Teilnahme an dieser Umfrage ist ohne die Nennung Ihres Namens m&ouml;glich.<br><br>
							Eine Registrierung ist f&uuml;r die Teilnahme nicht erforderlich.<br><br>
							Auch bei einer Umfrage haben Sie gem&auml;ß Datenschutz gegen&uuml;ber dem Informationstr&auml;ger das Recht auf Auskunft sowie L&ouml;schung Ihrer personenbezogenen Daten. 
							Sie k&ouml;nnen diese Einwilligungserkl&auml;rung jederzeit widerrufen. Schreiben Sie hierzu eine E-Mail an <a href="mailto:beckeran@uni-hildesheim.de">beckeran@uni-hildesheim.de</a>. 
							Nach erfolgtem Widerruf werden Ihre Daten gel&ouml;scht und unzug&auml;nglich aufbewahrt.<br><br>
							Die Ergebnisse dieser Umfrage werden zu wissenschaftlichen Zwecken genutzt und im Rahmen der Bachelorarbeit allgemein zug&auml;nglich gemacht.<br><br>
							<input type="button" id="acceptPrivacy" value="Ich bin einverstanden und möchte an der Umfrage teilnehmen"></div>

							<div id="mainSurvey">
								<div class="category"><div class="subtitle">Fragen zum Spiel</div>
									<table class="table">
									<tr><th>Frage</th><th>Bewertung (1 = schlechteste, 5 = beste)</th></tr>
									<tr><td>Rolle im Spiel</td><td><select name="rolle"><option value="d">Detektiv</option><option value="r">R&auml;uber</option></select></td></tr>
									<tr><td>Das Spiel macht Spa&szlig;</td><td><input type="radio" class="radioRating" name="spass" value="1">1<input type="radio" class="radioRating" name="spass" value="2">2
									<input type="radio" class="radioRating" name="spass" value="3">3<input type="radio" class="radioRating" name="spass" value="4">4
									<input type="radio" class="radioRating" name="spass" value="5">5</td></tr>
									<tr><td>Das Spiel f&ouml;rdert soziale Interaktionen</td><td><input type="radio" class="radioRating" name="sozial" value="1">1<input type="radio" class="radioRating" name="sozial" value="2">2
									<input type="radio" class="radioRating" name="sozial" value="3">3<input type="radio" class="radioRating" name="sozial" value="4">4
									<input type="radio" class="radioRating" name="sozial" value="5">5</td></tr>
									<tr><td>Das Spiel f&ouml;rdert Outdoor-Aktivit&auml;ten</td><td><input type="radio" class="radioRating" name="outdoor" value="1">1<input type="radio" class="radioRating" name="outdoor" value="2">2
									<input type="radio" class="radioRating" name="outdoor" value="3">3<input type="radio" class="radioRating" name="outdoor" value="4">4
									<input type="radio" class="radioRating" name="outdoor" value="5">5</td></tr>
									<tr><td>Mir gefällt, wie das Spiel Funktionen wie Kamera oder GPS nutzt</td><td><input type="radio" class="radioRating" name="cam" value="1">1<input type="radio" class="radioRating" name="cam" value="2">2
									<input type="radio" class="radioRating" name="cam" value="3">3<input type="radio" class="radioRating" name="cam" value="4">4
									<input type="radio" class="radioRating" name="cam" value="5">5</td></tr>
									
									<tr><td>Ich bin motiviert das Spiel wieder zu spielen</td><td><input type="radio" class="radioRating" name="motviation" value="1">1<input type="radio" class="radioRating" name="motviation" value="2">2
									<input type="radio" class="radioRating" name="motviation" value="3">3<input type="radio" class="radioRating" name="motviation" value="4">4
									<input type="radio" class="radioRating" name="motviation" value="5">5</td></tr>
									<tr><td>Ich habe Erfahrung mit Videospielen</td><td><input type="radio" class="radioRating" name="erfahrung" value="1">1<input type="radio" class="radioRating" name="erfahrung" value="2">2
									<input type="radio" class="radioRating" name="erfahrung" value="3">3<input type="radio" class="radioRating" name="erfahrung" value="4">4
									<input type="radio" class="radioRating" name="erfahrung" value="5">5</td></tr>
									<tr><td>Verbesserungsvorschl&auml;ge</td><td><textarea name="verbesserung"></textarea></td></tr>
									</table>
								</div>
							
								<div class="category"><div class="subtitle">Demografische Angaben</div>
									<table class="table">
									<tr><td>Alter</td><td><input type="number" name="alter" step="1" min="0"> Jahre</td></tr>
									<tr><td>Geschlecht</td><td><select name="geschlecht"><option value="m">m&auml;nnlich</option>
									<option value="w">weiblich</option></select></td></tr>
									</table>
								</div>
								
								<div class="category"><table class="table"><tr><td><input type="submit" name="senden" value="Senden"></td><td><input type="reset" value="Eingaben entfernen" /></td></tr></table></div>
							</div>
							<script type="text/javascript" src="./js/askPrivacy.js" defer></script>
							</form>';
						
if (!empty($_POST["senden"])) {
	
	$error = false;
	
	$rolle = '';
	if (!empty($_POST["rolle"])){
		$rolle = $_POST["rolle"];
	} else {
		$error = true;
	}
	
	$spass = '';
	if (!empty($_POST["spass"])){
		$spass = $_POST["spass"];
	} else {
		$error = true;
	}
	
	$cam = '';
	if (!empty($_POST["cam"])){
		$cam = $_POST["cam"];
	} else {
		$error = true;
	}
	
	$sozial = '';
	if (!empty($_POST["sozial"])){
		$sozial = $_POST["sozial"];
	} else {
		$error = true;
	}
	
	$outdoor = '';
	if (!empty($_POST["outdoor"])){
		$outdoor = $_POST["outdoor"];
	} else {
		$error = true;
	}
	
	$motviation = '';
	if (!empty($_POST["motviation"])){
		$motviation = $_POST["motviation"];
	} else {
		$error = true;
	}
	
	$erfahrung = '';
	if (!empty($_POST["erfahrung"])){
		$erfahrung = $_POST["erfahrung"];
	} else {
		$error = true;
	}
	
	$verbesserung = '';
	if (!empty($_POST["verbesserung"])){
		$verbesserung = $_POST["verbesserung"];
	} else {
		$error = true;
	}
	
	$alter = '';
	if (!empty($_POST["alter"])){
		$alter = $_POST["alter"];
	} else {
		$error = true;
	}
	
	$geschlecht = '';
	if (!empty($_POST["geschlecht"])){
		$geschlecht = $_POST["geschlecht"];
	} else {
		$error = true;
	}
	
	$answer = array(0, $rolle, $spass, $sozial, $outdoor, $cam, $motviation, $erfahrung, $verbesserung, $alter, $geschlecht);
		
	require_once './inc/logic/survey.php';
	$survey = new Survey();
	$ratingsSaved = false;
	$savingConfirm = true;
	
	for ($i=2; $i<11; $i++) {
	
		$ratingsSaved = $survey -> saveRatings($i, $answer[$i], $rolle); 
		if($ratingsSaved != true) {
			$savingConfirm = false;
		}
	
	}
	
	if($savingConfirm == true && $error != true) {
		$htmlTemplate['content'] .= '<br><p class="successMsg">Vielen Dank. Ihre Daten wurden erfolgreich gespeichert.</p>
		<script type="text/javascript">
		$(function() {

				$("#privacyText").hide();
			
		});</script>';
	} else {
		if ($error == true) {
			$htmlTemplate['content'] .= '<br><p class="failedMsg">Sie haben nicht alle Felder ausgef&uuml;llt. Bitte holen Sie das nach und speichern Sie dann Ihre Daten!</p>';
		} else {
			$htmlTemplate['content'] .= '<br><p class="failedMsg">Es gab ein Problem beim speichern der Daten. Bitte versuchen Sie es erneut!</p>';
		}
		$htmlTemplate['content'] .= '<script type="text/javascript">
		$(function() {

				$("#privacyText").hide();
				$("#mainSurvey").show();
			
		});</script>';
	}
	
}

$html->createHTMLtemplate($htmlTemplate['title'], $htmlTemplate['description'], $htmlTemplate['active'], $htmlTemplate['content']);
 