<?php

include(__DIR__.'/CArManager.php'); 

$test = new CArManager("Sven");
//$test->setName("kalle");
echo $test->getName();
echo '<br />bib';
echo '<br /><br /><br />'. __DIR__;
echo $test->addToArray();
echo '<br />';
echo $test->bib();
?>
