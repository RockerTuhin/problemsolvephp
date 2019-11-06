<?php
$array = array("kani","yuvi","raja","kani","mahi","yuvi") ;
$unique_array = array(); // unique array
$duplicate_array = array(); // duplicate array
foreach ($array as $key=>$value){
  if(!in_array($value,$unique_array)){
       $unique_array[$key] = $value;
  }else{
     $duplicate_array[$key] = $value;
  }
  }
  echo "unique values are:-<br/>";
  echo "<pre/>";print_r($unique_array);

  echo "duplicate values are:-<br/>";
  echo "<pre/>";print_r($duplicate_array);

?>