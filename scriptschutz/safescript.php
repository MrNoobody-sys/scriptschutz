<?php
		
		$ScriptToken[1]	=	'9uWiit4bCTsajxT!!bUi.DOz3g6sgNTHyMA!';	// Geheimer Token

		//$KundenDomain[1]	=	$_SERVER['SERVER_NAME'];	// Kundendomain
		$Token[1]			=	''.$KundenDomain[1].''.$ScriptToken[1].'';
		$Token[1]			=	md5($Token[1]);
		$html = implode ('', file ('http://localhost/sebastian/scriptschutz/scriptcheck.php?token='.$Token[1].''));

		
if($html == 1){
	echo 'Lizenz ist gültig';
}		
else{
	echo 'Lizenz ist ungültig';
}
