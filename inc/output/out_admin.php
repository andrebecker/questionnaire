<?php

// initialize htmltemplate	
require_once './inc/generalClasses/htmltemplate.php';
$html = new HTMLtemplate();	
$htmlTemplate = array();

$htmlTemplate['title'] = 'Admin | Bsc-Projekt';
$htmlTemplate['description'] = 'Bsc-Projekt.';
$htmlTemplate['active'] = 'main';

$htmlTemplate['content'] = '<div class="hgroup"><h1>Umfrageergebnisse</h1></div>';

require_once './inc/logic/survey.php';
$survey = new Survey();
$avgRatingsAll = array();
$avgRatingsDet = array();
$avgRatingsBan = array();

// male is also detective for this statistic and female is also bandit
$countPlayersAll = array();
$countPlayersMale = array();
$countPlayersFemale = array();
	
for ($i=2; $i<11; $i++) {

	if(($i ==  2) || ($i == 3) || ($i == 4) || ($i == 5) || ($i == 6)  || ($i == 7) || ($i == 8) || ($i == 9)) {
	
		$avgRatingPerQuestion = $survey -> showAvgAll($i); 
		array_push($avgRatingsAll, $avgRatingPerQuestion);
		
		$avgRatingPerQuestion = $survey -> showAvgPerRole($i, 'd'); 
		array_push($avgRatingsDet, $avgRatingPerQuestion);
		
		$avgRatingPerQuestion = $survey -> showAvgPerRole($i, 'r'); 
		array_push($avgRatingsBan, $avgRatingPerQuestion);
	
	}
	
	if($i == 10) {
		
		$avgRatingPerQuestion = $survey -> countPlayers('a'); 
		array_push($countPlayersAll, $avgRatingPerQuestion);
		
		$avgRatingPerQuestion = $survey -> countPlayers('m'); 
		array_push($countPlayersMale, $avgRatingPerQuestion);
		
		$avgRatingPerQuestion = $survey -> countPlayers('w'); 
		array_push($countPlayersFemale, $avgRatingPerQuestion);

	}
	
}

$countLenghtOfRatingFive = 0;
$countLenghtOfRatingFive = sizeof($avgRatingsAll[6]);

$htmlTemplate['content'] .= '<div id="mainSurveyResults">
								<div class="category"><div class="subtitle">Fragen zum Spiel</div>
									<table class="adminTable">
									<tr><th>Frage</th><th>Durchschnittsbewertung gesamt</th><th>Durchschnittsbewertung Detektiv</th><th>Durchschnittsbewertung R&auml;uber</th></tr>
									<tr><td>Das Spiel macht Spa&szlig;</td><td>'.$avgRatingsAll[0].'</td><td>'.$avgRatingsDet[0].'</td><td>'.$avgRatingsBan[0].'</td></tr>
									<tr><td>Das Spiel f&ouml;rdert soziale Interaktionen</td><td>'.$avgRatingsAll[1].'</td><td>'.$avgRatingsDet[1].'</td><td>'.$avgRatingsBan[1].'</td></tr>
									<tr><td>Das Spiel f&ouml;rdert Outdoor-Aktivit&auml;ten</td><td>'.$avgRatingsAll[2].'</td><td>'.$avgRatingsDet[2].'</td><td>'.$avgRatingsBan[2].'</td></tr>
									<tr><td>Mir gefällt, wie das Spiel Funktionen wie Kamera oder GPS nutzt</td><td>'.$avgRatingsAll[3].'</td><td>'.$avgRatingsDet[3].'</td><td>'.$avgRatingsBan[3].'</td></tr>
									<tr><td>Ich bin motiviert das Spiel wieder zu spielen</td><td>'.$avgRatingsAll[4].'</td><td>'.$avgRatingsDet[4].'</td><td>'.$avgRatingsBan[4].'</td></tr>
									<tr><td>Ich habe Erfahrung mit Videospielen</td><td>'.$avgRatingsAll[5].'</td><td>'.$avgRatingsDet[5].'</td><td>'.$avgRatingsBan[5].'</td></tr>';
																		
									for ($i=0; $i<$countLenghtOfRatingFive; $i++) {
										$htmlTemplate['content'] .= '<tr><td>Verbesserungsvorschl&auml;ge</td><td>'.$avgRatingsAll[6][$i].'</td><td>';
										if(!empty($avgRatingsDet[6][$i])) {
											$htmlTemplate['content'] .= $avgRatingsDet[6][$i];
										}
										$htmlTemplate['content'] .= '</td><td>';
										
										if(!empty($avgRatingsBan[6][$i])) {
											$htmlTemplate['content'] .= $avgRatingsBan[6][$i];
										}
										$htmlTemplate['content'] .= '</td></tr>';
										
									}

									$htmlTemplate['content'] .= '</table>
								</div>
							
								<div class="category"><div class="subtitle">Demografische Angaben</div>
									<table class="table">
									<tr><td>Durchschnittsalter gesamt</td><td>'.$avgRatingsAll[7].'</td></tr>
									<tr><td>Durchschnittsalter Detektiv</td><td>'.$avgRatingsDet[7].'</td></tr>
									<tr><td>Durchschnittsalter R&auml;uber</td><td>'.$avgRatingsBan[7].'</td></tr>
									<tr><td>Gesamtspielerzahl</td><td>'.$countPlayersAll[0].'</td></tr>
									<tr><td>Anz. M&auml;nnlich</td><td>'.$countPlayersMale[0].'</td></tr>
									<tr><td>Anz. weiblich</td><td>'.$countPlayersFemale[0].'</td></tr>
									</table>
								</div>
								
							</div>';

$htmlTemplate['content'] .= '<script type="text/javascript">
		$(function() {

				$("#mainSurveyResults").show();
			
		});</script>';

$html->createHTMLtemplate($htmlTemplate['title'], $htmlTemplate['description'], $htmlTemplate['active'], $htmlTemplate['content']);
 