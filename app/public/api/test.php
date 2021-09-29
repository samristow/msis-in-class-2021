<?php

$num = 2;
// is number

//dynamic data type

//treated as a string
$foo = $num."To be";
$bar = "or not to be";


echo $foo . " " . $bar ."\n";
// "\n" adds new space? - all white space is treated as blank space in html


// prints out on the same line, there are not extra spaces
echo $num * $num * $num;

// comment
# also a comment

/* multi
line
comment
*/
/*
if (true) {
    echo "True \n";
} else {
    echo "False \n";
}
*/
/*
while (true) {
    break;
}
*/
$arr = [1,1,2,3,5,8];

$arr2 = [
    "first" => "Tom",
    "second" => "Bipin",
    "best" => "DS"
];

echo "<ul>\n";
    //documentation is at php.net
foreach($arr2 as $key => $val) {
    echo "<li>".$key." is ".$val."</li>\n";
}
echo "</ul>\n";
/*
printList($arr);
printList($arr2);
*/

function printList($someArr) {
    echo "<ul>\n";
    foreach($someArr as $key => $val) {
        echo "<li>".$key." is ".$val."<li>\n";
    }
    echo "";
}


    echo json_encode(
        $arr2,
        JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
    );
    
