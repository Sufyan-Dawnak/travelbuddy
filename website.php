<?php
error_reporting(0)
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
      box-sizing: border-box;
    }

    /*TO STYLE THE BODY*/
    body {
      font-family: Arial;
      margin: 0;
      background-image:linear-gradient(to right,rgb(46, 175, 169),rgb(20, 80, 160));
      background-attachment: fixed;
      background-repeat: no-repeat;
    }


    /* Style the top navigation bar */
    .navbar {
      overflow: hidden;
      background-color: white;
      z-index: 1;
    }

    .navimage
    {
      width: 40px;
      height: 40px;
      border-radius:50%;
    }

    .navbar-right {
      float: right;
    }

    /* Style the topnav links */
    .navbar a {
      font-size: 31px;
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown
    {
      float:left;
      overflow: hidden;
    }

    .dropdown .dropbutton
    {
      font-size: 31px;  
      border: none;
      outline: none;
      color: black;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
      overflow: hidden;
    }

    @media screen and (max-width:800px) {

      .navbar a{
        font-size: 20px;
      }

      .dropdown .dropbutton{
        font-size: 20px;
      }

    }


    /* Change color on hover */
    .navbar a:hover ,.dropdown:hover .dropbutton{
      background-color: #ddd;
      color: black;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 150px;
      box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color:black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* For Row */

    .row{
      display: grid;
      grid-template-columns: 3fr 1fr;
      column-gap: 20px;
      padding: 20px;
    }

    /* TO MAKE LEFT COLUMN */
    .leftcolumn {
      display: block;
    }

    /* TO MAKE RIGHT COLUMN */
    .rightcolumn {
      background-color: inherit;
    }


    /* ADDING CARD TO THE PAGE */
    .card1{
      display: block;
      background-color:inherit;
      margin-top: 20px;
      height:41vw;
      width: 75vw;
    }

    .card {
      border-radius: 5%;
      background-color: white;
      z-index: 1;
      padding: 20px;
      margin-top: 20px;
      color: black;
    }

    .cimage
    {
      border: 3px solid black;
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 30%;
    }

    .cimage2
    {
      border: 3px solid black;
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 100%;      
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    @media screen and (max-width:800px){

      .row{
        grid-template-columns: 100%;
      }

      .card1{
        width: 100%;
        height: 41vw;
      }
    }

    /* FOOTER STYLE */
    .footer {
      background-color: white;
      padding: 20px;
      text-align: center;
      color: black;
      margin-top: 20px;
    }

    .footer-title{
      padding: 20px;
    }

    .footer-grid{
      display: grid;
      grid-template-columns: repeat(4,1fr);
    }

    .member-box{
      text-align: center;
    }

    .member-box img{
      max-width: 200px;
      width: 70%;
      border-radius:50%;
    }

    .member-box .txt{
      font-size: 24;
      font-weight: bold;
    }


    .cf3 {
      position:relative;
      height:100%;
      width:100%;
      text-align: center;
      justify-content: center;      
    }

    .cf3 img {
      max-width: 100%;
      max-height: 100%;
      display: block;
      width: 90%;
      border-radius: 5%;
      position:absolute;
      -webkit-transition: opacity 1s ease-in-out;
      -moz-transition: opacity 1s ease-in-out;
      -o-transition: opacity 1s ease-in-out;
      transition: opacity 1s ease-in-out;
    }

    @keyframes cf3FadeInOut {
      0% {
      opacity:1;
    }
    45% {
    opacity:1;
    }
    55% {
    opacity:0;
    }
    100% {
    opacity:0;
    }
    }

    .cf3 img.top {
      width: 95%;
      left: 2.5%;
      animation-name: cf3FadeInOut;
      animation-timing-function: ease-in-out;
      animation-iteration-count: infinite;
      animation-duration: 10s;
      animation-direction: alternate;
    }

    .cf3 img.bottom{
      left:5%;
    }

    .button{
      color:black;
      background-color: white;
    text-decoration: none;
    padding: 5px;
    }

    .button:hover
    {
      color:blue;
      background-color: white;
      padding: 5px;

    }

    .button1{
      border-radius: 5%;
      font-size: 21px;
    color:black;
    background-color: transparent;
    text-decoration: none;
    padding-right: 15px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
    }

    .button1:hover
    {
      color:black;
      background-color: rgb(214, 209, 209);
      padding-right: 15px;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-left: 5px;
      
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
      .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
      }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .topnav a {
        float: none;
        width: 100%;
      }
    }

    /* MODAL STYLING START */

    /* Input field styling*/
    input[type=text]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type=password]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /*Cancel button style*/
    .cancelbtn {
      font-size: 23;
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center's the image container*/
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      block-size: 350px;
    }

    /*Image styling and positioning*/
    img.avatar1 {
      padding-top: 260px;
      padding: 20px;
      text-align: center;
      width: 250px;
      height: 250px;
      border-radius: 50%;

    }

    img.avatar2 {
      padding:20px;
      text-align: center;
      width: 250px;
      height: 250px;
      border-radius: 50%;

    }

    img.avatar3 {
      padding: 20px;
    text-align: right;
      width: 250px;
      height: 250px;
      border-radius: 50%;

    }

    img.avatar4 {
      width: 30%;
      height:100%;
      border-radius: 50%;
    }


    /*Container padding */
    .container {
      padding: 16px;
    }

    .container2 {
      padding: 16px;
      background-color: white;
    }


    /* Background of the modal*/
    .modal1 {
      display: none; /*Hidden by default*/
      position: absolute; 
      z-index: 1; /*Displays on the top of the screen*/
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; /* Enable scroll if needed*/
      background-color: rgba(0,0,0,0.4); /*Gives background opacity with black colour*/
      padding-top: 60px;
    }

    /* Modal content box*/
    .modal1-content {
      background-color: white;
      margin: 5% auto 15% auto; 
      border: 1px solid #888; 
      color: white;
      width: 80%;
      height: 80%;
    }
    .modal1 .modal1-dailog
    {
      position:absolute;
      left:200px;
      width: 1250px;
      height: 500px;
    }

    /*Modal text sytling*/
    .mtxt
    {
      text-align: center;
      color: black;
    }


    /* Close button Style (x) */
    .close {
      position: absolute;
      right: 140px;
      top: 70px;
      color:black;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /*Button styling*/
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /*Cancel button style */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }


    span.psw{
      color: black;
      float: right;
      padding-top: 16px;
    }

    span.psw a{
      color:black;
      float: right;
      padding-left: 5px;
    }

    /* Refer the previous modal to understand the functioning of these classes*/
    .modal2 {
      display: none; 
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%;
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0,0,0,0.4);
      padding-top: 60px;
    }


    .modal2-content {
      background-color: white;
      margin: 5% auto 15% auto; 
      border: 1px solid #888;
      width: 80%;
    }

    .close2 {
      position:absolute;
      right: 175px;
      top: 140px;
      color: black;
      font-size: 35px;
      font-weight: bold;
    }

    .close2:hover,
    .close2:focus {
      color: red;
      cursor: pointer;
    }


    .modal3 { 
      display: none;
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%;
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0,0,0,0.4); 
      padding-top: 60px;
    }


    .modal3-content {
      background-color: white;
      margin: 5% auto 15% auto; 
      border: 1px solid #888;
      width: 80%; 
    }

    .modal4 {
      display: none; 
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4); 
      padding-top: 60px;
    }


    .modal4-content {
      background-color: white;
      margin: 5% auto 15% auto;
      border: 1px solid #888;
      width: 80%; 
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
    .psw {
        display: block;
        float: none;
        color: black;
      }
      .cancelbtn {
        width: 100%;
      }
    }
    /*MODAL END*/

    </style>
  </head>
