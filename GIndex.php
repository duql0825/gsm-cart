<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="theme-color" content="#ffffff" charset="utf-8">
    <meta name="viewport" content="width=768px, user-scalable=no">
    <title>GSMCart</title>
    <link rel="stylesheet" href="GIndex.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--소스로 활용할 html들 D1-D5 데스크탑-->
    <div id="D1" style="display:none;">
      <div class="container1">
        <a href="GIndex.php"><img src="img-pc/project logo.png" class="Project-Logo"></a>
        <div class="text0">
          스토어
        </div>
        <img src="img-pc/search icon.png" class="Search-Icon">
        <!--카트-->
        <a href="GStore.php"><img src="img-pc/cart icon.png" class="Cart-Icon"></a>
        <!--개인정보-->
        <a href="menu.php"><img src="img-pc/person icon.png" class="Person-Icon"></a>
      </div>
    </div>
    <div id="D2" style="display:none;">
      <div class="container2">
        <div class="text1">
          정기배송 서비스
        </div>
        <img src="img-pc/GIndex/calendar.png" class="Calendar">
        <img src="img-pc/GIndex/shopping basket.png" class="Shopping-Basket">
        <div class="text2" style="left:calc(55% - 10px)">
          원하는 <b>날짜</b>에
        </div>
        <div class="text2" style="right:20px;">
          원하는 <b>상품</b>을
        </div>
      </div>
    </div>
    <div id="D3" style="display:none;">
      <div class="container3">
        <img src="img-pc/GIndex/calendar1.png" class="Calendar1">
        <img src="img-pc/GIndex/baseline-keyboard_arrow_right-24px.png"
         class="baseline-keyboard_arrow_right-24px" style="right:calc(25%);">
        <img src="img-pc/GIndex/card.png" class="Card"><img src="img-pc/GIndex/baseline-keyboard_arrow_right-24px.png"
          class="baseline-keyboard_arrow_right-24px" style="left:calc(25%);">
        <img src="img-pc/GIndex/box.png" class="Box">
        <div class="text3" style="left:-50px;">
          날짜와 기간을 선택
        </div>
        <div class="text3" style="left:calc((100% - 285px) / 2)">
          신용카드를 등록
        </div>
        <div class="text3" style="right:-50px;">
          때 되면 알아서 배송
        </div>
        <div class="text4" style="left:-40px;">
          언제든 간편하게 바꿀 수 <br> 있으니 걱정하지 마세요.
        </div>
        <div class="text4" style="left:calc((100% - 261px) / 2)">
          정기결제를 이용하면<br>최대10% 할인을 만나<br>보실 수 있습니다.
        </div>
        <div class="text4" style="right:-40px;">
          선택하신 날짜와 기간에 맞춰 알아서 배송해 드립니다.
        </div>
      </div>
    </div>
    <div id="D4" style="display:none;">
      <div class="container4">
        <img src="img-pc/GIndex/truck.png" class="Truck">
     <div class="text5">
       GSM 특화 배송 서비스
     </div>
     <div class="text6">
       더 이상 택배 받으러 내려가지 마세요.<br>배송지에 적힌 교실로 바로 가져다 드립니다.
     </div>
     <a href="GStore.php">
       <img src="img-pc/GIndex/button.png" class="button">
        <div class="text7">
          스토어 가기
        </div>
      </a>
      </div>
    </div>
    <div id="D5" style="display:none;">
      <div class="container5">
        <img src="img-pc/project logo_white.png" class="Project-Logo_white">
        <div class="TSARR">
          광주광역시 광산구 상무대로 312<br>광주소프트웨어마이스터고등학교<br>ⓒTeam Silent.All rights reserved.
        </div>
      </div>
    </div>
    <!--모바일-->
    <div id="M1" style="display:none">
      <img src="img/Menu-Icon.png" class="Menu-Icon">
      <img src="img/search icon.png" class="Search-Icon">
      <img src="img/project logo.png" class="Project-Logo">
      <img src="img/cart icon.png" class="Cart-Icon">
      <img src="img/person icon.png" class="Person-Icon">
    </div>
    <div id="M2" style="display:none">
        <div class="text1">
          정기배송 서비스
        </div>
        <p style="margin:0 0 31px;">
          <!-- 캘린더 -->
          <img src="img/GIndex/calendar.png" class="Calendar">
          <!-- 쇼핑바구니 -->
          <img src="img/GIndex/shopping basket.png" class="Shopping-Basket">
        </p>
        <div class="text2" style="right:38px">
          원하는 <b>날짜</b>에
        </div>
        <div class="text2" style="left:48px">
          원하는 <b>상품</b>을
        </div>
    </div>
    <div id="M3" style="display:none">
        <div class="container">
          <!-- png -->
          <img src="img/GIndex/calendar1.png" class="Calendar1">
          <div class="text3" style="top:85px">
             날짜와 기간을 선택
          </div>
          <div class="text4" style="top:118px">
            언제든 간편하게 바꿀 수<br>있으니 걱정하지 마세요.
          </div>
          <img src="img/GIndex/arrow_down.png" class="Arrow_Down" style="top:187px;">
          <img src="img/GIndex/card.png" class="Card">
           <div class="text3" style="top:256px">
              신용카드를 등록
           </div>
           <div class="text4" style="top:289px">
              정기결제를 이용하면 최대10% <br>할인을 만나보실 수 있습니다.
           </div>
          <img src="img/GIndex/arrow_down.png" class="Arrow_Down" style="top:358px;">
          <img src="img/GIndex/box.png" class="Box">
          <div class="text3" style="top:429px">
               때 되면 알아서 배송
         </div>
          <div class="text4" style="top:462px">
               선택하신 날짜와 기간에 맞춰 <br>알아서 배송해 드립니다.
          </div>
        </div>
    </div>
    <div id="M4" style="display:none">
      <!-- png -->
      <img src="img/GIndex/truck.png" class="Truck">
      <br style="margin:0;">
      <div class="text5">
        GSM 특화 배송 서비스
      </div>
      <br style="margin:0;">
      <div class="text6">
        더 이상 택배 받으러 내려가지 마세요.<br>배송지에 적힌 교실로 바로 가져다 드립니다.
      </div>
      <br style="margin:0;">
      <a href="GStore.php">
        <div style="position:relative;">
        <img src="img/GIndex/button.png" class="button">
        <div class="text7">
          스토어 가기
        </div>
      </a>
      </div>
    </div>
    <div id="M5" style="display:none">
      <img src="img/project logo_white.png" class="Project-Logo_white">
      <div class="TSARR">
        광주광역시 광산구 상무대로 312<br>광주소프트웨어마이스터고등학교<br>ⓒTeam Silent.All rights reserved.
      </div>
    </div>
    <script type="text/javascript">
    var D1 = $("#D1").html();
    var D2 = $("#D2").html();
    var D3 = $("#D3").html();
    var D4 = $("#D4").html();
    var D5 = $("#D5").html();
    var M1 = $("#M1").html();
    var M2 = $("#M2").html();
    var M3 = $("#M3").html();
    var M4 = $("#M4").html();
    var M5 = $("#M5").html();
      $(document).ready( function() {
        if($(window).width()<769){
          $("#B1").html(M1)
          $("#B2").html(M2)
          $("#B3").html(M3)
          $("#B4").html(M4)
          $("#B5").html(M5)
        }
        else if($(window).width()>=769 && $(window).width()<1081){
          $("#B1").html(D1)
          $("#B2").html(M2)
          $("#B3").html(D3)
          $("#B4").html(M4)
          $("#B5").html(M5)
        }
        else{
          $("#B1").html(D1)
          $("#B2").html(D2)
          $("#B3").html(D3)
          $("#B4").html(D4)
          $("#B5").html(D5)
        }
        $(window).resize(function(){
          if($(window).width()<752){
            $("#B1").html(M1)
            $("#B2").html(M2)
            $("#B3").html(M3)
            $("#B4").html(M4)
            $("#B5").html(M5)
          }
          else if($(window).width()>=752 && $(window).width()<1064){
            $("#B1").html(D1)
            $("#B2").html(M2)
            $("#B3").html(D3)
            $("#B4").html(M4)
            $("#B5").html(M5)
          }
          else{
            $("#B1").html(D1)
            $("#B2").html(D2)
            $("#B3").html(D3)
            $("#B4").html(D4)
            $("#B5").html(D5)
          }
        })
      })
    </script>
  </head>
  <body>
    <div id="B1" class="Background1">
    </div>
    <div id="B2" class="Background2">
    </div>
    <div id="B3" class="Background3">
    </div>
    <div id="B4" class="Background4">
    </div>
    <div id="B5" class="Background5">
    </div>
    <a href="index.php">test</a>
  </body>
</html>
