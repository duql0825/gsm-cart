<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="theme-color" content="#ffffff" charset="utf-8">
    <meta name="viewport" content="width=768px, user-scalable=no">
    <title>GSMCart</title>
    <link rel="stylesheet" href="GProduct.css">
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
    <div id="D3" style="display:none;">
      <div class="container3">
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
    <div id="M3" style="display:none">
      <img src="img/project logo_white.png" class="Project-Logo_white">
      <div class="TSARR">
        광주광역시 광산구 상무대로 312<br>광주소프트웨어마이스터고등학교<br>ⓒTeam Silent.All rights reserved.
      </div>
    </div>
    <script type="text/javascript">
    var D1 = $("#D1").html();
    var D3 = $("#D3").html();
    var M1 = $("#M1").html();
    var M3 = $("#M3").html();
      $(document).ready( function() {
        if($(window).width()<769){
          $("#B1").html(M1)
          $("#B3").html(M3)
        }
        else{
          $("#B1").html(D1)
          $("#B3").html(D3)
        }
        $(window).resize(function(){
          if($(window).width()<752){
            $("#B1").html(M1)
            $("#B3").html(M3)
          }
          else{
            $("#B1").html(D1)
            $("#B3").html(D3)
          }
        })
      })
    </script>
  </head>
  <body>
    <div id="B1" class="Background1">
    </div>
    <div id="B2" class="Background2">
      <div class="container2">
        <img src="GProduct/maxim-mochagold.png" class="Product">
        <div class="text1">
          [동서] 맥심 모카골드 마일드 커피믹스(12g*250) 3,000g
        </div>
        <div class="text2">
          24,800원
        </div>
        <div>
          <form action="maxim.php" method="post" style="position:relative; top:1px;">
            <input type="text" name="개수" value="" placeholder="개수를 입력해주세요"
             class="number">
             <br style="margin:0;">
            <input type="IMAGE" src="GProduct/4.png"
            class ="button">
          </form>
        </div>
      </div>
    </div>
    <div id="B3" class="Background3">
    </div>
  </body>
</html>
