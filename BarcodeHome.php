<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['user_type']!="admin"){
  header("location:LoginSys.php");
}

 ?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet"  type="text/css"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script>
  function openSlideMenu(){
    document.getElementById('side-menu').style.width = '250px';
    document.getElementById('main').style.marginLeft = '250px';
  }
function closeSlideMenu(){
  document.getElementById('side-menu').style.width = '0';
  document.getElementById('main').style.marginLeft = '0';
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {

var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
var dayNames= [ "Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday" ];

var newDate = new Date();
newDate.setDate(newDate.getDate());

setInterval( function() {
	var hours = new Date().getHours();
	$(".hour").html(( hours < 10 ? "0" : "" ) + hours);
    var seconds = new Date().getSeconds();
	$(".second").html(( seconds < 10 ? "0" : "" ) + seconds);
    var minutes = new Date().getMinutes();
	$(".minute").html(( minutes < 10 ? "0" : "" ) + minutes);

    $(".month span,.month2 span").text(monthNames[newDate.getMonth()]);
    $(".date span,.date2 span").text(newDate.getDate());
    $(".day span,.day2 span").text(dayNames[newDate.getDay()]);
    $(".year span").html(newDate.getFullYear());
}, 1000);



$(".outer").on({
    mousedown:function(){
        $(".dribbble").css("opacity","1");
    },
    mouseup:function(){
        $(".dribbble").css("opacity","0");
    }
});



});
</script>
<style>
/* -- usable codes start -- */

html,
body,
div,
span,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
code,
del,
dfn,
em,
img,
q,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
dialog,
figure,
footer,
header,
hgroup,
nav,
section {
    margin: 0;
    padding: 0;
    border: 0;
    font-weight: inherit;
    font-style: inherit;
    font-size: 100%;
    font-family: inherit;
    vertical-align: baseline;
    text-decoration: none;
    list-style: none;
}
img {
    width: 100%
}
.anim04c {
    -webkit-transition: all .4s cubic-bezier(.5, .35, .15, 1.4);
    transition: all .4s cubic-bezier(.5, .35, .15, 1.4);
}

html,
body {
    width: 100%;
    height: 100%;
    font-family: 'Source Sans Pro', sans-serif;
    background: #eee;
    color: #666;
}
body {
    overflow-x: hidden;
    overflow-y: auto;
}
/*-----*/

.outer {
    position: relative;
    top: 50%;
    z-index: 1;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    cursor: pointer;
}
/*-----*/

.signboard {
    width: 100px;
    height: 100px;
    margin: auto;
    color: #fff;
    border-radius: 10px;
}
/*-----*/

.front {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 3;
    background: #ff726b;
    text-align: center;
}
.right {
    position: absolute;
    right: : 0;
    z-index: 2;
    -webkit-transform: rotate(-10deg) translate(7px, 8px);
    -moz-transform: rotate(-10deg) translate(7px, 8px);
    -ms-transform: rotate(-10deg) translate(7px, 8px);
    -o-transform: rotate(-10deg) translate(7px, 8px);
    transform: rotate(-10deg) translate(7px, 8px);
    background: #EFC94C;
}
.left {
    position: absolute;
    left: 0;
    z-index: 1;
    -webkit-transform: rotate(5deg) translate(-4px, 4px);
    -moz-transform: rotate(5deg) translate(-4px, 4px);
    -ms-transform: rotate(5deg) translate(-4px, 4px);
    -o-transform: rotate(5deg) translate(-4px, 4px);
    transform: rotate(5deg) translate(-4px, 4px);
    background: #3498DB;
}
/*-----*/

.outer:hover .inner {
    -webkit-transform: rotate(0) translate(0);
    -moz-transform: rotate(0) translate(0);
    -ms-transform: rotate(0) translate(0);
    -o-transform: rotate(0) translate(0);
    transform: rotate(0) translate(0);
}
/*-----*/

.outer:active .inner {
    -webkit-transform: rotate(0) translate(0) scale(0.9);
    -moz-transform: rotate(0) translate(0) scale(0.9);
    -ms-transform: rotate(0) translate(0) scale(0.9);
    -o-transform: rotate(0) translate(0) scale(0.9);
    transform: rotate(0) translate(0) scale(0.9);
}
.outer:active .front .date {
    -webkit-transform: scale(2);
}
.outer:active .front .day,
.outer:active .front .month {
    visibility: hidden;
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
}
.outer:active .right {
    -webkit-transform: rotate(-5deg) translateX(80px) scale(0.9);
    -moz-transform: rotate(-5deg) translateX(80px) scale(0.9);
    -ms-transform: rotate(-5deg) translateX(80px) scale(0.9);
    -o-transform: rotate(-5deg) translateX(80px) scale(0.9);
    transform: rotate(-5deg) translateX(80px) scale(0.9);
}
.outer:active .left {
    -webkit-transform: rotate(5deg) translateX(-80px) scale(0.9);
    -moz-transform: rotate(5deg) translateX(-80px) scale(0.9);
    -ms-transform: rotate(5deg) translateX(-80px) scale(0.9);
    -o-transform: rotate(5deg) translateX(-80px) scale(0.9);
    transform: rotate(5deg) translateX(-80px) scale(0.9);
}
/*-----*/

