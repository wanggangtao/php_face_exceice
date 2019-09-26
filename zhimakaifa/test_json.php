<?php

//$postArray='[{"part":[{"name":"A配件","price":"30","num":"20"},{"name":"配件B","price":"30","num":"20"},{"name":"配件B","price":"30","num":"20"}],"type":"1234","date":"2012-10-30 17:6:9","user":"000000000000000","time_stamp":1351587969902}]';
$postArray ='[{"part":[{"name":"A配件","price":"30","num":"20"},{"name":"配件B","price":"30","num":"20"},{"name":"配件B","price":"30","num":"20"}],"hand_money":200,"pay_style":1,"id":1,"remark":"芝麻","resove_style":1234,"content":"2012-10-30 17:6:9","picture":"000000000000000","period":1351587969902}]';
foreach($postArray as $key=>$value)
{
    print_r($key);

}



//var_dump($postArray);
////var_dump($postArray["data"]);
//$de_json = json_decode($postArray,TRUE,JSON_UNESCAPED_UNICODE);
//var_dump($de_json);
//$count_json = count($de_json);
//var_dump($count_json);
//$count_json = count($de_json);
//var_dump($count_json);
//$message = $de_json[0]['part'];
//var_dump($message);
//$count = count($message);
//var_dump($count);
//for ($i = 0; $i < $count; $i++)
//{
//    var_dump($i);
//    var_dump($message[$i]["name"]);
//    var_dump($message[$i]["price"]);
//    var_dump($message[$i]["num"]);
//}


//for ($i = 0; $i < $count_json; $i++)
//{
//     var_dump($de_json);
//
//    $dt_record = $de_json[$i]['date'];
//    var_dump($dt_record);
//    $data_type = $de_json[$i]['type'];
//    var_dump($data_type);
//    $imei = $de_json[$i]['part'];
//    var_dump($imei);
//    $message = $de_json[$i]['part'];
////    $message = json_encode($de_json[$i]['part']);
//    var_dump($message);
//}
//$messages = count($message);
//var_dump($messages);
////var_dump($messages[0]["name"]);
//
//
//for ($i = 0; $i < $messages; $i++)
//{
//    var_dump($de_json);
//
//    $dt_record = $de_json[$i]['date'];
//    var_dump($dt_record);
//    $data_type = $de_json[$i]['type'];
//    var_dump($data_type);
//    $imei = $de_json[$i]['part'];
//    var_dump($imei);
//    $message = $de_json[$i]['part'];
////    $message = json_encode($de_json[$i]['part']);
//    var_dump($message);
//}
//$messages = count($message);
//var_dump($messages);
////var_dump($messages[0]["name"]);
?>