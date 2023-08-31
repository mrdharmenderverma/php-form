<?php 

#https://www.w3schools.com/php/php_ref_array.asp
#Indexed arrays - Arrays with a numeric index
#Associative arrays - Arrays with named keys
#Multidimensional arrays - Arrays containing one or more arrays

/**********Index Array********* */
$cars = array("Volvo", "BMW", "Toyota");
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
  }
/**********End Index Array********* */


/**********Associative  Index Array********* */
#1st Method
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

#2nd Method
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

#vai Loop Method
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }




/**********End Associative   Array********* */


/**********multidimensional array  ********* */
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

#via Loops
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }



  #PHP - Sort Functions For Arrays


#sort() - sort arrays in ascending order
#rsort() - sort arrays in descending order
#asort() - sort associative arrays in ascending order, according to the value
#ksort() - sort associative arrays in ascending order, according to the key
#arsort() - sort associative arrays in descending order, according to the value
#krsort() - sort associative arrays in descending order, according to the key


$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>