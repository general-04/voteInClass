  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      white-space: wrap;
      overflow: hiddent;
    }
    .tiltle-fst {
      text-align: center;
    }
    .report {
      display: flex;
      flex-flow: column;
      align-items: center;
      justify-content: center;
      min-height: 80vh;
      margin-top: 30px;
      /*background: gray; */
      padding: 8px;
      max-width: 750px; 
      width: 100%;
    }
    .my-2{
      margin-left: 2px;
      margin-right: 2px;
    }
    .tiltle-fst{
      margin-bottom: 25px;
    }
    .container {
      max-width: 750px;
      width: 100%;
    }
    .section {
      margin-top: 20px;
      text-align: center;
    }
    .date {
     white-space: nowrap;
    }
    .btn-idc {
     height: 20px;
     padding-bottom: 25px;   
    }

  </style>

  <div class="container">
    <div class="report">
      <div class="tiltle-fst">
           <h1><b>สารบัญ</b></h1>
<hr class="text-dark">
</div>
<div class="subject d-flex justify-content-between w-100 my-3">
<div>
 <h5> <b>เรื่อง</b></h5>
  </div>
<div>
 <h5> <b>หน้า</b></h5>
</div>
</div>
<div class="introduction d-flex justify-content-between w-100">
 <div>
<p>คำนำ</p>
  </div>
<div>
<a href="?moduleReport=introduction" class="btn btn-secondary  btn-idc">
ที่นี้&nbsp;<i class="fa-sharp fa-solid fa-location-exclamation"></i>
</a>
</div>
</div>
<div class="w-100 d-flex my-1">สารบัญ</div>
<div class="subData d-flex justify-content-between w-100">
 <div>
<p>เรื่อง เพื่อนของฉันเป็นเกย์</p>
  </div>
<div>
<a href="?moduleReport=subData" class="btn btn-secondary btn-idc">
ที่นี้&nbsp;<i class="fa-sharp fa-solid fa-location-exclamation"></i>
</a>
</div>
</div>

  </div>
<div class="d-flex justify-content-between align-items-center">
    <div class="text-start mx-2">
        <a href="?moduleReport=introduction" class="btn btn-primary my-3">
            ย้อนกลับ&nbsp;<i class="fa-solid fa-left"></i>
        </a>
    </div>
    <div class="d-flex justify-content-end mx-2 gap-3">
        <a href="vote/?route=reply" class="btn btn-primary my-3">
            ดูผลโหวต&nbsp;<i class="fa-solid fa-location-question"></i>
        </a>
        <a href="?moduleReport=subData" class="btn btn-primary my-3">
            หน้าถัดไป&nbsp;<i class="fa-solid fa-right"></i>
        </a>
    </div>
</div>
</div>