<?php


function jobsequence($jobList)
{
	$finalArray         = array();
    $nonDependentArray  = array();
    $dependentArray     = array();
    $tempDependentArray = array();
   
   
   }
   
   
function output ($jobs)

{
	$output = jobsequence($jobs);
	print "<pre>";
    print_r($output);
	print "</pre>";
}



$jobArray = array(
				/*array(
					'a' => 'b',
					 'b' => 'c',
					 'c' => 'd',
					 'd' => 'b',
					
				),
				array(
					'a' => '',
					 'b' => 'c',
					 'c' => 'f',
					 'd' => 'a',
					 'e' => '',
					 'f' =>'b',
				),
				
				
				array(
					'a' => '',
					 'b' => 'c',
					 'c' => 'c',
				),
				array(
					 'a' => '',
					 'b' => 'c',
					 'c' => 'f',
					 'd' => 'a',
					 'e' => 'b',
					 'f' =>'',
				),*/
				array(
					'a' => '',
					'b' => 'c',
					'c' => 0
				),
				array(
					'a' => ''
				)
);

foreach($jobArray as $key => $jobArrayvalue){
	print "Scenario $key<br/>";
	output($jobArrayvalue);
}



?>