<?php

	/* Erstellt einen Token aus Domain die der Kunde eingeben
		muss und einen vorgegebenen Token der später auch im 
		zu sichernen Scirpt eingetragen werden muss, 
		der erstellte Token wird dann gespeichert. */
		
		$KundenDomain	=	'localhost';	// Muss vom Kunden hinterlegt werden
		$ScriptToken	=	'9uWiit4bCTsajxT!!bUi.DOz3g6sgNTHyMA!';	// Muss vom Scriptschreiber generiert werden
		$Token			=	''.$KundenDomain.''.$ScriptToken.'';
		$Token			=	md5($Token);
		
if($_GET['token'] == $Token){

	echo '1';

}else{
}

?> 
