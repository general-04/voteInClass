<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta description="รายงาน">
  <title>report</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link href="https://kit-pro.fontawesome.com/releases/v6.3.0/css/pro.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css" >
</head>

<body>
<?php 

$module = $_GET["moduleReport"];
if(isset($module) && !empty($module)){
 if($module === "report"){
 require 'moduleReport/report.php';
} elseif($module === "introduction") {
 require 'moduleReport/introduction.php';
} elseif($module === "contents") {
 require 'moduleReport/contents.php';
} elseif($module === "subData") {
 require 'moduleReport/subData.php';
} else {
 echo "<script> 
window.location.href = '?moduleReport=report'
</script>";
}
} else {
 echo "<script> 
window.location.href = '?moduleReport=report'
</script>";
}

?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>