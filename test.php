
<?php
echo str_word_count("Hello world!");
$txt = "Hello world!";
echo strrev($txt);
echo strpos($txt,"world");
$x = 5;
$y = 10.5;

function osm($d1,$d2)
{
return $d1*$d2;
}
echo osm($x,$y);
 var_dump($x);
 $human = array("osm","brn","mrt");
foreach($human as $yaz)
{
    
    echo $yaz;
}
echo "\nsası..:". count($human);
if($x!=$y)
{
    echo "\nx y ye esit degil\n";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
foreach($age as $k => $k_value) {
echo "Key=" . $k . ", Value=" . $k_value;
echo "\n";

}//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['SERVER_NAME'];
//echo $_SERVER['HTTP_HOST'];
//echo $_SERVER['HTTP_REFERER'];
//echo $_SERVER['HTTP_USER_AGENT'];
//echo $_SERVER['SCRIPT_NAME'];
//  http://www.w3schools.com/php/php_superglobals.asp
?>
