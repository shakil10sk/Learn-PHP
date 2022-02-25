<?php
// inputs = [1,2,3];
// outputs = [[],[1,2],[1],]
// class  Solution{
//     function subsets($nums){

//         for($i = 0; $i < count($nums); $i++ ){
           
//              $new_val = [$i];
//         }
       

//         $all = [[],$new_val];
//         // return $all;
//     }
// }



// $nums = array_map('intval',explode(' ',readline()));
// $nums = [1,2,3];
// $solution = new Solution();
// $output = $solution->subsets($nums);

// $new = array_map(function($array){
//     return '[' . implode(',',$array). ']';
// },$output);

// echo '['.implode(',',$new).']';



$nums = [1,2,3];

// $length = pow(2,count($nums));
// echo $length;

$all = [];

// $all1 = array_chunk($nums,1);
// $all2 = array_chunk($nums,2);
// $all3 = array_chunk($nums,3);

// $all = [
//     $all1,$all2,$all3
// ];
for($i=1; $i <= count($nums); $i++){

    $all[$i-1] = array_chunk($nums,$i);

}
// $all .= $nums;
// $newA = array_values($all);
// $na = array_column($all);
// $val = [0,1,2,3,4,5,6,7];
// $na = array_fill_keys($val,$all);
// $all = [
//     $all1,$all2,$all3
// ];
// $abc = [];
function find($val){
    return $val;
}
// $na = array_walk_recursive($all,"find");
$na = array_map("find",$all);
echo "<pre>";
print_r($na);
echo "<pre>";