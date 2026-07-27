<?php

$arr = [9,5 ,1 , 3];
$arr1  = [5 ,"uzair" , 7 ,8];
// echo count($arr);
// array_push($arr , 5);
// array_pop($arr);
// array_shift($arr);
// array_unshift($arr , "uzair");
rsort($arr);
print_r($arr);

echo array_search("uzair" , $arr1);

// $c  = array_merge($arr,$arr1);
// print_r($c);
?>



<!-- count()	        Count elements	                    php $arr=[1,2,3];       echo count($arr); // 3
array_push()	Add element(s) at the end	    php $arr=[1,2];         array_push($arr,3);
array_pop()	Remove the last element	            php $arr=[1,2,3];       array_pop($arr);
array_shift()	Remove the first element	    php $arr=[1,2,3];       array_shift($arr);
array_unshift()	Add element(s) at the beginning	    php $arr=[2,3];         array_unshift($arr,1);
array_merge()	Merge two arrays	            php $a=[1,2]; $b=[3,4]; $c=array_merge($a,$b);
sort()	Sort in ascending order	                    php $arr=[3,1,2];       sort($arr);
rsort()	Sort in descending order	            php $arr=[3,1,2];       rsort($arr);
array_search()	Find the index/key of a value	    php echo array_search("Banana",$fruits); -->