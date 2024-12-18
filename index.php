<h1> Hi, My Son!! <index class="php"></h1>

<?php

echo "Hello World";
/** file index.php */
# comment
$myvar = "Hello world";
$myvar = 1;
echo "<br>";
echo "<h1>".$myvar."</h1>";
$x = 1;
function x(){
    global $x;
    $x = 2;
}
x();
echo $x;
echo $x;
echo $x;
echo "<br>";
$x = "B";
$x++;
echo $x;

echo "<br>";
$my_arr = array(1,2,3,4,5,"myindex" => 6, "myindex" =>7);
print_r($my_arr);
echo "<br>";
$my_arr2[] = 2;
$my_arr2[] = 1;
print_r ($my_arr2);

echo "<br>";
if(true){
    echo "true woy!";
} else{
     echo "false";
}

for($i = 0; $i < sizeof($my_arr) - 1;$i++){
    echo $my_arr[$i];
    echo "<br>";
}

?>
<h1><?php echo $myvar; ?></h1>