<body>

<?php
include_once('header.html');
?>

<div class="navbar">
  <a href="index.php"><image src="images/home/home.jpg" class="navimage" ></image></a>
  <div class="dropdown">
    <button class="dropbutton">Donation</button>
    <div class="dropdown-content">
      <a href="donate-food.php">Food</a>
      <a href="money-donation.php">Money</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbutton">Registration</button>
    <div class="dropdown-content">
      <a href="registration-volunteer.php">Volunteer</a>
      <a href="registration-ngo.php">NGO</a>
      <a href="registration-hotel.php">Hotel</a>
    </div>
  </div>   
  <a href="provide-info.html">Provide Info</a>
  <div class="navbar-right"> 
    <a onclick="document.getElementById('id01').style.display='block'"><image src="images/home/avatar.jpg" class="navimage"></a>
  </div>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card1">
      <div class="cf3">
        <image class="bottom" src="images/home/pic2.jpg" ></image>
        <image class="top" src="images/home/pic1.jpg" ></image>
      </div>
    </div>
    <div class="card">
      <h2 align= center>THE NO HUNGER PROJECT</h2>
      <h3 align=right >Start Date, Jan 11, 2021</h3>
      <img src="images/home/logo.jpg" class="cimage"></img>
      <p><h3>The aim behind this project is :</h3></p>
      
      <h4>1.To reduce the food wasted in our country.</h4>
      <h4>2.Provide food to as many as needy people as possible</h4>
      <h4>3.To create a non-profitabe organisation that works for the betterment of society</h4>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Team</h2>
      <image src="images/home/ourlogo.png" class="cimage2"></image>
      <p>This project was started by the group of HADS coders.</p>
    </div>
    <div class="card">
      <h3>NGO's working with us</h3>
      <p><a class="button1" href="">1.NGO</a></p>
      <p><a class="button1" href="">2.NGO</a></p>
      <p><a class="button1" href="">3.NGO</a></p>
    </div>
    <div class="card">
      <h3>Food donated till now</h3>
      <p>3000 packets</p>
      <h3>Estimated Consumers remaining</h3>
      <p>3000 people</p>
      <h3>Volunteers on work</h3>
      <p>3000 volunteers</p>
      <a href="#" class="button">More Info</a>
    </div>
  </div>
