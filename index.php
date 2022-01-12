<?php
//1
echo addcslashes("Ajourd'hui il fait -1000 degrés", 'A..z');
echo "<br>";

//2
$chaine = "hello world !";
$chaine = ucfirst($chaine);
$chaine = ucwords($chaine);
echo $chaine;
echo "<br>";

//3
$carac = "Salut, j'essaye de mettre 25 mots sur une ligne pour mon exercice, mais j'ai pas trop d'idée, sinon toi comment tu va mon rhey bonjour";
echo str_word_count($carac);

//4
$lol = "Salut tout le monde";



//5
$tableau = ["un", "deux", "trois", "quatre", "cinq"];
$tableau = implode($tableau);
echo "<br>";

//6
$hello = "Salut tout le monde";
$hello = strrev( $hello);
$hello = str_shuffle($hello);
echo $hello;
echo "<br>";

//7
$html = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";
$html = strip_tags($html);
echo $html;
echo "<br>";

//8


//9
$loll = ["Bah ouui"];

for($i=0; $i < count($loll); $i++){
    echo "Taille : $loll";
}
echo "<br>";

//10
$mdr = "Hey dude";
$mdr = str_replace("dude", "World", $mdr);
echo $mdr;
echo "<br>";

//11
$test = "un deux un deux test";
$test = strpos($test, "test");
echo $test;

//12
