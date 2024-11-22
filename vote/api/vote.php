<?php
require 'connect.php';
$method = $_SERVER["REQUEST_METHOD"];
 if($method === "POST"){
   $data = json_decode(file_get_contents("php://input"), true);
   $vote = $data["vote"];
   $stdCode = $data["student_code"];
  if(isset($stdCode, $vote) && in_array($vote,["yes","no","abstain"])){
    $sql_check = "SELECT student_code, voted FROM students WHERE student_code = ?";
    $stmtCh = $conn->prepare($sql_check);
    $stmtCh->bindParam(1,$stdCode,PDO::PARAM_INT);
    $stmtCh->execute();
    $dataFetch = $stmtCh->fetch(PDO::FETCH_OBJ);
    $res = ["yes","no","abstain"];

    if($dataFetch){
     if(!empty($dataFetch->voted)){
     $response = ["status" => false, "msg" => "ไม่สามารถโหวตซ้ำได้"];
    
     } else {

     $sql = "UPDATE vote SET $vote = $vote + 1";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     
     $sql_update = "UPDATE students SET voted = ? WHERE student_code = ?";
     $stmtUp = $conn->prepare($sql_update);
     $stmtUp->bindParam(1,$vote,PDO::PARAM_STR);
     $stmtUp->bindParam(2,$stdCode,PDO::PARAM_INT);
     $stmtUp->execute();
     $response = [
                "status" => true,
                "msg" => "คุณโหวตแล้ว",
                "vote" => $dataFetch->voted
                 ];
     }
    } else {
     $response = ["status" => false, "msg" => "ไม่พบข้อมูล"];
    }

  } else {
   $response = ["status" => false, "msg" => "ไม่ได้เลือก"];
  }
 } else {
  $response = ["status" => false, "msg" => "only method POST"];
 }
echo json_encode($response);
?>