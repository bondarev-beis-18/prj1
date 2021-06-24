<?php

$sum1=0;
$sum2=0;
for ($i=0; $i<20; $i++)
{
$arr[$i]=rand(20,65);
if ($i%2==0)
	$sum2+=$arr[$i];
else
	$sum1+=$arr[$i];
}
$razn=$sum1-$sum2;


?>