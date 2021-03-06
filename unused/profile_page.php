<html lang="en"><head>
  <title>Welcome to Rotaract Cairo Fairways Club</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/png" href="img/Rotaract.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
/**/

  .carousel-inner img{
      text-align;center;
      width:90%;
      height:80%;
  }
  /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
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

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
 
  border-radius: 60%;
}

.container {
  padding: 16px;
}
float:right;
span.psw {
 
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
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
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

#list-1 li{
display:inline;
padding:10px;

}
#list-2 li{
display:inline;
padding:10px;

}
#untext {display:none;color:red;}
#pwdtext {display:none;color:red;}
#cause{

padding:30px;
color:darkred;
font-family:Courier New ;}

#club-magazine{
padding-top:20px;

color:darkred;
font-family:Courier New ;
}
#club-social-media{
padding-top:20px;

color:darkred;
font-family:Courier New ;
}
#mytable td{
padding:20px;

}

.working-image { -webkit-animation:rotation 5s infinite linear; }
@-webkit-keyframes rotation {
   from { -webkit-transform:rotate(0deg); }
   to   { -webkit-transform:rotate(359deg); }
}

<!------------------------------------------trial social media awesome -------------------------------------------------------->
.container-som{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-20%, -20%);

 
}

.social-media {
    display: flex;
    padding-bottom: 25px;
    border-bottom: 1px solid rgba(255, 255, 255, .3);
	
}

.social-media i {
    position: relative;
    width: 50px;
    height: 50px;
    margin: 0 20px;
    line-height: 50px;
    font-size: 28px;
    text-align: center;
    z-index: 10;
    color: #152733;
    transition: all .5s;
}

.social-media i:hover {
    color: #c6934b;
}

.social-media i::after {
    content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border: 2px ;
    transform: rotate(45deg);
    top: -1px;
    left: -2px;
    transition: all .5s ease-in-out;
    box-shadow: 0 0 50px 10px rgba(24, 42, 54, 0);
    z-index: -1
}

.social-media i:hover::after {
    box-shadow: 0 0 0 0px #152733;
    background-color: rgba(21, 39, 51, 0.8);
}

.social-media .media-icon:nth-child(2) i {
    padding-left: 2px;
}

<!-----------------------------------------End of social media section --------------------------------------------------------->
<!-----------------------------------------start of Activities Section---------------------------------------------------------->

.col-sm-4
	{
		padding: 15px;
	}
	.flipy {
  -webkit-perspective: 800;
   width: 100%;
   height: 240px;
    position: relative;
    border: 1px solid #ccc;
}
.flipy .card:hover {
  -webkit-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
}
.flipy .card {
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  -webkit-transition: 0.5s;
}
.flipy .card .face {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  -webkit-backface-visibility: hidden ;
  z-index: 2;
    font-family: Georgia;
    font-size: 3em;
    text-align: center;
    line-height: 200px;
}
.flipy .card .front {
  position: absolute;
  z-index: 1;
    background: #f8f8f8;
    color: white;
    cursor: pointer;
}
.flipy .card .back {
	-webkit-transform: rotateY(180deg);
	-webkit-transform: rotateY(180deg);
	-moz-transform: rotateY(180deg);
	-o-transform: rotateY(180deg);
	background: blue;
	background: #f8f8f8;
	color: black;
	cursor: pointer;
}
/*vertical-flip*/
.flipx {
	-webkit-perspective: 800;
	width: 100%;
	height: 240px;
	position: relative;
	border: 1px solid #ccc;
}
.flipx .card:hover {
  -webkit-transform: rotateX(180deg);
  -webkit-transform: rotateX(180deg);
  -moz-transform: rotateX(180deg);
  -o-transform: rotateX(180deg);
}
.flipx .card {
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  -webkit-transition: 0.5s;
}
.flipx .card .face {
	width: 100%;
	height: 100%;
	position: absolute;
	overflow: hidden;
	-webkit-backface-visibility: hidden ;
	z-index: 2;
	font-family: Georgia;
	font-size: 3em;
	text-align: center;
	line-height: 200px;
}
.flipx .card .front {
  position: absolute;
  z-index: 1;
    background: #f8f8f8;
    color: white;
    cursor: pointer;
}
.flipx .card .back {
	-webkit-transform: rotateX(180deg);
	-webkit-transform: rotateX(180deg);
	-moz-transform: rotateX(180deg);
	-o-transform: rotateX(180deg);
    background: blue;
    background: #f8f8f8;
    color: black;
    cursor: pointer;
}
/*img-fold*/
.view {
	width: 300px;
	 height: 230px;
	 margin: 10px 0px 0px;
	position: relative;
	border: 3px solid #fff;
	box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.1);
	background: #333;
	-webkit-perspective: 500px;
	-moz-perspective: 500px;
	-o-perspective: 500px;
	-ms-perspective: 500px;
	perspective: 500px;
  background-size:100%;
}

