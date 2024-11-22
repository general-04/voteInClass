<style>
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Noto Sans Thai Looped", sans-serif;
  font-weight: 400;
  font-style: normal;
  user-select: none;
    }
 body{
  background: #212529;
 }
 .fa-circle-user{
  font-size: 80px;
  border: 1px solid #fff;
  border-radius: 100%;
  box-shadow: 0 0 5px 0.5px gray;
 } 
 .title-form{
  flex-flow: column;
 }
 .formVerify{
  margin-top: 30px;
  padding: 10px;
  border-radius: 10px;
  width: 100%;
 } 
 .p-text{
  border-radius: 6px;
 } 
 .container{
  max-width: 450px;
 } 
 .fa-lock{
  font-size: 30px;
 }
 .alert-only{
  display: ;
 }
 .alert-over{
  display: none;
 }
.open-footer{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 background: #6c757d; 
 width: 100px;
 text-align: center;
 padding: 10px 50px 10px 50px; 
 margin-top: 15px;
 margin-right: 5px;
 color: #fff; 
 transition: background 0.5s ease, color 0.5s ease, border 0.5s ease;
 width: auto;
 align-self: flex-end;
 flex: 1;
}
.open-footer:hover{
 background: transparent;
 color: #6c757d; 
}
.footer-navtive {
 background-color: #333; 
 color: #fff;
 padding: 20px 0;
 position: absolute;
 bottom: 0; 
 left: 0; 
 width: 100%;
 z-index: 1;
}
.f-content {
 display: flex;
 justify-content: center;
 align-items: center;
 flex-flow: column wrap;
}
.f-head {
 letter-spacing: 1px;
 font-size: 400;
 margin-bottom: 15px;
 border-bottom: 1px solid #fff;
}
.f-by-dev {
 letter-spacing: 1px;
}
.f-last {
 margin: 2px 0;
}
.f-last > a{
 color: #4c8efc;
}
.pop-up {
  position: fixed; 
  z-index: 2;
  left: 0;
  top: 0;
  width: 100%; 
  min-height: 100vh;
  overflow: auto; 
  background-color: rgba(0,0,0,0.5); 
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.5s ease,
  visibility 0.3s ease;
}
.pop-up-content {
  background-color: #212529;
  margin: auto;
  margin-top: auto;
  padding: 20px;
  box-shadow: 0 0 10px 1px #000;
  width: 85%;
  max-width: 500px;
  color: #fff;
  border-radius: 10px;
  user-select: none;
}
.pop-up-header {
border-bottom: 1px solid #fff;
margin-bottom: 20px;
}
.pop-node {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 6px;
  border-radius: 10px;
  box-shadow: 0 2px 5px 1px #000;
  width: 130px;
  height: 5vh;
  text-align: center;
  margin-bottom: 20px;
  white-space: nowrap;
}
.pop-up-body {
display: flex
justify-content: center;
align-items: center;
border-bottom: 1px solid #fff;
margin-bottom: 20px;
}
.pop-up-all {
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: none;
    padding: 0px;
    max-width: 100%;
    text-align: center;
    color: #545352;
    font-size: 16px;
    margin-top: 5px;
    margin-bottom: 10px;
    user-select: none;
}

.pop {
  color: #fff;
  padding: 10px;
  border-radius: 0px;
  text-align: center;
  /* set width here */
  width: 100%;
  border: 1px solid #ccc;
  padding: 10px;
  white-space: nowrap;
  border-radius: 15px;
}
.pop:hover {
    background-color: #8ccf55;
    color: #fff;
    cursor: pointer;
}
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  text-decoration: none;
  cursor: pointer;
}

