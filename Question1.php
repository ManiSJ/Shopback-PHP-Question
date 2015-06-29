<!DOCTYPE HTML>
<html>
<head></head>
<body>
<?php 

$balls=[];

for($i=0;$i<=100000;$i++)
{
$balls[$i]=$i;  // creating an array of balls numbered from 0-100000
}

$Firsttimeballs=[];
$Firsttimeballs=$balls;
rsort($Firsttimeballs); //reverse the balls position in array.

if(!empty($_POST["number"]))  //getting user input on number of times to reverse the position as stated in question.If no input 50 is choosen which is the provided test case number
{
$n=$_POST["number"];
}
else
{
$n=50;
}

$k=$_POST["position"];

$rballs=[];
$rballs=$Firsttimeballs;  //First time reversing from position 0.This is same as sorting previous array(Firsttimeballs).
sort($rballs);

$total = count($rballs)-1;
$a=$total;

$previousarr=$rballs;

for($x=2;$x<=$n;$x++)		// second time till provided number of times to reverse the position
{
$y=$x-1;
for($y;$y<=$a;$y++)			//Reversing from position 1 onwards.
{
$rballs[$y]=$previousarr[$total];
$total=$total-1;
}
$total=$a;
$previousarr=$rballs;
} 

$j=array_search($k,$previousarr);
echo "The position of the ball numbered". " $k " ."is: " . " $j";
 
?>
</body>
</html>