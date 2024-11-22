<style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
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
    }
    .by-who {
      text-align: center;
    }
    .who-by {
      text-align: center;
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
    .who {
      margin-bottom: 25px;
    }
    .section {
      margin-top: 20px;
      text-align: center;
    }
  </style>

  <div class="container">
    <div class="report">
      <div class="tiltle-fst">
           <h1><b>รายงาน</b></h1>
          <hr class="text-dark">
           <div class="title-sec">
             <h2>เรื่อง เพื่อนของฉันเป็นเกย์</h2>
           </div>
      </div>
      <div class="who my-2">
        <h3 class="by-who">เสนอ</h3>
        <h4>นายเอกรินทร์ นามแสง</h4>
      </div>
      <div class="by">
        <h4 class="who-by">จัดทำโดย</h4>
        <h4>นายชัยมงคล หารบุรุษ</h4>
      </div>
      <div class="section">
        <p>รายงานนี้เป็นส่วนหนึ่งของรายวิชาสุขศึกษา และ จิตวิทยา <br>
          โรงเรียนบ้านสวนจั่นอนุสรณ์</p>
      </div>
    </div>
<div class="d-flex justify-content-end ">
     <div class="text-end mx-2">
    <a href="vote/?route=reply" class="btn btn-primary my-3">ดูผลโหวต&nbsp;<i class="fa-solid fa-location-question"></i></a>
    </div>
    <div class="text-end mx-2">
    <a href="?moduleReport=introduction" class="btn btn-primary my-3">หน้าถัดไป&nbsp;<i class="fa-solid fa-right"></i></a>
    </div>
</div>
  </div>