//auteur:jlr. Ce script est libre de droits pour toute utilisation non commerciale
//à condition de ne pas enlever les sigles JLR avec les liens vers mon site www.progvbjlr.net
	
	function init()
	{
		Quest = new Array() 
		for (var idx = 1; idx < 21; idx++)//indiquer ici le nombre de questions par cession + 1 
			{ 
				Quest[idx] = Math.random() 
				Quest[idx] = Quest[idx] * 60//indiquer ici le nombre total de questions
				Quest[idx] = Math.ceil(Quest[idx]) 
				for (var j = 1; j < idx; j++) 
				{ 
				 if (Quest[idx] == Quest[j]) 
					{ 
						Quest[idx] = Math.random() 
						Quest[idx] = Quest[idx] * 60//indiquer ici le nombre total de questions 
						Quest[idx] = Math.ceil(Quest[idx]) 
						j = -1 
					} 
				} 
			}
	}
	
	function initq(iRows,iCols) 
	{ 
		var i; 
		var j; 
		   var a = new Array(iRows); 
		   for (i=0; i < iRows; i++) 
		   { 
			   a[i] = new Array(iCols); 
			   for (j=0; j < iCols; j++) 
			   { 
				   a[i][j] = ""; 
			   } 
		   } 
		   return(a);
		   
						 
	}
	
	var questions = initq(61,8);
	questions[1][1] = "Combien y a-t-il de pays en Afrique (en incluant les archipels) ?"
	questions[1][2] = "54"
	questions[1][3] = "68"
	questions[1][4] = "81"
	/*questions[1][5] = "un koala"*/
	questions[1][5] = "A"
	questions[1][6] = "54"
	questions[2][1] = "Quelle est la religion dominante en Afrique ?"
	questions[2][2] = "L'Islam"
	questions[2][3] = "Le Christianisme"
	questions[2][4] = "Les réligions tribales d'Afrique"
	/*questions[2][5] = "le Mausolée"*/
	questions[2][5] = "A"
	questions[2][6] = "L'Islam"
	questions[3][1] = "Dans quel pays se situe le Kilimandjaro ?"
	questions[3][2] = "Botswana"
	questions[3][3] = "Tanzanie"
	questions[3][4] = "Namibie"
	/*questions[3][5] = "Louis Pasteur"*/
	questions[3][5] = "B"
	questions[3][6] = "Tanzanie"
	questions[4][1] = "À quel pays sont rattachées les îles Canaries ?"
	questions[4][2] = "Espagne"
	questions[4][3] = "Royaume-Uni"
	questions[4][4] = "Aucun, ces îles forment un état indépendant"
	/*questions[4][5] = "Mars"*/
	questions[4][5] = "A"
	questions[4][6] = "Espagne"
	questions[5][1] = "Quelle est la capitale de l’Éthiopie ?"
	questions[5][2] = "Nairobi"
	questions[5][3] = "Addis-Abeba"
	questions[5][4] = "Kigali"
	/*questions[5][5] = "50m/sec"*/
	questions[5][5] = "B"
	questions[5][6] = "Addis-Abeba"
	questions[6][1] = "Quel est le classement du continent africain par rapport aux autres continents, en terme de population ?"
	questions[6][2] = "1er"
	questions[6][3] = "2eme"
	questions[6][4] = "3eme"
	/*questions[6][5] = "Uranus"*/
	questions[6][5] = "B"
	questions[6][6] = "2eme"
	questions[7][1] = "Dans quel pays se situe le cap de Bonne-Espérance ?"
	questions[7][2] = "Cap-vert"
	questions[7][3] = "Côte d'Ivoire"
	questions[7][4] = "Afrique du Sud"
	/*questions[7][5] = "Goscinny"*/
	questions[7][5] = "C"
	questions[7][6] = "Afrique du Sud"
	questions[8][1] = "Quelle est la langue officielle du Sénégal ?"
	questions[8][2] = "Le sénégalais"
	questions[8][3] = "L'anglais"
	questions[8][4] = "Le français"
	/*questions[8][5] = "la masse"*/
	questions[8][5] = "C"
	questions[8][6] = "Le français"
	questions[9][1] = "À quel pays sont rattachées les Seychelles ?"
	questions[9][2] = "Espagne"
	questions[9][3] = "Royaume-Uni"
	questions[9][4] = "Aucun, ces îles forment un état indépendant"
	/*questions[9][5] = "Helsinki"*/
	questions[9][5] = "C"
	questions[9][6] = "Aucun, ces îles forment un état indépendant"
	questions[10][1] = "Combien y a-t-il de langues vivantes sur le continent africain ?"
	questions[10][2] = "500"
	questions[10][3] = "1000"
	questions[10][4] = "2000"
	/*questions[10][5] = "la Seine"*/
	questions[10][5] = "C"
	questions[10][6] = "2000"
	questions[11][1] = "Dans quels pays se situent les chutes Victoria ?"
	questions[11][2] = "Kenya et Tanzanie"
	questions[11][3] = "Mozambique et Malawi"
	questions[11][4] = "Zambie et Zimbabwe"
	/*questions[11][5] = "Alexander Wood"*/
	questions[11][5] = "C"
	questions[11][6] = "Zambie et Zimbabwe"
	questions[12][1] = "Quel est le point culminant de l’Afrique ?"
	questions[12][2] = "Le Kilimandjaro"
	questions[12][3] = "Le mont Meru"
	questions[12][4] = "Le mont Kenya"
	/*questions[12][5] = "800"*/
	questions[12][5] = "A"
	questions[12][6] = "Le Kilimandjaro"
	questions[13][1] = "Quelle est la monnaie du Cameroun ?"
	questions[13][2] = "L'euro"
	questions[13][3] = "Le franc CFA"
	questions[13][4] = "Le dollars camerounais"
	/*questions[13][5] = "blatère"*/
	questions[13][5] = "B"
	questions[13][6] = "Le franc CFA"
	questions[14][1] = "Quelle est la capitale de l’Égypte ?"
	questions[14][2] = "Alexandrie"
	questions[14][3] = "Louxor"
	questions[14][4] = "Le Caire"
	/*questions[14][5] = "Ramsès II"*/
	questions[14][5] = "C"
	questions[14][6] = "Le Caire"
	questions[15][1] = "À quel pays est rattachée l’île de La Réunion ?"
	questions[15][2] = "France"
	questions[15][3] = "Royaume-Uni"
	questions[15][4] = "Aucun, ces îles forment un état indépendant"
	/*questions[15][5] = "estive"*/
	questions[15][5] = "A"
	questions[15][6] = "France"
	questions[16][1] = "Quelle est sa superficie de la Republique Démocratique du Congo (RDC) ?"
	questions[16][2] = "3123000 km²"
	questions[16][3] = "2345000 km²"
	questions[16][4] = "2567000 km²"
	/*questions[16][5] = "3m"*/
	questions[16][5] = "B"
	questions[16][6] = "2345000 km²"
	questions[17][1] = "Quelle est la capitale de la République Démocratique du Congo (RDC) ?"
	questions[17][2] = "Kissagani"
	questions[17][3] = "Kalemie"
	questions[17][4] = "Kinshasa"
	/*questions[17][5] = "une pierre précieuse"*/
	questions[17][5] = "C"
	questions[17][6] = "Kinshasa"
	questions[18][1] = "Quelle est la devise nationale de la République Démocratique du Congo (RDC) ?"
	questions[18][2] = "L'unité dans la diversité"
	questions[18][3] = "Justice, Paix et Travail"
	questions[18][4] = "Unité, Liberté, Travail"
	/*questions[18][5] = "de gaz carbonique"*/
	questions[18][5] = "B"
	questions[18][6] = "Justice, Paix et Travail"
	questions[19][1] = "Quelle est la langue officielle de la République Démocratique du Congo (RDC) "
	questions[19][2] = "Le français"
	questions[19][3] = "L'anglais"
	questions[19][4] = "L'italien"
	/*questions[19][5] = "chrysanthème"*/
	questions[19][5] = "A"
	questions[19][6] = "Le français"
	questions[20][1] = "Quelle est la monnaie de la République Démocratique du Congo (RDC) "
	questions[20][2] = "Le shilling congolais"
	questions[20][3] = "Le livre congolais"
	questions[20][4] = "Le franc congolais"
	/*questions[20][5] = "d'Azov"*/
	questions[20][5] = "C"
	questions[20][6] = "Le franc congolais"
	questions[21][1] = "Quel est le volcan le plus actif de la République Démocratique du Congo et de toute l'Afrique ?"
	questions[21][2] = "Karisimbi"
	questions[21][3] = "Visoke"
	questions[21][4] = "Nyamuragira"
	/*questions[21][5] = "une transformation"*/
	questions[21][5] = "C"
	questions[21][6] = "Nyamuragira"
	questions[22][1] = "Quel océan borde les côtes de la République Démocratique du Congo ?"
	questions[22][2] = "L'océan Indien"
	questions[22][3] = "L'océan Atlantique"
	questions[22][4] = "L'océan Pacifique"
	/*questions[22][5] = "station-service"*/
	questions[22][5] = "B"
	questions[22][6] = "L'océan Atlantique"
	questions[23][1] = "En combien de provinces est divisé la République Démocratique du Congo ? (en 2009)"
	questions[23][2] = "8 provinces"
	questions[23][3] = "14 provinces"
	questions[23][4] = "11 provinces"
	/*questions[23][5] = "Shakespeare"*/
	questions[23][5] = "C"
	questions[23][6] = "11 provinces"
	questions[24][1] = "A quelle date la République Démocratique du Congo a-t-il obtenu son indépendance ?"
	questions[24][2] = "30 Juin 1960"
	questions[24][3] = "30 mai 1962"
	questions[24][4] = "30 Juillet 1958"
	/*questions[24][5] = "2 angles droits"*/
	questions[24][5] = "A"
	questions[24][6] = "30 Juin 1960"
	questions[25][1] = "Dans quelle région d'Afrique est situé la République Démocratique du Congo ?"
	questions[25][2] = "Afrique central"
	questions[25][3] = "Afrique de l'est"
	questions[25][4] = "Afrique australe"
	/*questions[25][5] = "2112"*/
	questions[25][5] = "A"
	questions[25][6] = "Afrique centrale"
	questions[26][1] = "Quelle est l'année de l'accession à l'indépendance du Congo Brazzaville ?"
	questions[26][2] = "1939"
	questions[26][3] = "1960"
	questions[26][4] = "1969"
	/*questions[26][5] = "le fennec"*/
	questions[26][5] = "B"
	questions[26][6] = "1960"
	questions[27][1] = "Quelle est la population actuelle (2010) du Congo Brazzaville ?"
	questions[27][2] = "3 millions"
	questions[27][3] = "4 millions"
	questions[27][4] = "5 millions"
	/*questions[27][5] = "Cayenne"*/
	questions[27][5] = "B"
	questions[27][6] = "4 millions"
	questions[28][1] = "Quelle est la superficie du Congo Brazzaville ?"
	questions[28][2] = "3420000 km²"
	questions[28][3] = "553000 km&"
	questions[28][4] = "817000 km&"
	/*questions[28][5] = "le conduit auriculaire"*/
	questions[28][5] = "A"
	questions[28][6] = "342000 km²"
	questions[29][1] = "Quel est le montant du PIB en us$ en 2009 du Congo Brazzaville ?"
	questions[29][2] = "Us$ 12 billions"
	questions[29][3] = "Us$ 16 billions"
	questions[29][4] = "Us$ 20 billions"
	/*questions[29][5] = "irracible"*/
	questions[29][5] = "B"
	questions[29][6] = "Us$ 16 billions"
	questions[30][1] = "Quel est l'age moyen de la population congolaise ?"
	questions[30][2] = "54 ans"
	questions[30][3] = "60 ans"
	questions[30][4] = "64 ans"
	/*questions[30][5] = "Livingstone"*/
	questions[30][5] = "A"
	questions[30][6] = "54 ans"
	questions[31][1] = "Quelle est la devise du Congo Brazzaville ?"
	questions[31][2] = "Unité, Egalité, Progrès"
	questions[31][3] = "Unité, Travail, Progrès"
	questions[31][4] = "Liberté, Travail, Progrès"
	/*questions[31][5] = "jaune"*/
	questions[31][5] = "B"
	questions[31][6] = "Unité, Travail, Progrès"
	questions[32][1] = "Quel est le vaccin obligatoire pour partir au Congo Brazzaville ?"
	questions[32][2] = "Tétanos"
	questions[32][3] = "Fièvre Tiphoïde"
	questions[32][4] = "Fièvre jaune"
	/*questions[32][5] = "7"*/
	questions[32][5] = "C"
	questions[32][6] = "Fièvre jaune"
	questions[33][1] = "Quel est le décalage horaire par rapport à Paris ?"
	questions[33][2] = "Même heure, hormis à l'heure d'été +1h"
	questions[33][3] = "+1h toute l'année"
	questions[33][4] = "+2h toute l'année"
	/*questions[33][5] = "Louis Pasteur"*/
	questions[33][5] = "A"
	questions[33][6] = "Même heure, hormis à l'heure d'été +1h"
	questions[34][1] = "Quel est le taux d'alphabétisation au Congo Brazzaville ?"
	questions[34][2] = "94,2%"
	questions[34][3] = "82,8%"
	questions[34][4] = "73,7%"
	/*questions[34][5] = "Neptune"*/
	questions[34][5] = "B"
	questions[34][6] = "82,8%"
	questions[35][1] = "Quelle est la langue officielle du Congo Brazzaville?"
	questions[35][2] = "L'anglais"
	questions[35][3] = "Le français"
	questions[35][4] = "L'espagnol"
	/*questions[35][5] = "Einstein"*/
	questions[35][5] = "B"
	questions[35][6] = "Le français"
	questions[36][1] = "Quelle est la monnaie du Congo Brazzaville ?"
	questions[36][2] = "Le franc CFA"
	questions[36][3] = "L'euros"
	questions[36][4] = "Le dinar"
	/*questions[36][5] = "Uranus"*/
	questions[36][5] = "A"
	questions[36][6] = "Le franc CFA"
	questions[37][1] = "Quelle est la congrégation religieuse fondatrice du complexe scolaire Javouhey à Brazzaville ?"
	questions[37][2] = "Les filles de la charité"
	questions[37][3] = "Saint-Joseph de Cluny"
	questions[37][4] = "Les soeurs dominicaines"
	/*questions[37][5] = "Roches"*/
	questions[37][5] = "B"
	questions[37][6] = "Saint-Joseph de Cluny"
	questions[38][1] = "Le Cameroun se trouve en..."
	questions[38][2] = "Europe"
	questions[38][3] = "Afrique"
	questions[38][4] = "Asie"
	/*questions[38][5] = "Vienne"*/
	questions[38][5] = "B"
	questions[38][6] = "Afrique"
	questions[39][1] = "Quelle est la capitale du Cameroun ?"
	questions[39][2] = "Yaoundé"
	questions[39][3] = "Douala"
	questions[39][4] = "Abuja"
	/*questions[39][5] = "Ladoga"*/
	questions[39][5] = "A"
	questions[39][6] = "Yaoundé"
	questions[40][1] = "Le Cameroun est une..."
	questions[40][2] = "Monarchie"
	questions[40][3] = "Dictature"
	questions[40][4] = "République"
	/*questions[40][5] = "Natacha Regnier"*/
	questions[40][5] = "C"
	questions[40][6] = "République"
	questions[41][1] = "De quelle couleur est l'étoile sur le drapeau du Cameroun ?"
	questions[41][2] = "Jaune"
	questions[41][3] = "Vert"
	questions[41][4] = "Rouge"
	/*questions[41][5] = "1815"*/
	questions[41][5] = "A"
	questions[41][6] = "Jaune"
	questions[42][1] = "Quelle est la monnaie du Cameroun ?"
	questions[42][2] = "Le Metical"
	questions[42][3] = "Le Naira"
	questions[42][4] = "Le franc CFA"
	/*questions[42][5] = "1968"*/
	questions[42][5] = "C"
	questions[42][6] = "Le Franc CFA"
	questions[43][1] = "Quelle est, environ, la superficie du Cameroun ?"
	questions[43][2] = "275000 km²"
	questions[43][3] = "475000 km²"
	questions[43][4] = "675000 km²"
	/*questions[43][5] = "en Chine"*/
	questions[43][5] = "B"
	questions[43][6] = "475000 km²"
	questions[44][1] = "Quelle est, environ, la population totale du Cameroun ?"
	questions[44][2] = "9 millions d'habitants"
	questions[44][3] = "19 millions d'habitants"
	questions[44][4] = "129 millions d'habitants"
	/*questions[44][5] = "52 av JC"*/
	questions[44][5] = "B"
	questions[44][6] = "19 millions d'habitants"
	questions[45][1] = "Le Cameroun est bordé par..."
	questions[45][2] = "L'océan Atlantique"
	questions[45][3] = "L'océan Pacifique"
	questions[45][4] = "L'océan Indien"
	/*questions[45][5] = "Nagoya"*/
	questions[45][5] = "A"
	questions[45][6] = "L'océan Atlantique"
	questions[46][1] = "Le mont Cameroun est le point culminant de l'ouest de l'Afrique, mais à combien de mètres culmine-t-il ?"
	questions[46][2] = "2095"
	questions[46][3] = "3095"
	questions[46][4] = "4095"
	/*questions[46][5] = "HO"*/
	questions[46][5] = "C"
	questions[46][6] = "4095"
	questions[47][1] = "De quel pays, le Cameroun a-t-il trouvé son indépendance ?"
	questions[47][2] = "Le Royaume-Uni"
	questions[47][3] = "La France"
	questions[47][4] = "Le Portugal"
	/*questions[47][5] = "A² + AB + B²"*/
	questions[47][5] = "B"
	questions[47][6] = "La France"
	questions[48][1] = "Combien y a-t-il de pays frontaliers avec le Cameroun ?"
	questions[48][2] = "4"
	questions[48][3] = "6"
	questions[48][4] = "8"
	/*questions[48][5] = "La fusée"*/
	questions[48][5] = "C"
	questions[48][6] = "6"
	questions[49][1] = "La deuxieme ville camerounaise est:"
	questions[49][2] = "Yaoundé"
	questions[49][3] = "Douala"
	questions[49][4] = "Ndé"
	/*questions[49][5] = "Magic"*/
	questions[49][5] = "B"
	questions[49][6] = "Yaoundé"
	questions[50][1] = "Le Cameroun connait deux types de climat, le domaine...excepte le climat:"
	questions[50][2] = "Désertique"
	questions[50][3] = "Equatorial"
	questions[50][4] = "Tropical"
	/*questions[50][5] = "L'Ob"*/
	questions[50][5] = "A"
	questions[50][6] = "Désertique"
	questions[51][1] = "Le Cameroun produit:"
	questions[51][2] = "Banane"
	questions[51][3] = "Cuivre"
	questions[51][4] = "Cacao"
	/*questions[51][5] = "CIA"*/
	questions[51][5] = "B"
	questions[51][6] = "Cuivre"
	questions[52][1] = "Le Cameroun devient indépendant en 1960, quel jour exactement ?"
	questions[52][2] = "Le 1er Janvier"
	questions[52][3] = "Le 1er Juin"
	questions[52][4] = "RLe 1er Juillet"
	/*questions[52][5] = "Tony Curtis"*/
	questions[52][5] = "A"
	questions[52][6] = "1er Janvier"
	questions[53][1] = "Le Cameroun est membre de:"
	questions[53][2] = "La CEEAC"
	questions[53][3] = "La SADEC"
	questions[53][4] = "L'ANC"
	/*questions[53][5] = "Priam"*/
	questions[53][5] = "A"
	questions[53][6] = "La CEEAC"
	questions[54][1] = "Le Cameroun partage ses frontières avec les pays suivants, excepté ?"
	questions[54][2] = "L'Ouganda"
	questions[54][3] = "Le Tchad"
	questions[54][4] = "La République du Congo"
	/*questions[54][5] = "Citrouille"*/
	questions[54][5] = "A"
	questions[54][6] = "L'Ouganda"
	questions[55][1] = "Le Tchad est un pays de l'Afrique:"
	questions[55][2] = "Australe"
	questions[55][3] = "Centrale"
	questions[55][4] = "Occidentale"
	/*questions[55][5] = "Ornitorynque"*/
	questions[55][5] = "B"
	questions[55][6] = "Centrale"
	questions[56][1] = "Le Tchad fait ses frontieres avec les pays ci-apres,excepté ?"
	questions[56][2] = "La République Démocratique du Congo (RDC)"
	questions[56][3] = "La Libye"
	questions[56][4] = "Le Niger"
	/*questions[56][5] = "Roses"*/
	questions[56][5] = "A"
	questions[56][6] = "La RDC"
	questions[57][1] = "La capitale du Tchad est:"
	questions[57][2] = "Lagos"
	questions[57][3] = "Niamey"
	questions[57][4] = "Ndjamena"
	/*questions[57][5] = "Le tyranosaure"*/
	questions[57][5] = "C"
	questions[57][6] = "Ndjamena"
	questions[58][1] = "Le Tchad connait un climat:"
	questions[58][2] = "Tropical humide"
	questions[58][3] = "Sahélien"
	questions[58][4] = "Tropical sec"
	/*questions[58][5] = "Du Cameroun"*/
	questions[58][5] = "B"
	questions[58][6] = "Sahélien"
	questions[59][1] = "Les activites dominantes du pays sont:"
	questions[59][2] = "L'agriculture et l'élevage de bétail"
	questions[59][3] = "La production minière et l'agriculture"
	questions[59][4] = "Aucune réponse parmis les réponses"
	/*questions[59][5] = "Fredaine"*/
	questions[59][5] = "A"
	questions[59][6] = "L'agriculture et l'élevage de bétail"
	questions[60][1] = "Le Tchad se trouve en:"
	questions[60][2] = "Amérique"
	questions[60][3] = "Afrique"
	questions[60][4] = "Australie"
	/*questions[60][5] = "Fredaine"*/
	questions[60][5] = "B"
	questions[60][6] = "Afrique"


	function nextQuestion(form)