</div>

<div class="footer">
  <h2 clhass="footer-title">OUR TEAM</h2>
  <div class="footer-grid">
    <div class="member-box">
      <image class="img" src="images/footer/coder1.jpeg"></image>
      <p>
        <h class="txt">SUFYAN DAWNAK</h>
      </p>
    </div>
    <div class="member-box">
      <image class="img" src="images/footer/coder2.jpeg"></image>
      <p>
        <h class="txt">DANIYAL DOLARE</h>
      </p>
    </div>
    <div class="member-box">
      <image class="img" src="images/footer/coder3.jpeg"></image>
      <p>
        <h class="txt">HAARISH KHAN</h>
      </p>
    </div>
    <div class="member-box">
      <image class="img" src="images/footer/coder4.jpeg"></image>
      <p>
        <h class="txt">AZAD ANSARI</h>
      </p>
    </div>
  </div>
</div>

<!--MODAL-->

<div id="id01" class="modal1">
  <div class="modal1-dailog">
  <form class="modal1-content animate" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <a href="login.php" >
        <img src="images/modal/volunteer.jpg"  class="avatar1"></a>
      <a href="hotellogin.php">  
      <img src="images/modal/hotel.jpg" alt="Avatar" class="avatar2"></a>
      <a href="ngologin.php">
      <img src="images/modal/ngo.png" alt="Avatar" class="avatar3"></a>
      <h1 class="mtxt">CHOOSE YOUR LOGIN TYPE</h1>
    </div>
    </div>
  </form>
  </div>
</div>


<!--MODAL END-->

</body>
</html>
