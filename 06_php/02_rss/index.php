<!doctype html>
<html>
<head>
</head>
<body>
	<?php 
		$a1 = array(

				"title" =>"Des Tunisiens manifestent pour dénoncer l'attaque sanglante",
				"en"=>"en",
				"description"=>"Plusieurs centaines de Tunisiens ont commencé à se rassembler mercredi soir à Tunis pour dénoncer l'attaque au Musée du Bardo.&lt;img width='1' height='1' src='http://rss.lemonde.fr/c/205/f/3050/s/44904fc2/sc/11/mf.gif'",
				"link"=>"http://www.lemonde.fr/afrique/video/2015/03/19/des-tunisiens-manifestent-pour-denoncer-l-attaque-sanglante_4596526_3212.html#xtor=RSS-3208",
				"copyright"=>"Copyright Le Monde.fr",
				"date"=>"Thu, 19 Mar 2015 10:16:44 GMT"

			);;

		$a2 = array(

				"title" =>"Le Salon du livre dans le regard de Micaël",
				"en"=>"en",
				"description"=>"En six dessins à l’humour faussement blasé, l’artiste argentin croque le grand raout parisien des lettres.",
				"link"=>"http://www.lemonde.fr/bande-dessinee/article/2015/03/19/le-salon-du-livre-dans-le-regard-de-micael_4596493_4420272.html#xtor=RSS-3208",
				"copyright"=>"Copyright Le Monde.fr",
				"date"=>"Thu, 19 Mar 2015 10:16:44 GMT"

			);;

		$a3 = array(

				"title" =>"Tunisie : l'un des deux assaillants était surveillé par les services de sécurité",
				"en"=>"en",
				"description"=>"Les deux assaillants s'appelaient Yassine Abidi et Hatem Khachnaoui, affirme Habib Essid, le premier ministre tunisien, qui précise qu'Abidi était « connu des services de sécurité et suivi",
				"link"=>"http://www.lemonde.fr/afrique/article/2015/03/19/tunisie-les-assaillants-ont-ete-identifies_4596469_3212.html#xtor=RSS-3208",
				"copyright"=>"Copyright Le Monde.fr",
				"date"=>"Thu, 19 Mar 2015 10:16:44 GMT"

			);;

		$actualites = array($a1, $a2, $a3);

		function buildTable($actualites){
			$html = '<table border="1">';
			foreach ($actualites as $actualite) {
				$html .= buildRow($actualite);;
			}
    		$html .= '</table>';
    		return $html;
		}

		function buildRow($actualite){
			/*echo "<ul>";;
			echo "<li>".$titre["title"]."<li>";;
			echo "</ul>";;*/
			$html = '<tr>';
			foreach ($actualite as $key => $value) {
				$html .= "<td>".$value."</td>";;
			}
			
    		$html .= '</tr>';
    		return $html;
		}
      	
      	echo buildTable($actualites);;

	?>
</body>
</html>