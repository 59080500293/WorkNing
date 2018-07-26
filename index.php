<?php

$con=new mysqli('localhost','root','','gg');

$query=mysqli_query($con,"SELECT details FROM menu where id=1");
$row = mysqli_fetch_array($query);
$mhome=$row['details'];

$query=mysqli_query($con,"SELECT details FROM menu where id=2");
$row = mysqli_fetch_array($query);
$mnows=$row['details'];

$query=mysqli_query($con,"SELECT details FROM menu where id=3");
$row = mysqli_fetch_array($query);
$marticle=$row['details'];

$query=mysqli_query($con,"SELECT details FROM menu where id=4");
$row = mysqli_fetch_array($query);
$mgall=$row['details'];

$query=mysqli_query($con,"SELECT details FROM menu where id=5");
$row = mysqli_fetch_array($query);
$mcontact=$row['details'];

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ddd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/few.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>
  </style>

</head>

<body>

  <body class=”th”>
      <font face="Prompt">
  
       
        <!--hero-->
        <div class="box">
          <h1>
            <font face="Prompt">วัดวุฒาราม</font>
          </h1>
          <p>
            <font face="Prompt">ต.ในเมือง อ.เมือง จ.ขอนแก่น</font>
          </p>
  
          <div class="ham">
            <img src="image\ham.png" width="80%">
          </div>
  
          <div class="boxa">
            <a href="index.html"><?=$mhome?></a>
            <a href="news"><?=$mnows?></a>
            <a href="articles"><?=$marticle?></a>
            <a href="gallery"><?=$mgall?></a>
            <a href="contact"><?=$mcontact?></a>
          </div>
  
  
          <div class="boxb">
            <a href="about">เกี่ยวกับ</a>
            <a href="default.asp">
              <img src="image\facebook.png" alt="facebook">
            </a>
            <select id="size_select">
              <option value="option1">ภาษาไทย</option>
              <option value="option2">English</option>
            </select>
          </div>
        </div>
  
        <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
  
            <div class="carousel-inner">
              <div class="item active">
                <img src="image\hero.png" alt="Los Angeles" style="width:100%;">
              </div>
  
              <div class="item">
                <img src="image\hero.png" alt="Chicago" style="width:100%;">
              </div>
  
              <div class="item">
                <img src="image\hero.png" alt="New york" style="width:100%;">
              </div>
  
              <div class="item">
                <img src="image\hero.png" alt="New york" style="width:100%;">
              </div>
            </div>
  
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
  
        <div class="text">
          <h2>วัดส่งเสริมสุขภาพ</h2>
          <h3>ส่งเสริมชุมชนทั้ง 8 ชุมชนรอบวัดวุฒาราม เทศบาลขอนแก่น</h3>
        </div>
  
  
        <!--intro-->
        <div class="intro">
          <p>สะอาด ร่มรื่น. สงบ ร่มเย็น. สุขภาพ ร่วมสร้าง</p>
          <p1>ศิลปะร่วมจิต. ชาวประชารวมพัฒนา</p1>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
  
  
  
        <!--news-->
        <div class="news">
          <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <h1>ข่าวสาร</h1>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="TableLine">&nbsp;</td>
            </tr>
          </table>
          <div class="all">
            <a href="all">ดูทั้งหมด ></a>
          </div>
  
  
          <div class="gall">
            <a target="_blank" href="image\gall.jpg">
              <img src="image\gall.jpg" alt="5Terre">
            </a>
            <div class="desc">
              <h3>12
                <br>มิ.ย.</h3>
              <h4>เปิดศูนย์สุขภาพวิถีพุทธและศูนย์ศิลปวัฒนธรรมอีสาน</h4>
              <h5>
                <font face="Tahoma">ทางวัดวุฒารามได้เปิดศูนย์ สุขภาพวิถีพุทธและศูนย์ศิลป วัฒนธรรมอีสาน ขึ้น ณ ศาลาหลังเก่า วัดวุฒาราม</font>
              </h5>
              <br>
              <div class="reading">
                <a href="reading">อ่านต่อ ></a>
              </div>
              <br>
              <br>
            </div>
          </div>
  
  
          <div class="sgall">
            <div class="sgall1">
              <a target="_blank" href="image\gall1.jpg">
                <img src="image\gall1.jpg" alt="gall1">
              </a>
              <div class="desc1">
                <h3>02
                  <br>ก.ค.</h3>
                <h4>ถวายน้ำปานะ-น้ำดื่ม-ภัตตาหารถวายพระ ๕๐๐ รูป</h4>
                <h5>
                  <font face="Tahoma">ทางวัดวุฒารามได้เปิดศูนย์ สุขภาพวิถีพุทธ
                    <br>และศูนย์ศิลป วัฒนธรรมอีสาน...</font>
                </h5>
                <div class="reading">
                  <a href="reading">อ่านต่อ ></a>
                </div>
              </div>
            </div>
          </div>
  
          <div class="ssgall">
            <div class="sgall2">
              <a target="_blank" href="image\gall2.jpg">
                <img src="image\gall2.jpg" alt="gall2">
              </a>
              <div class="desc2">
                <h3>22
                  <br>ก.ค.</h3>
                <h4>ขอเชิญเป็นเจ้าภาพถวายภัตตาหาร และน้ำปานะแก่พระภิกษุสามเณร</h4>
                <h5>
                  <font face="Tahoma">ทางวัดวุฒารามได้เปิดศูนย์ สุขภาพวิถีพุทธ
                    <br>และศูนย์ศิลป วัฒนธรรมอีสาน...</font>
                </h5>
                <div class="reading">
                  <a href="reading">อ่านต่อ ></a>
                </div>
              </div>
            </div>
          </div>
  
          <div class="sssgall">
            <div class="sgall3">
              <a target="_blank" href="image\gall3.jpg">
                <img src="image\gall3.jpg" alt="gall3">
              </a>
              <div class="desc3">
                <h3>30
                  <br>ธ.ค.</h3>
                <h4>ขอเชิญร่วมงานบุญมหาชาติ</h4>
                <br>
                <h5>
                  <font face="Tahoma">ทางวัดวุฒารามได้เปิดศูนย์ สุขภาพวิถีพุทธ
                    <br>และศูนย์ศิลป วัฒนธรรมอีสาน...</font>
                </h5>
                <div class="reading">
                  <a href="reading">อ่านต่อ ></a>
                </div>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
  
  
  
        <!--articles-->
        <div class="Articles">
          <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <h1>บทความ</h1>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="TableLine">&nbsp;</td>
            </tr>
          </table>
          <div class="all">
            <a href="all">ดูทั้งหมด ></a>
          </div>
  
  
          <div class="contentw3">
            <div class="mySlides">
  
              <div class="card">
                <h2>อานิสงส์ของการสวดมนต์</h2>
                <br>
                <a target="_blank" href="image\gall4.jpg">
                  <img src="image\gall4.jpg" alt="gall4">
                  <p>
                    <font face="Tahoma">
                      <br>การสวดมนต์นั้น ต้องถือว่าเป็นเรื่องที่ง่าย สำหรับทุกคนในยุคนี้ สะดวกมากใน ทุกเพศทุกวัยและไม่ใช่เรื่องของคนแก่...</font>
                  </p>
                  <br>
                  <div class="reading">
                    <a href="reading">อ่านต่อ ></a>
                  </div>
                  <br>
              </div>
  
              <div class="card1">
                <h2>หมดหวังท้อแท้ในชีวิต...
                  <br> คิดอย่างไรให้ใจสู้
                </h2>
                <br>
                <a target="_blank" href="image\gall5.jpg">
                  <img src="image\gall5.jpg" alt="gall5">
                  <p>
                    <font face="Tahoma">
                      <br>การสวดมนต์นั้น ต้องถือว่าเป็นเรื่องที่ง่าย สำหรับทุกคนในยุคนี้ สะดวกมากใน ทุกเพศทุกวัยและไม่ใช่เรื่องของคนแก่...</font>
                  </p>
                  <br>
                  <div class="reading">
                    <a href="reading">อ่านต่อ ></a>
                  </div>
                  <br>
              </div>
  
              <div class="card2">
                <h2>
                  <br>ความเป็นมาของวันพระ</h2>
                <br>
                <a target="_blank" href="image\gall6.jpg">
                  <img src="image\gall6.jpg" alt="gall6">
                  <p>
                    <font face="Tahoma">
                      <br>การสวดมนต์นั้น ต้องถือว่าเป็นเรื่องที่ง่าย สำหรับทุกคนในยุคนี้ สะดวกมากใน ทุกเพศทุกวัยและไม่ใช่เรื่องของคนแก่...</font>
                  </p>
                  <br>
                  <div class="reading">
                    <a href="reading">อ่านต่อ ></a>
                  </div>
                  <br>
              </div>
            </div>
  
            <div class="mySlides">
              <div class="card">
                <h2>อานิสงส์ของการสวดมนต์</h2>
                <br>
                <a target="_blank" href="image\gall5.jpg">
                  <img src="image\gall5.jpg" alt="gall5">
                  <p>
                    <font face="Tahoma">
                      <br>การสวดมนต์นั้น ต้องถือว่าเป็นเรื่องที่ง่าย สำหรับทุกคนในยุคนี้ สะดวกมากใน ทุกเพศทุกวัยและไม่ใช่เรื่องของคนแก่...</font>
                  </p>
                  <br>
                  <div class="reading">
                    <a href="reading">อ่านต่อ ></a>
                  </div>
                  <br>
              </div>
  
  
              <div class="card1">
                <h2>หมดหวังท้อแท้ในชีวิต...
                  <br> คิดอย่างไรให้ใจสู้
                </h2>
                <br>
                <a target="_blank" href="image\gall6.jpg">
                  <img src="image\gall6.jpg" alt="gall6">
                  <p>
                    <font face="Tahoma">
                      <br>การสวดมนต์นั้น ต้องถือว่าเป็นเรื่องที่ง่าย สำหรับทุกคนในยุคนี้ สะดวกมากใน ทุกเพศทุกวัยและไม่ใช่เรื่องของคนแก่...</font>
                  </p>
                  <br>
                  <div class="reading">
                    <a href="reading">อ่านต่อ ></a>
                  </div>
                  <br>
              </div>
  
              <div class="card2">
                <h2>
                  <br>ความเป็นมาของวันพระ</h2>
                <br>
                <a target="_blank" href="image\gall4.jpg">
                  <img src="image\gall4.jpg" alt="gall4">
                  <p>
                    <font face="Tahoma">
                      <br>การสวดมนต์นั้น ต้องถือว่าเป็นเรื่องที่ง่าย สำหรับทุกคนในยุคนี้ สะดวกมากใน ทุกเพศทุกวัยและไม่ใช่เรื่องของคนแก่...</font>
                  </p>
                  <br>
                  <div class="reading">
                    <a href="reading">อ่านต่อ ></a>
                  </div>
                  <br>
              </div>
            </div>
  
            <button class="w3-button w3-none w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-none w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>
          <br>
          <br>
          <br>
        </div>
  
  
  
        <!--gallery-->
        <div class="gallerys">
          <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <h1>รูปภาพ</h1>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="TableLine">&nbsp;</td>
            </tr>
          </table>
          <div class="all">
            <a href="all">ดูทั้งหมด ></a>
          </div>
  
          <div class="content w3-display-container">
            <div class="mySlidess">
  
              <div class="gall7">
                <img class="gall07" src="image\gall7.jpg" style="width:100%">
              </div>
  
              <div class="gall8">
                <img class="gall08" src="image\gall8.jpg" style="width:100%">
              </div>
  
              <div class="gall9">
                <img class="gall09" src="image\gall9.jpg" style="width:100%">
              </div>
  
              <div class="gall10">
                <img class="gall010" src="image\gall10.jpg" style="width:100%">
              </div>
  
            </div>
  
            <div class="mySlidess">
  
              <div class="gall7">
                <img class="gall07" src="image\gall10.jpg" style="width:100%">
              </div>
  
              <div class="gall8">
                <img class="gall08" src="image\gall9.jpg" style="width:100%">
              </div>
  
              <div class="gall9">
                <img class="gall09" src="image\gall8.jpg" style="width:100%">
              </div>
  
              <div class="gall10">
                <img class="gall010" src="image\gall7.jpg" style="width:100%">
              </div>
            </div>
  
            <button class="w3-button w3-none w3-display-left" onclick="plusDivss(-1)">&#10094;</button>
            <button class="w3-button w3-none w3-display-right" onclick="plusDivss(1)">&#10095;</button>
          </div>
          <br>
          <br>
          <br>
        </div>
  
  
  
        <div class="foot">
          <h1>วัดวุฒาราม</h1>
          <h2>923 ซอย 8 วัดวุฒาราม ตำบล ในเมือง
            <br>อำเภอ เมืองขอนแก่น จังหวัด ขอนแก่น
            <br>40000</h2>
          <h3>โทร. 043 343 050
            <br>อีเมล์ info@watwutram.co.th</h3>
          <h4>Copyright watwutaram.co.th All Rights Reserved.</h4>
        </div>
  
  
  
  
  
  
  
  
    </font>
      
      <script src=js/slidecontent.js></script>
      <script src=js/gallslide.js></script>
    </body>
</body>



</html>