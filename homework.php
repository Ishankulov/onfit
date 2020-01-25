<?php 

$student = [
['Ivanov', 'Petr', 'Vasya'],
['Salomov', 'Payrav', 'Valivich'],
['Fariduni', 'Daler', 'Aziz']
];
 
 function Names($student){

 	for($i=0;$i<3;$i++)
 	{
 		echo $student[$i][0]. " " .$student[$i][1][0]." ".$student[$i][2][0]."<br>";
 	}
 }

 echo Names($student);

 ?>