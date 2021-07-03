<?php

function writeMsg($a) {


if($a>=91 and $a <= 100)
{
	echo "A+";
}
else if($a>=81 and $a <= 90)
{
	echo "A";
}
else if($a>=71 and $a <= 80)
{
	echo "B+";
}
else if($a>=61 and $a <= 70)
{
	echo "B";
}
else if($a>=51 and $a <= 60)
{
	echo "C+";
}
else if($a>=41 and $a <= 50)
{
	echo "C";
}
else if($a>=33 and $a <= 40)
{
	echo "D";
}
else
{
	echo "E";
}

}
$a = 10;
$b = 55;
writeMsg($a);
writeMsg($b)



?>