.view:hover img {
	left: -85px;
}

.view div.view-back {
	background: #666;
}
.view .slice{
	width: 60px;
	height: 100%;
	z-index: 100;
	
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	
	-webkit-transform-origin: left center;
	-moz-transform-origin: left center;
	-o-transform-origin: left center;
	-ms-transform-origin: left center;
	transform-origin: left center;
	
	-webkit-transition: -webkit-transform 150ms ease-in-out;
	-moz-transition: -moz-transform 150ms ease-in-out;
	-o-transition: -o-transform 150ms ease-in-out;
	-ms-transition: -ms-transform 150ms ease-in-out;
	transition: transform 150ms ease-in-out;
		
}

.view div.view-back{
	width: 50%;
	height: 100%;
	position: absolute;
	right: 0;
	background: #666;
	z-index: 0;
}

.view-back span {
	display: block;
	float: right;
	padding: 5px 20px 5px;
	width: 100%;
	text-align: right;
	font-size: 16px;
	color: rgba(255,255,255,0.6);
}

.view-back span:first-child {
	padding-top: 20px;
}

.view-back a {
	display: bock;
	font-size: 18px;
	color: rgba(255,255,255,0.4);
	position: absolute;
	right: 15px;
	bottom: 15px;
	border: 2px solid rgba(255,255,255,0.3);
	border-radius: 50%;
	width: 30px;
	height: 30px;
	line-height: 22px;
	text-align: center;
	font-weight: 700;
}

.view-back a:hover {
	color: #fff;
	border-color: #fff;
}

.view-back span[data-icon]:before {
    content: attr(data-icon);
    font-family: 'icons';
    color: #aaa;
	color: rgba(255,255,255,0.2);
	text-shadow: 0 0 1px rgba(255,255,255,0.2);
	padding-right: 5px;
}

.view .s2, 
.view .s3, 
.view .s4, 
.view .s5 {
	-webkit-transform: translate3d(60px,0,0);
	-moz-transform: translate3d(60px,0,0);
	-o-transform: translate3d(60px,0,0);
	-ms-transform: translate3d(60px,0,0);
	transform: translate3d(60px,0,0);
}
.view .s1 {
	background-position: 0px 0px;
}
.view .s2 {
	background-position: -60px 0px;
}
.view .s3 {
	background-position: -120px 0px;
}
.view .s4 {
	background-position: -180px 0px;
}
.view .s5 {
	background-position: -240px 0px;
}

.view .overlay {
	width: 60px;
	height: 100%;
	opacity: 0;
	position: absolute;
	-webkit-transition: opacity 150ms ease-in-out;
	-moz-transition: opacity 150ms ease-in-out;
	-o-transition: opacity 150ms ease-in-out;
	-ms-transition: opacity 150ms ease-in-out;
	transition: opacity 150ms ease-in-out;
}

.viewFold:hover .overlay {
	opacity: 1;
}

.viewFold img {
	position: absolute;
	z-index: 0;
	-webkit-transition: left 0.3s ease-in-out;
	-o-transition: left 0.3s ease-in-out;
	-moz-transition: left 0.3s ease-in-out;
	-ms-transition: left 0.3s ease-in-out;
	transition: left 0.3s ease-in-out;
}
.viewFold:hover .s2{
	-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,-45deg);
	-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,-45deg);
	-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,-45deg);
	-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,-45deg);
	transform: translate3d(59px,0,0) rotate3d(0,1,0,-45deg);
}
.viewFold:hover .s3{
	-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
}
.viewFold:hover .s5{
	-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
	transform: translate3d(59px,0,0) rotate3d(0,1,0,90deg);
}
.viewFold:hover .s4{
	-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,-90deg);
	-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,-90deg);
	-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,-90deg);
	-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,-90deg);
	transform: translate3d(59px,0,0) rotate3d(0,1,0,-90deg);
}

