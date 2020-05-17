<?php
$ary=[];
$ary[0]=10;
$ary[1]="hello";
$ary[]=3.14;
//for($i=0;$i<count($ary);$i++){
//    echo $ary[$i];
//}
//foreach ($ary as $s){
//    echo $s;
//}
$students=[
    "name"=>"hoang trong ha",
    "age"=>19,
    "id"=>1

];
//var_dump($students);
$students["point"]=10;
//var_dump($students);
if($students["point"]>7){
    echo $students["name"];
}else{
    echo"hoc sinh trung binh";
}
alert();
sendMessage();
sendMessage("hi");
function alert(){
    echo "Thong bao khan cap";
}
function sendMessage($msg="haha"){
    echo $msg;
}