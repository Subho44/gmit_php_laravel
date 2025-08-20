<?php
$a = 56;
$b = 60;

$sum = $a+$b;
echo "Sum: ".$sum;
echo "<br>";
//how to calculate area of rectangle
$len = 7;
$wid = 8;
$ar = $len*$wid;
echo "Area:" .$ar;
echo "<br>";
//how to calculate tax(10%) on salary

$salary = 50000;
$tax = $salary*0.10;
echo "Tax: ".$tax;
echo "<br>";
//calculate net salary

$salary = 50000;
$tax = $salary*0.10;
$netsal = $salary -$tax;
echo "Net salary: ".$netsal;
echo "<br>";
//factorial number
function factorial($n) {
    $fact = 1;
    for($i=1;$i<=$n;$i++) {
        $fact *=$i;
    }
    return $fact;
}
echo "Factorial of 6: ".factorial(6);
echo "<br>";
//how to check prime number(live task)
$num = 7;
$p = ($num >1) ?
 (!array_filter(range(2,(int)sqrt($num)), fn($i)=> $num % $i == 0 )? "Yes":"no")
 :"no";
echo "$num is  prime? $p";
echo "<br>";
//sum of array use function

function asum($arr) {
    $sum = 0;
    foreach($arr as $x) {
        $sum += $x;
    }
    return $sum;
}
echo "Sum: ".asum([10,20,30,40]);

//how to calculate net salary with tax & bonus
echo "<br>";
//largest number array

echo "Largest number : ".max([6,8,9,56]);
echo "<br>";
//how to remove duplicate values from array
$arr = [1,2,2,3,4,4,5,7,7,8];
$unique = array_unique($arr);
print_r($unique);

?>
