<?php
require 'connect.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
 $num = $_POST["number"];

 if(isset($num) && !empty($num)){
   $sql = "SELECT * FROM students WHERE student_code = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(1,$num,PDO::PARAM_INT);
   $stmt->execute();
   $dataFetch = $stmt->fetch(PDO::FETCH_OBJ);

    if($dataFetch){
     $response = [
      "status" => true,
      "name" => $dataFetch->name,
      "section" => $dataFetch->section,
      "class" => $dataFetch->class,
      "student_code" => $dataFetch->student_code,
      "replyVoted" => $dataFetch->voted,
      "msg" => "successful"
];
    } else {
 $response = [
  "status" => false,
  "msg" => "ไม่พบข้อมูล"
];
}
 } else {
 $response = [
  "status" => false,
  "msg" => "ว่างเปล่า?"
];
}

} else {
 $response = [
  "status" => false,
  "msg" => "only method post"
];
}
echo json_encode($response);
?>