<?php

	//arrays

//Numeric Arrays (the values of the array has a numeric key which start from 0)
$social_networks = array('Facebook', 'Linkedin', 'Twitter', 'Whatsapp', 'Shoelace');


//accessing values in a numeric array
echo $social_networks[2].'<br>';
print $social_networks[0].'<br>';

//printing the whole array to see its structure
print_r($social_networks);
echo '<br>';

//adding new values to the array
$social_networks[] = 'daisey';
$social_networks[] = '2go';
print_r($social_networks);

//unset($social_networks[0]);

echo '<br>';

foreach($social_networks as $key => $social_media_name){
	
	echo 'The value at index '.$key.' = '.$social_media_name.'<br>';
	
}

//declaring an empty array
$names = array();
$names[] = 'Victor Ochi';
$names[] = '';
echo '<br>';
print_r($names);
echo '<br>';

///assiociative
$social_networks_2 = array('mark zukerberg'=>'facebook', 'allen blue'=>'linkeden', 'Noah Glass'=>'Twitter');

//accessing values in an associative array
echo $social_networks_2['mark zukerberg'];
echo '<br><br>';

//using loop to access the arrayu value
foreach($social_networks_2 as $k => $value){
	
	echo $k.' founded '.$value.'<br>';
	
}

//adding new value to the array
$social_networks_2['arya stack'] = 'Daisey';
$social_networks_2['Brian Acton'] = 'whatsapp';

print_r($social_networks_2);


//multidimensional
$marks = array( 
	"Chime" => array("physics" =>45,"maths" => 30, "chemistry" => 39), 
	"rita" => array("physics" => 30, "maths" => 32, "chemistry" => 29), 
	"grace" => array("physics" => 31, "maths" => 22, "chemistry" => 39),
	"ifeoma" => array("physics" => 45, "maths" => 50, "chemsitry" => 60)
);
echo '<br>';
//accessing a single in the array
echo $marks['Chime']['chemistry'].'<br>';
echo $marks['grace']['physics'].'<br>';

//adding a new value
$marks['victor']['physics'] = 35;
$marks['victor']['maths'] = 30;
$marks['victor']['chemsitry'] = 45;
print_r($marks);
echo '<br>';
foreach($marks as $key => $course_details){
	
	foreach($course_details as $subjects => $score){
		
		
		echo $key.' scored '.$score.' in  '.$subjects.'<br>';
		
		
	}
	
}
echo '<br>';
//array sum
$a = array(3, 4, 5, 6, 2);
echo array_sum($a);
echo '<br>';
echo '<br>';

$arr = array("orange", "banana");
array_push($arr, "apple", "raspberry");
print_r($arr);
echo '<br>';
echo count($marks['victor']);
echo '<br>';

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
print_r($fruits);
echo '<br>';
rsort($fruits);
print_r($fruits);

//is_array() checks if a variable is an array

if(is_array($fruits)){
	echo '<br>';
	echo "yeah".'<br>';
}


//check if a value is in an array
if(in_array('lemon', $fruits)){
	echo 'it is inside <br>';
	echo array_search('lemon', $fruits);
}


$high_school_names = array(
  'Corner Stone',
  'Command',
  'Elizabeth high school'
);

foreach($high_school_names as $k => $value){
    echo $value;
}


function getCook($cook){
    $name = $cook;
    return $name;
}

print getCook('wuse');

function samicoGet($sam){
    $rocket = $sam;
    return $rocket;
}

?>