.hr-pop-up {
color: white;
border-width: 1.8px;
}
.pop-img img {
width: 100%;
height: 300px;
margin-bottom: 20px;
border-radius: 10px;
}
.pop-up-footer {
display: flex;
justify-content: center;
align-items: center;
flex-flow: column;
}
.pop-up-footer button {
 width: 100%;
 height: 35px;
 border: none;
 border-radius: 5px;
 color: #fff;
}
.pop-up-footer button:first-child  {
margin-bottom: 10px;
}
.btn-ac {
background: #198754;
border: 1px solid #198754;
}
.btn-ac:hover {
background: transparent;
color: #198754;
border: 1px solid #198754;
}
.btn-cl {
background: #dc3545;
border: 1px solid #dc3545;
}
.btn-cl:hover {
background: transparent;
color: #dc3545;
border: 1px solid #dc3545;
}
.hr-sp {
 color: #fff;
 border: 1px solid #fff;
}
#usrVoted {
 padding-top: 4px;
 padding-bottom: 3px;
 padding-left: 2px;
 padding-right: 2px;
 border-radius: 5px;
 font-weight: bold;
}
.pop-up-data{
 display: flex;
 flex-flow: column;
}
#usrReply{
 padding-top: 4px;
 padding-bottom: 3px;
 padding-left: 2px;
 padding-right: 2px;
 border-radius: 5px;
 font-weight: bold;
}

</style>

<div class="container">
 
<div class="title-form d-flex align-items-center my-5">
 <div class="my-3"> 
<i class="fa-duotone fa-light fa-circle-user text-center text-light"></i>
</div>
  <div class="text-white">
     <h5>โหวต ใช่ ถ้าคุณคิดว่าเกย์ ไม่ ถ้าไม่ใช่เกย์</h5>
  </div>
 <form id="formVerify" class="formVerify bg-light">
  <div class="">
    <section>
     <p class="bg-secondary text-white px-2 p-text text-center">
      กรอกรหัสนักเรียนเพื่อลงโหวต
     </p>
    </section>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa-duotone fa-thin fa-lock"></i></span>
  </div>
  <input type="number" id="number" class="form-control" placeholder="Student ID " name="number">
</div>
<div class="alert alert-warning alert-only" id="alert-only" role="alert">
 <i class="fa-solid fa-triangle-exclamation"></i> &nbsp; เฉพาะนักเรียน มัธยมศึกษาปีที่ 4
</div>
<div class="alert alert-danger alert-over" id="alert-over" role="alert">
 <i class="fa-solid fa-triangle-exclamation"></i> &nbsp; รหัสนักเรียนที่กรอกมากเกิน
</div>
 <button type="button" id="btn-sub" class="my-2 btn btn-secondary w-100"><i class="fa-duotone fa-solid fa-arrow-right-from-bracket"></i>&nbsp;ยืนยัน</button>
 <a type="button" id="btn-show" href="?route=show" class="btn btn-danger w-100"><i class="fa-solid fa-globe"></i>&nbsp;Voting Rank</a>
 </form>
</div>

</div>

<form>
<div id="popupModal" class="pop-up">
  <div class="pop-up-content">
  <span class="close"><i class="fa-solid fa-question"></i></span>
    <div class="pop-up-header">
   <div class="pop-node"><h5>ข้อมูลนักเรียน</h5></div>
   <hr class="hr-sp">
    <div class="pop-up-data">
     <p id="usrVote"></p>
     <p id="usrClass"></p>
<div class="d-flex justify-content-between">
      <p>สถานะ <span id="usrVoted">ยังไม่โหวต</span></p>
      <p>โหวตของคุณ <span id="usrReply" class="bg-secondary"></span></p>
</div>
    </div>
    </div>
        <div class="pop-up-body">
        <div class="pop-up-all">
        
        <div class="pop pop-rank mx-2" id="popReal">เกย์จริง</div>
         <div class="pop pop-normal mx-2" id="popNo">ไม่เกย์</div>
          <div class="pop pop-trade mx-2" id="popEmpty">งดออกเสียง</div>
        </div>
        <div class="pop-img mt-4">
        <img id="popImg" alt="photo" src="img/qt.png">
        </div>
    </div>
            <div class="pop-up-footer">
            <button class="btn-ac"id="accept">ยืนยันโหวต</button>
            <button class="btn-cl" id="close">ยกเลิก</button>
    </div>
  </div> 
</div>
</form>