.viewFold .s1 > .overlay {
	background: -moz-linear-gradient(right, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0) 100%);
	background: -webkit-linear-gradient(right, rgba(0,0,0,0.05) 0%,rgba(0,0,0,0) 100%);
	background: -o-linear-gradient(right, rgba(0,0,0,0.05) 0%,rgba(0,0,0,0) 100%);
	background: -ms-linear-gradient(right, rgba(0,0,0,0.05) 0%,rgba(0,0,0,0) 100%);
	background: linear-gradient(right, rgba(0,0,0,0.05) 0%,rgba(0,0,0,0) 100%);
}

.viewFold .s2 > .overlay {
	background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255, 255, 255, 0.2) 100%);
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255, 255, 255, 0.2) 100%);
	background: -o-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255, 255, 255, 0.2) 100%);
	background: -ms-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255, 255, 255, 0.2) 100%);
	background: linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255, 255, 255, 0.2) 100%);
}

.viewFold .s3 > .overlay {
	background: -moz-linear-gradient(right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);
	background: -webkit-linear-gradient(right, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.2) 100%);
	background: -o-linear-gradient(right, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.2) 100%);
	background: -ms-linear-gradient(right, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.2) 100%);
	background: linear-gradient(right, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.2) 100%);
}

.viewFold .s4 > .overlay {
	background: -moz-linear-gradient(left, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);
	background: -webkit-linear-gradient(left, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%);
	background: -o-linear-gradient(left, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%);
	background: -ms-linear-gradient(left, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%);
	background: linear-gradient(left, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%);
}

.viewFold .s5 > .overlay {
	background: -moz-linear-gradient(left, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);
	background: -webkit-linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: -o-linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: -ms-linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
}
/*fold-rounde*/
.viewRound {
	-webkit-perspective: 800px;
	-moz-perspective: 800px;
	-o-perspective: 800px;
	-ms-perspective: 800px;
	perspective: 800px;
}
.vviewRoundiew:hover .s1{
	-webkit-transition-delay: 200ms;
	-moz-transition-delay: 200ms;
	-o-transition-delay: 200ms;
	-ms-transition-delay: 200ms;
	transition-delay: 200ms;
	
	-webkit-transform: rotate3d(0,1,0,-3deg);
	-moz-transform: rotate3d(0,1,0,-3deg);
	-o-transform: rotate3d(0,1,0,-3deg);
	-ms-transform: rotate3d(0,1,0,-3deg);
	transform: rotate3d(0,1,0,-3deg);
}
.viewRound:hover .s2{
	-webkit-transition-delay: 150ms;
	-moz-transition-delay: 150ms;
	-o-transition-delay: 150ms;
	-ms-transition-delay: 150ms;
	transition-delay: 150ms;
	
	-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,-10deg);
	-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,-10deg);
	-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,-10deg);
	-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,-10deg);
	transform: translate3d(59px,0,0) rotate3d(0,1,0,-10deg);
}
.viewRound:hover .s3{
	-webkit-transition-delay: 100ms;
	-moz-transition-delay: 100ms;
	-o-transition-delay: 100ms;
	-ms-transition-delay: 100ms;
	transition-delay: 100ms;
	
	-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,-16deg);
	-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,-16deg);
	-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,-16deg);
	-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,-16deg);
	transform: translate3d(59px,0,0) rotate3d(0,1,0,-16deg);
}
.viewRound:hover .s4{
	-webkit-transition-delay: 50ms;
	-moz-transition-delay: 50ms;
	-o-transition-delay: 50ms;
	-ms-transition-delay: 50ms;
	transition-delay: 50ms;
	
	-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,-30deg);
	-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,-30deg);
	-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,-30deg);
	-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,-30deg);
	transform: translate3d(59px,0,0) rotate3d(0,1,0,-30deg);
}
.viewRound:hover .s5{
	-webkit-transform: translate3d(60px,0,0) rotate3d(0,1,0,-42deg);
	-moz-transform: translate3d(60px,0,0) rotate3d(0,1,0,-42deg);
	-o-transform: translate3d(60px,0,0) rotate3d(0,1,0,-42deg);
	-ms-transform: translate3d(60px,0,0) rotate3d(0,1,0,-42deg);
	transform: translate3d(60px,0,0) rotate3d(0,1,0,-42deg);
}

