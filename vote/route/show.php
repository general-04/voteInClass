<?php
require 'api/connect.php';

$rtime = time();
$time = date("Y-m-d H:i:s", $rtime);

$sql_query = "SELECT * FROM vote";
$stmt = $conn->prepare($sql_query);
$stmt->execute();
$dataShow = $stmt->fetch(PDO::FETCH_OBJ);

$votes = [
    'เกย์จริง' => $dataShow->yes,
    'ไม่เกย์' => $dataShow->no,
    'งดออกเสียง' => $dataShow->abstain
];
arsort($votes);

$rank = array_keys($votes);
$first = $votes[$rank[0]];
$sec = $votes[$rank[1]];
$third = $votes[$rank[2]];
?>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    user-select: none;
    font-family: "Noto Sans Thai Looped", sans-serif;
    font-weight: 300;
    font-style: normal;
  }
  body {
    background: #212529;
  }
  .main {
    border-radius: 5px;
    padding: 10px 2px 1px 2px;
  }
  .rankAll {
    display: flex;
    flex-flow: column;
  }
  .rank {
    margin: 15px;
    border-radius: 5px;
    padding: 4px 0px;
    box-shadow: 0 0 3px 2.5px #fff;
  }
  .rank-h1{
   border-bottom: 2px solid rgb(220,53,69);
   border-radius: 5px; 
  }
  .rank-h2{
   border-bottom: 2px solid #ffc107;
   border-radius: 5px; 
  }
  .rank-h3{
   border-bottom: 2px solid #17a2b8;
   border-radius: 5px; 
  }
  .alert-m {
   margin-left: 40px;
   margin-right: 40px;
   white-space: nowrap;
   box-shadow: 0 0 5px 1px #000;
   border-radius: 5px; 
  }
</style>

<div class="container">
  <div class="main my-5 bg-secondary">
    <div class="main-head text-center text-light mb-4">
      <h5 class="py-1 my-2 rounded"><i class="fa-solid fa-calendar-clock"></i> &nbsp; ผลโหวตปัจจุบัน</h5>
  <div class="d-flex alert-m">
   <b class="bg-dark text-light px-2 rounded"><i class="fa-solid fa-megaphone"></i>&nbsp;ประกาศ!</b>
   <marquee>ใครอยากให้เพื่อนโดนโหวตเล่นแบบนี้ติดต่อเรา</marquee>
  </div>
    </div>
    <div class="rankAll">
    
      <div class="rank rank1 bg-dark text-white mb-4">
        <div class="my-2 mx-5 d-flex justify-content-between">
          <h5><i class="fa-solid fa-fire text-danger"></i>&nbsp;อันดับ 1</h5>
          <h5 class="rank-h1"><?php echo $rank[0]; ?></h5> 
        </div>
        <div class="rank-data mx-5">
          <p>จำนวนคนเลือก: <?php echo $first; ?> คน </p>
          <p>วันที่: <?php echo $time; ?> </p>
        </div>
      </div>
 
      <div class="rank rank2 bg-dark text-white mb-4">
        <div class="my-2 mx-5 d-flex justify-content-between">
          <h5><i class="fa-solid fa-award text-warning"></i>&nbsp;อันดับ 2</h5>
          <h5 class="rank-h2"><?php echo $rank[1]; ?></h5> 
        </div>
        <div class="rank-data mx-5">
          <p>จำนวนคนเลือก: <?php echo $sec; ?> คน</p>
          <p>วันที่: <?php echo $time; ?> </p>
        </div>
      </div>
    
      <div class="rank rank3 bg-dark text-white mb-4">
        <div class="my-2 mx-5 d-flex justify-content-between">
          <h5><i class="fa-solid fa-medal text-info"></i>&nbsp;อันดับ 3</h5>
          <h5 class="rank-h3"><?php echo $rank[2]; ?></h5> 
        </div>
        <div class="rank-data mx-5">
          <p>จำนวนคนเลือก: <?php echo $third; ?> คน</p>
          <p>วันที่: <?php echo $time; ?> </p>
        </div>
      </div>
    </div>
  </div>
<div class="text-end">
 <a href="?route=report" class="btn btn-primary"><i class="fa-solid fa-left"></i>&nbsp;ย้อนกลับ</a>
</div>
</div>