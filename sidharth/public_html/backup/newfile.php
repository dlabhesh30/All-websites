<!DOCTYPE html>
<html>
<body>
// you can see me here

<h1>i can use the features of html too</h1>

<?php
// you can only see me here that means i am a comment
# yeah, me too
/*
 whose the daddy?
*/
// php keywords are not case sensitive, so all of the following will work fine

ECHO "Hello world<br>";
echO  "Hello world";
echo "Hello World!<br><br>";

// <br> next line, goes to teh next line . 
//if we use \n inside quotes it wont go to next line
// but variables are case senstive and cant be used or accessed from a 
// different case. to declare a variable we use $ sign
// in the below cases we will be able to print a b and c in echo a and echo b and echo c
// this is becasue varibles cant be used in echo like that, so they act as a character
// if we give pace and try to print them without "" we will get error
// the first and second echo below will give the desired output. so we have to print 
// variables like that. the last sum will print 10 and wont give any error

$a =10;
echo "value of a is ".$a."<br>"; // will work fine
echo "again a ".$a; // will work fine
echo a; // wont print anything
$b = "name";
echo b; // wont print anything
$c = 10;
echo c; 
echo cc;

$sum = $a + $c; //10 + 10 will be saved in sum
echo "<br>sum is ".$sum; // will work fine

$sum2 = $b + $a;
echo "<br>sum2 is ".$sum2; // will work fine

//local and global variables
// when a variblae is defines outside a function we say they are global and can be 
// accessed from anywhere. local can be accessed within the function
// there is a keyword global which can be used to access global variables from a 
// local scope. lets see
// here mytest wil print 0 because it is unaware of th values of x and y as global
// variables cant be accessed in a finction from outside. and the echo statement from
// outside the function will print nothing in the end because there is no scope of any
// m variable at that line 
// so to resokve the above issues we have to use global keyword
// when function is completed i execution its variables are removed
// to prevent that we use static keyword

$x =10;
$y=5;

function mytest(){
	$m = $x + $y;
	echo "<br>from within function ".$m;
}

mytest();
echo "<br> from outside the function ".$m;

function mytest2(){
	global $x, $y;
	echo "<br> x: ".$x;
	echo "<br> y: ".$y;
	$y = $y + $x;
	static $check = 100;
	echo "<br>from within function ".$y;
}

mytest2();
echo "<br> from outside the function ".$y;
echo "<br> from outside the function ".$check;


mytest2();
echo "<br> from outside the function ".$y;

//echo statement: echo can be used with or without statement and text can contain
// HTML tages too. we can also use , between strings and print in single echo
// we can also include a variable within "" and it will be considered as a varible
// print statement:  it can be used with or without paranthesis. same as echo
// print can be used in more complex logics or cinditions whereas echo cant

echo "hi";
echo ("hi");
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>$txt1</h2>";
echo "Study PHP at $txt2<br>";
echo $x + $y;

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>$txt1</h2>";
print "Study PHP at $txt2<br>";
print $x + $y;

// php variables -
// string : we can use them is single or duble quotes
// integers - An integer data type is a non-decimal number between 
// -2,147,483,648 and 2,147,483,647.
// Rules for integers:
// An integer must have at least one digit
// An integer must not have a decimal point
// An integer can be either positive or negative
// Integers can be specified in three formats: decimal (10-based), 
// hexadecimal (16-based - prefixed with 0x) or 
// octal (8-based - prefixed with 0)
// float -  a number which has a decimal point with it
// boolean  - true por false
// array - can store more than one value
// object - can be an object
// NULL - when no value is assigned to a variable it has NULL value.
// another property of varibales is that once we definr a variblae
// and then we have to set it again it is done in the same way

$string1 = "a";
$string2 = 'q';
echo $string1;
echo $string2;

$int1 = 10;
$int2 = 20;
echo $int1;
echo $int2;

$float1 = 10.2;
echo $float1;
echo "<br>";
$test = $int1 + $float1;
echo "test is $test"; // it will print 20.2

$boolean1 = true;
$boolean2 = false;
echo "<br>value of true is : $boolean1";// print 1 
echo "<br> value of false is : $boolean2";//prints nothing i.e could be null

$cars = array("a","b");
echo "<br>$cars"; // this statement gives an output Array
var_dump($cars); // prints a and b

$p =2;
echo "<br>$p<br>";
 $p=9;
 echo "<br>$p<br>";
 
echo "<br>hi<br>";
$cars = null;
var_dump($cars); // prints NULL

// strings
$b = "sss";
$a;
echo strlen($s);
echo strlen('Hello  '); // prints length of string which is 7


$myfile = fopen("Contacts.txt", "r") or die("Unable to open file!");

echo fgets($myfile);

echo fgets($myfile);
echo fgets($myfile);
echo fgets($myfile);
echo fgets($myfile);
fclose($myfile);


/*echo "kar\nthic";
//or
echo 'kar<br>thic';
//or
echo '<pre>';
echo 'kar\nthic';
echo '</pre>';
// best way
echo nl2br( "kar\nthic");
*/
	?>
</body>
</html>