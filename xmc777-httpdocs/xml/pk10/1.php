<?php
	$api = "http://a.apiplus.net/newly.do?token=te57947f1f68e0f77k&code=bjpk10";
	$datas = file_get_contents($api);
	$xmlData  = simplexml_load_string($datas);

	$expect = $xmlData->row[0]['expect'];
	$opencode = $xmlData->row[0]['opencode'];
	$opentime = $xmlData->row[0]['opentime'];


	
	header('Content-Type: text/xml;charset=utf8');
	echo '<xml>
		<row expect="'.$expect.'" opencode="'.$opencode.'" opentime="'.str_replace('/','-',$opentime).'"/>
	</xml>';
?>