</div>

    <footer class="footer-navtive">
     <div class="f-content">
      <div class="f-head"></div>
      <div class="f-by-dev dev1">
        เว็บมีปัญหา เว็บกาก เว็บโง่
        ต้องการซื้อ src เว็บนี้
      </div>
      <div class="f-last">แจ้งปัญหาติดต่อ &nbsp;<a href="https://line.me/ti/p/tk8Ln1jZTz">ได้ที่</a></div>
     </div>
    </footer>

<script type="module">
 import { WarningMessage, SuccessMessage, ErrorMessage, successVoted, duplicate } from './js/alertModule.js'
 const popReal = document.querySelector("#popReal")
 const popNo = document.querySelector("#popNo")
 const popEmpty = document.querySelector("#popEmpty")
 const popImg = document.querySelector("#popImg")
 const popupModal = document.querySelector("#popupModal")
 const usr = document.querySelector("#usrVote")
 const clss = document.querySelector("#usrClass")
 const voted = document.querySelector("#usrVoted")
 const reply = document.querySelector("#usrReply")

 const close = document.querySelector("#close")
 const accept = document.querySelector("#accept")

 const btnSub = document.querySelector("#btn-sub")
 const alertOver = document.querySelector("#alert-over")
 const alertOnly = document.querySelector("#alert-only")
 const num = document.querySelector("#number")
 const form = document.querySelector("#formVerify") 
 let voteReply = null
 let stdCode = null  

popReal.addEventListener("click", () => {
 popImg.setAttribute("src","img/img.png")
  voteReply = "yes"
})
popNo.addEventListener("click", () => {
 popImg.setAttribute("src","img/no.png")
  voteReply = "no"
})
popEmpty.addEventListener("click", () => {
 popImg.setAttribute("src","img/bid.png")
  voteReply = "abstain"
})

close.addEventListener("click", (e) => {
   e.preventDefault()
   popupModal.style.opacity = "0"
   popupModal.style.visibility = "hidden"
})


 num.addEventListener("input", () => {
    if(num.value.length > 5){
   alertOver.style.display = "block"
   alertOnly.style.display = "none"
   console.log("over")
  } else {
   alertOver.style.display = "none"
   alertOnly.style.display = "block"
  }
 
 })
 btnSub.addEventListener("click", async  (e) => {
  e.preventDefault()
  const fd =  new FormData(form)
  const api = "api/checkId.php"
try{
  const res = await fetch(api,{
   method: "POST",
   body: fd
  })
  const data = await res.json()
  if(data.status === true){
   SuccessMessage(data.name)
   stdCode = data.student_code
   setTimeout(() => {
   popupModal.style.opacity = "1"
   popupModal.style.visibility = "visible"
   usr.innerHTML = `ชื่อ ${data.name}`
   clss.innerHTML = `ชั้น ${data.section}/${data.class}`
   if(!data.replyVoted){
    voted.innerHTML = `ยังไม่โหวต`
    voted.style.background = "red"
    reply.innerHTML = `โหวตก่อน`
   } else {
    voted.innerHTML = `โหวตแล้ว`
    voted.style.background = "green"
    if(data.replyVoted === "yes"){
     reply.innerHTML = `เกย์จริง`
    } else if(data.replyVoted === "no") {
     reply.innerHTML = `ไม่เกย์`
    } else{
     reply.innerHTML = `งดออกเสียง`
    }
   }
}, 1000)
   console.log(data)
  } else if(data.status === false) {
   ErrorMessage(data.msg)
   console.log(data)
  }
} catch(error){
 console.log("Error: ", error)
}
 })

accept.addEventListener("click", async (e) => {
 e.preventDefault()
 const apiVote = "api/vote.php"
 try{
 const resp = await fetch(apiVote, {
  method: "POST",
  headers: {
 "Content-Type": "application/json"
  },
  body: JSON.stringify({
   vote: voteReply,
   student_code: stdCode  
  })
  
 })
 const dataVoted = await resp.json()
 if(dataVoted.status === true){
  successVoted()
 } else if(dataVoted.status === false) {
  duplicate()
 }
 console.log(dataVoted)
} catch(error) {
 console.log("Error: ", error)
}
})

</script>