//mettez ici le nombre de questions posées par jeu (20 est suffisant pour une durée raisonable)

{ 	var quizEnd = eval(20 * 1);//Ne pas éditer ci-dessous excepté les phrases entre "" si vous le désirez

    if(form.questNo.value == quizEnd) {

       form.question.value = "";

       form.choiceA.value = "";

       form.choiceB.value = "";

       form.choiceC.value = "";

       /*form.choiceD.value = "";*/

       form.yourChoice.value = "";

       form.results.value = "Fin du Quiz.  Votre résultat final est indiqué ci-dessous."; } else {

    if(form.questNo.value == "") {form.questNo.value = 1} else {
    
       form.questNo.value = eval(form.questNo.value) + 1;

    }

	var NumAleat = Quest[form.questNo.value];
	
    form.question.value = questions[NumAleat][1];

    form.choiceA.value = questions[NumAleat][2];

    form.choiceB.value = questions[NumAleat][3];

    form.choiceC.value = questions[NumAleat][4];

    /*form.choiceD.value = questions[NumAleat][5];*/

    form.yourChoice.value = "";

    form.results.value = "";

    if(form.myScore.value == "") {form.myScore.value = 0; } else {
                                                  form.myScore.value = form.myScore.value; }

   }

}

	function EvalSound(soundobj) {
	  var thissound= eval("document."+soundobj);
	  thissound.Play();
	}

   function testrep(form) {
      
      var myScore = 0;
      var curve = 0;
	  var pourc = 0
	var NumAleat = Quest[form.questNo.value];

      if(form.results.value != "") {form.results.value = "Désolé, vous ne pouvez donner qu'une seule réponse.  Un click sur ''Question suivante'' pour continuer."; }

      else if(form.yourChoice.value == questions[NumAleat][5]) {
      form.myScore.value = eval(form.myScore.value) + eval(1);
      form.results.value = "Félicitation!  c'est juste.";
	  EvalSound('sound1'); } else {
      
      form.results.value = "Désolé, votre réponse est fausse. La bonne réponse était " + questions[NumAleat][6];
	  EvalSound('sound2');
	  }

		
	   curve = form.myScore.value / form.questNo.value;

	   form.percent.value = parseInt(curve * 100,10);
	   pourc = parseInt(curve * 100,10);
	   
	   if(pourc > 97)  {document.images['cote'].src = "sc1.gif";
			form.cmt.value = "Champion !"; }
	   else if(pourc > 89)  {document.images['cote'].src = "sc1.gif";
			form.cmt.value = "Tres bien !"; }
	   else if(pourc > 69)  {document.images['cote'].src = "sc2.gif";
			form.cmt.value = "Bien !"; }
	   else if(pourc > 49)  {document.images['cote'].src = "sc3.gif";
			form.cmt.value = "Peut mieux faire !"; }
	   else {document.images['cote'].src = "sc4.gif";
			form.cmt.value = "Bof !"; }
   }

	
	function repa(form) {
		if(form.results.value == "")
	{
		form.yourChoice.value = "A";
		form.tda.value = "Votre réponse";}
	}
		
	function repb(form) {
		if(form.results.value == "")
	{
		form.yourChoice.value = "B";
		form.tdb.value = "Votre réponse";}
	}

	function repc(form){ 
		if(form.results.value == "")
	{
		form.yourChoice.value = "C";
		form.tdc.value = "Votre réponse";}
	}

	/*function repd(form){ 
		if(form.results.value == "")
	{
		form.yourChoice.value = "D";
		form.tdd.value = "Votre réponse";}
	}*/

	function clearRep(form)

{
    
    form.tda.value = "";
    form.tdb.value = "";
    form.tdc.value = "";
    /*form.tdd.value = "";*/

}


function clearForm(form)

{
    
    form.questNo.value = "";
    form.question.value = "";
    form.choiceA.value = "";
    form.choiceB.value = "";
    form.choiceC.value = "";
    /*form.choiceD.value = "";*/
    form.yourChoice.value = "";
    form.results.value = "";
    form.myScore.value = "";
    form.percent.value = "";
    form.tda.value = "";
    form.tdb.value = "";
    form.tdc.value = "";
    /*form.tdd.value = "";*/
	form.cmt.value = "";
	document.images['cote'].src = "sc5.gif";
}

	