.viewRound .s4 > .overlay {
	background: -moz-linear-gradient(right, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);
	background: -webkit-linear-gradient(right, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: -o-linear-gradient(right, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: -ms-linear-gradient(right, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: linear-gradient(right, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
}

.viewRound .s5 > .overlay {
	background: -moz-linear-gradient(left, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);
	background: -webkit-linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: -o-linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: -ms-linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
	background: linear-gradient(left, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
}

.viewRound div.view-back{
	background: #0a0a0a;
	background: -moz-linear-gradient(left, #0a0a0a 0%, #666666 100%);
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,#0a0a0a), color-stop(100%,#666666));
	background: -webkit-linear-gradient(left, #0a0a0a 0%,#666666 100%);
	background: -o-linear-gradient(left, #0a0a0a 0%,#666666 100%);
	background: -ms-linear-gradient(left, #0a0a0a 0%,#666666 100%);
	background: linear-gradient(left, #0a0a0a 0%,#666666 100%);
}
/*flip-bottom*/
.flip-btm img
{
	display: block;
	width: 100%;
	height: 240px;
}
.flip-btm .flipBtmDiv
{
	position: absolute;
	right: 15px;
	left: 15px;
	bottom: 15px;
	top: 30%;
	background-color: #ccc;
	padding: 15px;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transform: rotateX(90deg);
	-webkit-transform: rotateX(90deg);
	-moz-transform: perspective(300px)  rotateX(90deg);
	-o-transform: rotateX(90deg);
	    transform-origin: 50% 100% 0;
	-webkit-transition: 0.5s;
}
.flip-btm .flipBtmDiv img
{
	display: block;
	width: 40%;
	height: auto;
	margin: 0 auto;
	vertical-align: middle;
}
.flip-btm:hover .flipBtmDiv
{
	-webkit-transform: rotateX(0deg);
	-webkit-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-o-transform: rotateX(0deg);
}
/*zoom-out*/
.zoombox
{
	background-color: #333;
	overflow: hidden;
}
.zoombox img.zoomboximg
{
	width: 100%;
	height: 240px;
	transform: scale(1.5);
	-webkit-transition: 2s ease-in;
	animation-duration: 10s;
}
.zoombox .zoomboxDiv
{
	position: absolute;
	right: 60px;
	left: 60px;
	top: 60px;
	bottom: 60px;
	display: block;
	background-color: transparent;
	border:1px solid #fff;
	padding: 30px;
	text-align: center;
	transform: scale(0);
	-webkit-transition: 0.5s ease-in-out;
}
.zoombox .zoomboxDiv img
{
	width: 50%;
	height: auto;
}
.zoombox:hover img.zoomboximg
{
	opacity: .3;
	transform: scale(1);
}
.zoombox:hover .zoomboxDiv
{
	transform: scale(1);
}
/*zoom-in*/
.zoominbox
{
	background-color: #333;
	overflow: hidden;
}
.zoominbox img.zoomboximg
{
	width: 100%;
	height: 240px;
	transform: scale(1);
	-webkit-transition: 5s ease-in;
	animation-duration: 10s;
	animation-delay: 3s;
}
.zoominbox .zoominDiv
{
	position: absolute;
	right: 60px;
	left: 60px;
	top: 60px;
	bottom: 60px;
	display: block;
	background-color: transparent;
	border:1px solid #fff;
	padding: 30px;
	text-align: center;
	opacity: 0;
	transform: scale(1.5);
	-webkit-transition: 0.5s ease-in-out;
}
.zoominbox .zoominDiv img
{
	width: 50%;
	height: auto;
}
.zoominbox:hover img.zoomboximg
{
	opacity: .3;
	transform: scale(2);
}
.zoominbox:hover .zoominDiv
{
	opacity: 1;
	transform: scale(1);
}







<!-----------------------------------------End of Activities Section---------------------------------------------------------->
</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Set the date we're counting down to
var countDownDate = new Date("april 1, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);



</script>



</head>
<body>

<div class="jumbotron text-center" style="padding:18px;margin:-10px;">
<img src="img/rotaract.png" height="100" width="100">&nbsp;&nbsp;<img src="img/Rotary.png" class="working-image" height="100" width="100">
  <h1 style="color:darkred;font-size:30 ">Welcome to Rotaract Cairo Fairways</h1>
  <p id="demo" style="color:darkred;font-size:25 "></p>
</div>
<!---------------------------------------------Start of the nav bar list ------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon" ></span>
  </button>

<a class="navbar-toogler" href="#" ></a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03" >
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto" >
      
     <li class="nav-item " >
        <a class="nav-link " href="#" >Home</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#cause" title="Club's recent activities">Activities</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#Club-magazine"  title="Read the periodical club magazine">Club Magazine</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#Club-social-media"  title="Follow our social media and contact us whenever you want">Social Media</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"  title="Contribute with us to make our community great">Donate Now</a>
      </li>
	   
	  <li class="nav-item">
       
	<a href="#" class="nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">sign-in</a>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="profile_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img/user.png" alt="Avatar" class="avatar" style="max-height:70%; max-width:70%;" >
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
	   <p id="untext">WARNING! Caps lock is ON. </p>
	   <input id="myInput1" type="text" placeholder="Enter Username" name="uname" required>
     
	   
      <label for="psw"><b>Password</b></label>
      <p id="pwdtext">WARNING! Caps lock is ON.</p>
	  <input id="myInput2" type="password" placeholder="Enter Password" name="psw" required>
        
		 
      <button type="submit">Login</button>
      
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
      </li>
    </ul>
   
  </div>
</nav>
<!---------------------------------------------------End of the nav bar list ------------------------------------------------------------------------>	
<!---------------------------------------------------Start the carousel Navigator-------------------------------------------------------------------->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-color:#F8F8F8; padding-top:10px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
	
     <a href="img/meeting20.jpeg" target="_blank"> <img  class="rounded mx-auto" src="img/meeting20.jpeg"  alt="First slide"></a>
	  

</div>

    <div class="carousel-item">
	
     <a href="img/meeting2.jpeg" target="_blank"> <img class="rounded mx-auto"  src="img/meeting2.jpeg" alt="Second slide"></a>
    </div>
    <div class="carousel-item">
    <a href="img/meeting3.jpeg" target="">  <img class="rounded mx-auto"  src="img/meeting3.jpeg" alt="Third slide"></a>
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
<!------------------------------------------------------End of Carousel Navigator------------------------------------------------------------------>
<!--------------------------------------------------Start activities section ---------------------------------------------------------------------->
<div class="container"  style=" background-image:url(img/map.png);  background-position:center;background-repeat:no-repeat;max-width:100%; max-height:100%;background-size:cover;  text-align:center; margin:0;padding:0;"> 
 <div id="cause">
  <h1> Our Activities</h1>
	</div>
	<div class="container" >
	<div class="row img-thumbnail"  >
<div class="col-sm-4 ">
<div class="zoombox " >
	<img src="img/Peace.jpg" class="zoomboximg">
	<div class="zoomboxDiv ">
		<p>Promoting peace</p>
	</div><!--div-->
</div><!--zoombox-->
</div><!--col-4-->
<div class="col-sm-4 img-thumbnail">
<div class="zoominbox">
	<img src="img/Peace.jpg" class="zoomboximg">
	<div class="zoominDiv">
		<img src="http://davidwalsh.name/demo/logo.png">
	</div><!--div-->
</div><!--zoombox-->
</div><!--col-4-->
<div class="col-sm-4">

<div class="zoominbox">
	<img src="img/Peace.jpg" class="zoomboximg">
	<div class="zoominDiv">
		<img src="http://davidwalsh.name/demo/logo.png">
	</div><!--div-->
</div><!--zoombox-->

</div><!--col-4-->
</div><!--row-->
<!-----------------------------------First row -------------------------------------------------------------------->
	<div class="row img-thumbnail" >
<div class="col-sm-4">
<div class="zoombox">
	<img src="img/Peace.jpg" class="zoomboximg">
	<div class="zoomboxDiv">
		<img src="http://davidwalsh.name/demo/logo.png">
	</div><!--div-->
</div><!--zoombox-->
</div><!--col-4-->
<div class="col-sm-4">
<div class="zoominbox">
	<img src="img/Peace.jpg" class="zoomboximg">
	<div class="zoominDiv">
		<img src="http://davidwalsh.name/demo/logo.png">
	</div><!--div-->
</div><!--zoombox-->
</div><!--col-4-->
<div class="col-sm-4">

<div class="zoominbox">
	<img src="img/Peace.jpg" class="zoomboximg">
	<div class="zoominDiv">
		<img src="http://davidwalsh.name/demo/logo.png">
	</div><!--div-->
</div><!--zoombox-->

</div><!--col-4-->
</div><!--Row-->
</div><!--container-->	




<!--------------------------------------------------------------------End of activities section------------------------------------------------------->
<!-------------------------------------------------------------------Start of club magazine section -------------------------------------------------->
<div class="container" style=" background-image:url(img/wall.jpg); background-position:center;background-repeat:no-repeat;max-width:100%; max-height:auto;background-size:cover;  text-align:center;margin:0;padding:0;margin-top:30px;">
  <div id="Club-magazine">
  <h1 style="color:darkred; margin-top:20px;"> Club Magazine </h1>
	

<div class="accordion" id="accordionExample" style="margin-top:25px;opacity:0.7;">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none;color:darkred; 	">
           <img src="img/Rotary.png" class="working-image"style="max-height:60px; max-width:60px;margin-left:-50px;" > Rotary Magazine Issue of March, 2020
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingtwos" data-parent="#accordionExample" >
      <div class="card-body">
	  <iframe class="embed-responsive-item vh-100 vw-100 shadow-none p-3 mb-5 bg-dark rounded" scrolling="no" src="magazine/march2020.pdf"  allowfullscreen style="max-width:100%;"></iframe>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <img src="img/Rotary.png" class="working-image"style="max-height:60px; max-width:60px;margin-left:-50px;">  Rotary Magazine Issue of April,2020
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <!-- april's magazine to be displayed -->
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       <img src="img/Rotary.png" class="working-image"style="max-height:60px; max-width:60px; margin-left:-50px;">  Rotary Magazine Issue of May, 2020
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
		<!-- May's magazine to be displayed -->
		<p> Coming soon </p>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<!-------------------------------------------------------------End of club magazine section -------------------------------------------------------->
<!-------------------------------------------------------------start social media section ---------------------------------------------------------->
<div class="container" style="">
  <div id="Club-social-media">
  <h1 style="color:darkred; margin-top:20px;"> Club on Social Media </h1>
	<h4 style="color:darkred; margin-top:30px;"> Follow us on  Social Media </h4>

<div class="container-som" >
	    	   <div class="social-media">
	
			<div class="media-icon"><a href=""><i class="fab fa-facebook-f"></i></a></div>
			<div class="media-icon"><a href=""><i class="fab fa-twitter"></i></a></div>
			<div class="media-icon"><a href=""><i class="fab fa-instagram"></i></a></div>
			<div class="media-icon"><a href=""><i class="fab fa-youtube"></i></a></div>
	

		</div>
	    </div>

</div>
</div>

<!----------------------------------------------------------------End of club social media section ------------------------------------------------->
<div class="jumbotron text-center " style="margin-bottom:0; " >
  <p style="float:left;color:#549EE8; font-family:Courier New ;font-size:19;">Copyrights to Rotaract Cairo Fairways<sup> &copy; </sup>2020. </p>
  
 
  
	   
	</div>   
	   
  <!-----------------------------------------------------Javascript section for caps lock detection ------------------------------------------------->       
<script>
var input = document.getElementById("myInput1");
var untext = document.getElementById("untext");
input.addEventListener("keyup", function(Event) {

if (event.getModifierState("CapsLock")) {
    untext.style.display = "block";
  } else {
    untext.style.display = "none"
  }
});

var input = document.getElementById("myInput2");
var pwdtext = document.getElementById("pwdtext");
input.addEventListener("keyup", function(Event) {

if (event.getModifierState("CapsLock")) {
    pwdtext.style.display = "block";
  } else {
    pwdtext.style.display = "none"
  }
});





</script>
</body></html>