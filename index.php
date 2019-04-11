<?php

require 'A.php';
require 'B.php';

$ClassB = new B();
$ClassA = new A();


echo 'Call Of Class A=>'.$ClassA->getFamily ();
echo '<br/>';
echo'Call Of Class B=>'. $ClassB->Money ();
echo '<br/>';
echo 'Call Of Class B=>'.$ClassB->Family ();
echo '<br/>';
echo 'Call Of Class B=>'.$ClassB->Remain ();


//    $ClassA = new A();
//echo $ClassA->setFamily ();

