<?php
//Welcome to Assignment 4
$Home_work = 'Welcome to the Assignment';
echo $Home_work.' on fourth class.<br><br>';


//Multidimensional Array
$Multi = 'MultiDimensional Array';
echo $Multi.'<br><br>';

$nigerian_states = array(
	'Abia' => array('Governor' => 'Okezie Ikpeazu', 'Capital' => 'Umuahia', 'Region' => 'South-East', 'Deputy Governor' => 'Ude Oko Chukwu'),
	'Akwa Ibom' => array('Governor' => 'Udom Gabriel Emmanuel', 'Capital' => 'Uyo', 'Region' => 'South-South', 'Deputy Governor' => 'Moses Ekpo'),
	'Anambra' => array('Governor' => 'Willie Obiano', 'Capital' => 'Awka', 'Region' => 'South-East', 'Deputy Governor' => 'Dr Nkem Okeke'), 
	'Bayelsa' => array('Governor' => 'Henry Dikson', 'Capital' => 'Yenagoa', 'Region' => 'South-South', 'Deputy Governor' => 'Gboribioghe John Jonah'),
	'Cross River' => array('Governor' => 'Benedict Ayade', 'Capital' => 'Calabar', 'Region' => 'South-South', 'Deputy Governor' => 'Ivara Esu'), 
	'Delta' => array('Governor' => 'Ifeanyi Okowa', 'Capital' => 'Asaba', 'Region' => 'South-South', 'Deputy Governor' => 'Kingsley Otuaro'),
	'Ebonyi' => array('Governor' => 'David Umahi', 'Capital' => 'Abakaliki', 'Region' => 'South-East', 'Deputy Governor' => 'Eric Kelechi Igwe'),
	'Edo' => array('Governor' => 'Godwin Obaseki', 'Capital' => 'Benin', 'Region' => 'South-South', 'Deputy Governor' => 'Philip Shaibu'),
	'Enugu' => array('Governor' => 'Ifeanyi Ugwuanyi', 'Capital' => 'Enugu', 'Region' => 'South-East', 'Deputy Governor' => 'Cecilia Ezeilo'),
	'Imo' => array('Governor' => 'Chukwuemeka Ihedioha', 'Capital' => 'Owerri', 'Region' => 'South-East', 'Deputy Governor' => 'Irona Alphonsus')
);

//accessin the values in the array
echo $nigerian_states['Enugu']['Region'].'<br>';
echo $nigerian_states['Delta']['Capital'].'<br>';
echo $nigerian_states['Edo']['Deputy Governor'].'<br><br>';
print_r($nigerian_states);
echo '<br><br>';

//looping
foreach($nigerian_states as $key => $states){
	foreach($states as $k => $value){
		echo 'The '.$k. ' of '.$key.' state is '.$value.'<br>';
	}
}

echo '<br><br>';
// Array functions

//array_diff(compares the values of two or more arrays and returns the difference)
$f1 = array('mike' => 'tecno', 'ike' => 'infinix', 'maya' => 'samsung');
$f2 = array('chike' => 'gionee', 'dimma' => 'apple', 'victor' => 'infinix', 'buchi' => 'tecno');
$f3 = array_diff($f2,$f1);
print_r($f3);
echo'<br><br>';


//array_combine(creates an array by using the elements from one keys array and one values array)
$name = array('ike', 'ebube', 'jack');
$age = array('45', '35', '40');

$c = array_combine($age,$name);
print_r($c);
echo'<br><br>';

//array_slice(this function returns selected parts of an array)
$b = array('mango', 'guava', 'paw paw', 'apple', 'pineapple', 'orange', 'watermelon', 'cucumber');
print_r(array_slice($b,-3));
echo '<br><br>';


$f = array('chike' => 'gionee', 'dimma' => 'apple', 'victor' => 'infinix', 'buka' => 'tecno');
print_r(array_slice($f,1,3));
echo '<br><br>';

//array_splice(remove elements from an array and replace it with new elements)
$w1 = array('mango', 'guava', 'paw paw', 'apple', 'pineapple', 'orange', 'watermelon', 'cucumber');
$w2 = array('grape', 'avocado pear', 'lime', 'lemon', 'pear', 'banana', 'coconut', 'melon');
array_splice($w1,2,3,$w2);
print_r($w1);
echo '<br><br>';

//array_values(returns all values of an array)
$t = array('name' =>'victor', 'age' => '55', 'country' => 'canada');
print_r(array_values($t));
echo'<br><br>';

//array_change_key_case(changes the keys in array to uppercase and vice versa)
$r = array('chike' => 'gionee', 'dimma' => 'apple', 'victor' => 'infinix', 'buka' => 'tecno');
print_r(array_change_key_case($r,CASE_UPPER));
echo '<br>';
print_r(array_change_key_case($r,CASE_LOWER));
echo '<br><br>';

//Goodbye from Assignment 4
$work = 'Goodbye from the Assignment';
echo $work.' on fourth class';

?>