<h1 style='background-color:red'>EVEN NUMBER</h1>
<?php
for($n=1;$n<=100; $n++ ){
    if($n%2==0){
        echo $n." , ";
    }
}
?>
<hr>
<hr>
<h1 style='background-color:pink'>ODD NUMBER</h1>
<?php
for($odd=1;$odd<=100; $odd++ ){
    if($odd%2!=0){
        echo $odd." , ";
    }
}
?>
<hr>
<hr>
<h1 style='background-color:yellow'>PRIME NUMBER</h1>
<?php

for($i=1; $i<100;$i++){
    $is_prime =true;
    for($j=2;$j<($i/2)+1;$j++){
        if($i%$j==0){
            $is_prime =false;
            break;
        }
    }
    if($is_prime==true){
        echo $i." ,";
        
        
    }
    
}
?>
<hr>
<hr>
<h1 style='background-color:orange'>FIBONACCI SERIES</h1>
<?php
$a = 0;
echo $a.' , ';
$b=1;
echo $b.' , ';
$c=$a+$b;
echo $c.' , ';
for($i=1;$i<8;$i++){
    $a=$b;
    $b=$c;
    $c=$a+$b;
    echo $c.' , ';
}

?>