.outer:active .calendarMain {
    -webkit-transform: scale(1.8);
    opacity: 0;
    visibility: hidden;
}
.outer:active .clock {
    -webkit-transform: scale(1.4);
    opacity: 1;
    visibility: visible;
}
.outer:active .calendarNormal {
    bottom: -30px;
    opacity: 1;
    visibility: visible;
}
.outer:active .year {
    top: -30px;
    opacity: 1;
    visibility: visible;
    letter-spacing: 3px;
}
/*-----*/

.calendarMain {
    width: 100%;
    height: 100%;
    position: absolute;
    opacity: 1;
}
.month,
.day {
    font-size: 10px;
    line-height: 30px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 3px;
}
.date {
    font-size: 40px;
    line-height: 40px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 3px;
}
/*-----*/

.clock {
    width: 100%;
    height: 100%;
    position: absolute;
    font-size: 40px;
    line-height: 100px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    opacity: 0;
    visibility: hidden;
}
/*-----*/

.year {
    width: 100%;
    position: absolute;
    top: 0;
    font-size: 14px;
    line-height: 30px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    color: #ff726b;
}
.calendarNormal {
    width: 100%;
    position: absolute;
    bottom: 0;
    font-size: 14px;
    line-height: 30px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    opacity: 0;
    visibility: hidden;
}
.date2 {
    color: #ff726b;
}
.day2 {
    color: #3498DB;
}
.month2 {
    color: #EFC94C;
}
/* -- usable codes end -- */

/* -- unusable codes (text, logo, etc.) -- */

.info {
    width: 100%;
    height: 25%;
    position: absolute;
    top: 15%;
    text-align: center;
    opacity: 0;
}
.info li {
    width: 100%;
}
.hover,
.click,
.yeaa {
    font-size: 14px;
    line-height: 25px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
    bottom: 0;
    opacity: 1;
}
.dribbble {
    position: absolute;
    top: -60px;
    font-size: 14px;
    opacity: 0;
}
em {
    color: #ed4988;
}
.designer {
    width: 100%;
    height: 50%;
    position: absolute;
    bottom: 0;
    text-align: center;
    opacity: 0;
}
.designer li {
    width: 100%;
    position: absolute;
    bottom: 30%;
}
.designer a {
    width: 30px;
    height: 30px;
    display: block;
    position: relative;
    border-radius: 100%;
    margin: auto;
    color: rgba(46, 204, 113, 0.55);
}
.designer a:after {
    position: absolute;
    top: 0;
    left: 40px;
    font-size: 14px;
    line-height: 33px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    white-space: nowrap;
}
.designer a:hover:after {
    color: #2ecc71;
}
.designer img {
    display: block;
    border-radius: 100%;
}
body:hover .info,
body:hover .designer {
    opacity: 1;
}
::selection {
    background: transparent;
}
::-moz-selection {
    background: transparent;
}

</style>
</head>
<body>

    <nav class="navbar">
      <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
          <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff"
            stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff"
            stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff"
            stroke-width="5"/>
          </svg>
        </a>
      </span>

    <div class="navbar-centered">
      <h1 style="font-size:20px" ><font color="white" style="font-family:arial">Admin Panel </font></h1>
    </div>

    <ul class="navbar-nav" padding="left">
      <li><a href="logout.php"> Logout</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a hredf="#" class="btn-close" onclick="closeSlideMenu()" style="color: rgb(255,255,255)">&times;</a>
    <a href="BarcodeHome.php"> Home</a>
    <a href="registration.php"> Registration</a>
    <a href="item.php"> Item</a>
    <a href="/barcode/koolreport_example/examples/reports/datasources/mysql_report/"> Statistics</a>
    <a href="controlaccount.php"> Control Account</a>
  </div>
  <div id="main">
    <h1> Dashboard</h1>
  </div>



  <table class="table">
    <thead>
      <tr>
        <th scope="col" >

              <!-- main codes start -->
              <div class="signboard outer">
                  <div class="signboard front inner anim04c">
                      <li class="year anim04c">
                          <span></span>
                      </li>
                      <ul class="calendarMain anim04c">
                          <li class="month anim04c">
                              <span></span>
                          </li>
                          <li class="date anim04c">
                              <span></span>
                          </li>
                          <li class="day anim04c">
                              <span></span>
                          </li>
                      </ul>
                      <li class="clock minute anim04c">
                          <span></span>
                      </li>
                      <li class="calendarNormal date2 anim04c">
                          <span></span>
                      </li>
                  </div>
                  <div class="signboard left inner anim04c">
                      <li class="clock hour anim04c">
                          <span></span>
                      </li>
                      <li class="calendarNormal day2 anim04c">
                          <span></span>
                      </li>
                  </div>
                  <div class="signboard right inner anim04c">
                      <li class="clock second anim04c">
                          <span></span>
                      </li>
                      <li class="calendarNormal month2 anim04c">
                          <span></span>
                      </li>
                  </div>
              </div>
              <!-- main codes end -->


              <div class="designer anim04c">
                  <li>
                      <a href="https://creativemarket.com/mselmany" target="_blank">
                          <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash2/t5/1117447_100001638983788_1284464661_q.jpg" alt="">
                      </a>
                  </li>
              </div>

        <th scope="col">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>

  <div class="carousel-inner" style="height:500px !important;">
    <div class="carousel-item active">
      <img src="/barcode/image/bg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/barcode/image/bg-01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/barcode/image/bg-06.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/barcode/image/east-01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/barcode/image/west-01.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</th>


</th>
 </tr>
  </thead>

</body>


</html>
