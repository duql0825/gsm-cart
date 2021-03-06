<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="theme-color" content="#ffffff" charset="utf-8">
    <meta name="viewport" content="width=768px, user-scalable=no">
    <title>GSMCart</title>
    <link rel="stylesheet" href="GStore.css">
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
    <div id="D4" style="display:none;">
      <div class="container4">
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
    <div id="M4" style="display:none">
      <img src="img/project logo_white.png" class="Project-Logo_white">
      <div class="TSARR">
        광주광역시 광산구 상무대로 312<br>광주소프트웨어마이스터고등학교<br>ⓒTeam Silent.All rights reserved.
      </div>
    </div>
    <script type="text/javascript">
    var D1 = $("#D1").html();
    var D4 = $("#D4").html();
    var M1 = $("#M1").html();
    var M4 = $("#M4").html();
      $(document).ready( function() {
        if($(window).width()<769){
          $("#B1").html(M1)
          $("#B4").html(M4)
        }
        else{
          $("#B1").html(D1)
          $("#B4").html(D4)
        }
        $(window).resize(function(){
          if($(window).width()<752){
            $("#B1").html(M1)
            $("#B4").html(M4)
          }
          else{
            $("#B1").html(D1)
            $("#B4").html(D4)
          }
        })
      })
    </script>
  </head>
  <body>
    <div id="B1" class="Background1">
    </div>
    <div id="B2" class="Background2">
      <div class="text1">
        카테고리
      </div>
      <br style="margin:0">
      <div class="container2">
        <div>
          <figure>
            <img src="GStore/coffee-cup.png" class="Sort">
            <figcaption class="text2">커피/차</figcaption>
          </figure>
          <figure>
            <img src="GStore/snack.png" class="Sort">
            <figcaption class="text2">과자</figcaption>
          </figure>
          <figure>
            <img src="GStore/detergent.png" class="Sort">
            <figcaption class="text2">세제/유연제</figcaption>
          </figure>
          <figure>
            <img src="GStore/soap.png" class="Sort">
            <figcaption class="text2">바디/헤어</figcaption>
          </figure>
          <figure>
            <img src="GStore/juice.png" class="Sort">
            <figcaption class="text2">주스/음료수</figcaption>
          </figure>
          <figure>
            <img src="GStore/tissue.png" class="Sort">
            <figcaption class="text2">휴지/물티슈</figcaption>
          </figure>
        </div>
        <div>
          <figure>
            <img src="GStore/milk-bottle.png" class="Sort">
            <figcaption class="text2">우유/두유</figcaption>
          </figure>
          <figure>
            <img src="GStore/toffee.png" class="Sort">
            <figcaption class="text2">사탕/초콜릿</figcaption>
          </figure>
          <figure>
            <img src="GStore/ramen.png" class="Sort">
            <figcaption class="text2">라면</figcaption>
          </figure>
          <figure>
            <img src="GStore/water.png" class="Sort">
            <figcaption class="text2">생수/탄산수</figcaption>
          </figure>
          <figure>
            <img src="GStore/rice.png" class="Sort">
            <figcaption class="text2">즉석식품</figcaption>
          </figure>
          <figure>
            <img src="GStore/yogurt.png" class="Sort">
            <figcaption class="text2">요구르트</figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div id="B3" class="Background3">
      <div class="container3">
        <div class="text3">
          커피/차<!--이후에 DB로 변경 예정-->
        </div>
        <div class="text4">
          총 <b>33개<!--이후에 DB로 변경 예정--></b> 의 제품이 조회되었습니다.
        </div>
        <br style="margin:0;">
        <figure class="product1">
          <a href="GProduct.php"><img src="GStore/maxim-mochagold.png" class="ProductIMG"></a>
          <figcaption class="text5">[동서] 맥심 모카골드 마일드 커피믹스(12g*250) 3,000g</figcaption>
          <figcaption class="text6">24,800원</figcaption>
        </figure>
        <figure class="product2">
          <img src="GStore/mitte-hotchoco.png" class="ProductIMG">
          <figcaption class="text5">[동서] 미떼 핫초코 오리지날(30g*10입) 300g</figcaption>
          <figcaption class="text6">3,750원</figcaption>
        </figure>
        <figure class="product3">
          <img src="GStore/starbucks-sweetblack.png" class="ProductIMG">
          <figcaption class="text5">스타벅스 스위트블랙(275ml*6팩) 에코백 기획제품</figcaption>
          <figcaption class="text6">13,880원</figcaption>
        </figure>
        <figure class="product4">
          <img src="GStore/maxim-whitegold.png" class="ProductIMG">
          <figcaption class="text5">[동서] 맥심 화이트골드 커피믹스(11.7g*250) 2,925g</figcaption>
          <figcaption class="text6">26,800원</figcaption>
        </figure>
        <figure class="product5">
          <img src="GStore/kanu-150.png" class="ProductIMG">
          <figcaption class="text5">[맥심] 카누 마일드 로스트 아메리카노 미니(0.9*150입)</figcaption>
          <figcaption class="text6">25,800원</figcaption>
        </figure>
        <figure class="product6">
          <img src="GStore/kanu-100.png" class="ProductIMG">
          <figcaption class="text5">[맥심] 카누 마일드 로스트 아메리카노 미니(0.9*100입) (증정품 랜덤발송)</figcaption>
          <figcaption class="text6">19,000원</figcaption>
        </figure>
        <figure class="product7">
          <img src="GStore/haneulbori.png" class="ProductIMG">
          <figcaption class="text5">[웅진] 하늘보리 1.5L</figcaption>
          <figcaption class="text6">980원</figcaption>
        </figure>
        <figure class="product8">
          <img src="GStore/boricha.png" class="ProductIMG">
          <figcaption class="text5">[동서] 동서 보리차(10g티백*30개입) 300g</figcaption>
          <figcaption class="text6">1,980원</figcaption>
        </figure>
      </div>
      <br style="margin:0;">
      <img src="GStore/baseline-keyboard-arrow-left-24-px.png" class="baseline-keyboard_arrow_left-24px">
      <div class="text7">1</div>
      <div class="text7">2</div>
      <div class="text7">3</div>
      <div class="text7">4</div>
      <div class="text7">5</div>
      <img src="GStore/baseline-keyboard-arrow-right-24-px.png" class="baseline-keyboard_arrow_right-24px">
    </div>
    <div id="B4" class="Background4">
    </div>
  </body>
</html>
