<?php
	
	/******************************************************************************* 
		Experimenteer met strings en pas single & double quotes toe 	
	*******************************************************************************/
	/******************************************************************************* 
		Experimenteer met string met variables met zowel single en double quotes
	*******************************************************************************/

	$singleQuotes = 'single quotes: \'';
	$doubleQuotes = "double quotes: \"";

	echo $singleQuotes . "<br>";
	echo $doubleQuotes . '<br>';

	/******************************************************************************* 
		Pas naast \n nog meer control characters toe 
	*******************************************************************************/
	
	echo "<pre>Tab: \t\t tabbed content</pre><br>";
	echo "\$5\rdollar<br>";

	/******************************************************************************* 
		Pas Heredoc en Nowdoc toe in een bestand 
	*******************************************************************************/
	$here = 'here';
	$now = 'now';
echo <<<WEEK3
	echo $here;
WEEK3;
	echo '<br>';
echo <<<'NOW'
	echo $now;
NOW;
	echo '<br>';
	/******************************************************************************* 
		Pas escaping toe in meerdere strings 
	*******************************************************************************/

	echo '\'Escaping\' strings';
	echo '<br>';
	echo "\"Escaping\" double quotes";
	echo '<br>';
	echo 'Triangle: /\\ ';
	echo '<br>';

	/******************************************************************************* 
		Pas de volgende functies toe: strlen, strtr en beschrijf in comment wat er gebeurd 
	*******************************************************************************/
	echo strlen('The quick brown fox jumps over the lazy dog'); //counts the length of the string
	echo '<br>';
	echo strtr('Fuck', 'u', '*'); //Replaces the string given in the 2nd parameter in the 1st parameter changing it to the string in the 3rd
	echo '<br>';

	/******************************************************************************* 
		Gebruik een string als array; print het middelste karakter van een string, 
		overschrijf deze en print nogmaals 
	*******************************************************************************/

	$string = "123456789";
	$middle = (int) (strlen($string) / 2); //string length /2 to get the middle character
	echo $string[$middle];
	echo '<br>';
	echo strtr($string, $string[$middle], ' '); 
	echo '<br>';

	/******************************************************************************* 
		Vergelijk strings met elkaar, met de == operator en de === operator 
	*******************************************************************************/

	$str = "1234";
	$str2 = 1234;
	 
	if($str == $str2){
	    echo "Same";
	}
	if($str === $str2){
	    echo "Not gonna happen";
	}
	echo '<br>';

	/******************************************************************************* 
		Vergelijk (sub)strings met elkaar met de volgende functies: 
		strcmp, strcasecmp, substr_compare 
	*******************************************************************************/

	$str = "Uppercase Nazi";
	 
	if(strcmp($str, "uppercase Nazi") === 0)
		echo "NEIN!";
	else
		echo "Es Tut Mir Leid";

	echo '<br>';

	if(strcasecmp($str, "uppercase Nazi") === 0)
		echo "Pretty much the same.";
	else
		echo "NEIN!";

	echo '<br>';

	if(substr_compare("Uppercase Nazi", "Nazi", 10) == 0)
		echo "Sehr gut!";
	else
		echo "NEIN!";
	echo '<br>';

	/******************************************************************************* 
		Pas de volgende functies toe: strpos, strstr, stripos, stristr en beschrijf 
		in comment wat er gebeurd. 
	*******************************************************************************/

	$myHouse = "qphdahwdiofhawdhiahkey8sfggqafggoagfsjgkfa";
	$myKey = 'key';
	$mySkeletonKey = 'KeY';
	 
	if(strpos($myHouse, $myKey) !== false){  	//search $myHouse for $myKey and if found
	    echo 'Found my key';		//echo Found
	}
	echo '<br>';

	echo strstr($myHouse, $myKey); //get the part of $myHouse from where $myKey starts
	echo '<br>';
	echo stripos($myHouse, $mySkeletonKey); //get the position of 'key' case insensitive
	echo '<br>';
	echo stristr($myHouse, $mySkeletonKey); //get the part of $myHouse from where $myKey starts case insensitive
	echo '<br>';

	/******************************************************************************* 
		Pas de volgende functies toe: strspn, strcspan, str_replace, substr_replace,
		str_irpleace, met zowel string als arrays. Beschrijf in comment wat er gebeurd. 
	*******************************************************************************/

	$string = 'sdifhphjfpdofdjos';
	$mask = 'abcdefghijklmnopqrstuvwxyz';
	echo strspn($string, $mask); //output: 17, stops counting whenever it hits a character not in the mask?
	echo '<br>';

	$string = 'sdifhphjfp242dofdjos';
	$stringArray = str_split($string);
	$mask = 'abcdefghijklmnopqrstuvwxyz';
	echo strcspn($string, $mask); //output: 17, stops counting whenever it hits a character not in the mask?
	echo '<br>';
	foreach($stringArray as $s)
	{
		echo ',' . strcspn($s, $mask);  //output: 17, stops counting whenever it hits a character not in the mask?
	}
	echo '<br>';

	echo str_replace("14", "2", "8+6=14");  //replace 14 with 2 in the string 8+6=14
	echo '<br>';
	$words = ['Hello', 'World', 'Something'];

	foreach($words as $word)
	{
		str_replace('o', 'x', $word);
		echo $word . ' ';
	}
	echo '<br>';

	echo substr_replace("8+6=", "2", 4); //replace everything from index 4 and up with 2 in the string 8+6=14
	echo '<br>';
	foreach($stringArray as $s)
	{
		echo ',' . substr_replace($s, 's', 'A'); //  
	}
	echo '<br>';


	echo str_ireplace("fourteen", "2", "8+6=FOURTEEN");  //replace 14 with 2 in the string 8+6=14
	echo '<br>';

	/******************************************************************************* 
		Experimenteer met substrings extracting 
	*******************************************************************************/
	$statement = 'We are not alone';
	echo substr($statement, -5);
	echo '<br>';

	/******************************************************************************* 
		Format strings voor meerdere talen, door de setlocale-method toe te passen  
	*******************************************************************************/



	/******************************************************************************* 
		Pas de volgende functies toe: printf, sprintf, fprintf en beschrijf in comment wat er gebeurd 
	*******************************************************************************/

	$n = 123;
	$f = 123.45;
	$s = "A string";
	 
	printf("%d", $n); //prints 123 
	echo '<br>';
	printf("%d", $f); //prints 123
	echo '<br>';
	printf("The string is %s", $s); //output: The string is A string
	echo '<br>';
	printf("%3.3f", $f); //prints 123.450 (example with precision)
	echo '<br>';

	//complex formatting
	function showError($msg, $line, $file){
	    return sprintf("An error occurred in %s on " . "line %d: %s", $file, $line, $msg);
	}
	echo showError("Invalid confibulator", __LINE__, __FILE__);
	echo '<br>';

	$number = 9;
	$str = "Beijing";
	$file = fopen("test.txt","w");
	echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);
	echo '<br>';

	/******************************************************************************* 
		Parse formatted input door de volgende functie toe te passen: sscanf 
	*******************************************************************************/

	$data = '123 456 789';
	$format = '%d %d %d';
	 
	var_dump(sscanf($data, $format));

	/******************************************************************************* 
		Experimenteer nadat je de stappen hebt doorlopen op Regexone met de Perl Compatible Regular Expressions functies binnen PHP: preg_match, preg_match_all, preg_replace. Beschrijf wederom in comments wat er gebeurd. 
	*******************************************************************************/

	$name = "Maurice Waney";
	 
	$regex = "/[a-zA-Z\s]/"; //Simple match
	 
	if(preg_match($regex, $name))
	    //valid name
	 
	$regex = '/^(\w+)\s(\w+)/';
	$matches = array();
	 
	//Match with subpatterns and capture
	if(preg_match($regex, $name, $matches)){
	   var_dump($matches);
	}

?>