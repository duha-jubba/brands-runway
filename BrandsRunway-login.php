</!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

  <link rel="stylesheet" href="./style1.css">

  <title>Brands Runway</title>

<style type="text/css">

body {
  
  font-family: "Roboto";
  background: #e2e4e9;
}

.first-bar {
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  height: 65px;
  background: #29333d;
  /*background: #2c3e50;*/
  width: 100%;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
  transition: all .2s ease-in;
}
.menu-wrapper a {
  text-decoration: none;
  color: #fff;
}
.left-bar {
  position: 130px * 65px ;
  float: left;
  overflow: hidden;
}
.logo{
  position: relative;
  top: -25px;
  left: 75px;
  width: 115px;
  padding: 10px;
  display: inline-block;
  float: left;
  border: 8;
  border-radius: 25px;
  border-color: #ff9f80;

}

.input{
		appearance: none
		background: transparent
		border: 0
		color: inherit
		font: inherit
		outline: 0
}

.button{
		cursor: pointer
		padding: 0 0.25em
}
		
/* social icon */

.fa-facebook {
  position: fixed;
  left:1355px;
  top:16;
  padding: 8px;
  background: #dfe4ea;
  color: #2c3e50;
  font-size: 15px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

.fa-twitter {
  position: fixed;
  left:1300px;
  top:16;
  padding: 8px;
  background: #dfe4ea;
  color: #2c3e50;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

.fa-google {
  position: fixed;
  left:1250px;
  top:16;
  padding: 8px;
  background: #dfe4ea;
  color: #2c3e50;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}


input[type="text"] {
  width: 70%;
}


form {
  margin: 0 auto;
  padding: 12px 40px;
  max-width: 1210px;
}
.btn-btn-primary {
  position:absolute;
  left:940px;
  top:13px;
  height:38px;
  width: 140px;
  overflow:hidden;
  font-size: 14;
  border-radius: 7px;
  border-color: gray; 
  color:#2c3e50 ;
  background-color: #ff9f80;
}
.resource-search  {
  visibility: hidden;
}
.form-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.form-control {
  margin-left: 135px;
  max-width: 1200px;
  max-height: 40px;
  background-color: white;
  border: 8;
  border-radius: 8px;
  padding: 7px;
  font-size: 15;
}
.resourcesCtrl:after {
  content: " ";
  display: block;
  clear: both;
}

.btn-btn-primary {
  margin-bottom: 0;
  font-weight: bold;
}


.sec-bar{
  position: relative;
  width: 100%;
  top: 50;
  right: 0;
  left: 0;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
  transition: all .2s ease-in;
}
  .nav {
    position: relative;
    top: 4;
    right: 0;
    left: 0;
    height: 44px;
    min-width: 1024px;
    background: #3d4d5c;
    font-size: 18px;
    z-index: 2;
  }
  
  .menu-container {
    position: relative;
    margin: 0 auto;
    margin-top:-8px;
    max-width: 980px;
    padding: 0 22px;
  }
  .menu-container ul li {
    display: inline-block;
    text-align: center;
    width: auto;
    margin-right: 76px;
  }
  .menu-container ul li a {
    display: inline-block;
    text-decoration: none;
    color: #fff;
    font-weight: 100;
    font-size: 16px;
    float: left;
  }
  .menu-container ul {
    list-style: none;
  }
  .menu-container ul li {
    margin-left: 2;
    margin-top: 9;
  }
  .menu-container ul li a:hover {
    color: #ff9f80;
  }
  .menu-container.menu-apple {
    background-repeat: no-repeat;
    width: 20px;
  }

/* Slideshow container */
.slideshow-container {
  position: absolute;
  width: 100%;  
  top: 108px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
}


/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
  -webkit-filter: saturate(2.5); filter: saturate(2.5);
}

.active {
  background-color: #717171;
}
  

.photo {
  grid-area: photo;
  -webkit-filter: saturate(1.5); filter: saturate(1.5);
}
.saturate {-webkit-filter: saturate(3); filter: saturate(3);}
.brightness {-webkit-filter: brightness(100%);filter: brightness(100%);}
.contrast {-webkit-filter: contrast(80%);filter: contrast(80%);}

.title {
  text-align: center;
  grid-area: title;
  color: #2c3e50;
  font-size: 1.3em;
  font-weight: 700;
  padding: 8px;
}

.link {
  grid-area: link;
  padding: 10px;
  text-align: center;
}

a {
  color: #4a69bd;
  font-size: 1em;
  font-weight: 300;
  text-decoration: none;
}

a:hover {
  color: #ff9f80;
}

.stats {
  color: #56534f;
  font-size: 1.25em;
  font-weight: 300;
  grid-area: stats;
  padding: 20px;
  text-align: center;
}

.description {
  grid-area: description;
  font-size: 1em;
  font-weight: 300;
  padding-left: 20px;
  margin-bottom: 20px;
  color: #56534f;
}

hr {
  grid-area: hr;
  margin: 0px;
  padding: 0px;
  border: 0;
  height: 0.6px;
  background-color:#95a5a6;
}

.photo img {
  border-top-right-radius: 25px;
  border-top-left-radius: 30px;
  width: 340px;
  height: 150px;
}

.footer{
  position: absolute;
  top: 880px;
  width: 100%;
}
 
.navFooterDescLine{
  padding: 0.2em;
  color: white;
  background-color: #414958;
  clear: left;
  width: 100%;
}

.navFooterCopyright {
    padding: 0.5em;
    color: white;
    background-color: #29313d;
    clear: left;
    text-align: center;
  width: 100%;
}
.left{
  position: relative;
  left: -185px;
}
.right{
  position: relative;
  left: 55px;
}
.the-app{
  width: 10%;
}
.the-app2{
  width: 11.5%;
  position: relative;
  left: 1120;

}



</style>
  


</head>
<body>

<div class="first-bar" >
	 <div class="left bar">
		<nav class="logo"> 
			<ul>
				<li>
					<a class="link image" href="index.html"><img class="logo" src="IMG_Brand.jpg"></a>
				</li>
			</ul></nav>

	 </div>
  

   <div class="Search-bar-xyz">
    <!-- Search Container -->
    <div  class="Search-Container"> 
     <form>
        <div class="input-group">
          <label for="resource-search">
            <span class="hidden"></span>
          </label>
          <input type="text" class="form-control" id="resource-search" placeholder="Search" ng-model="searchItems">
          <div class="input-group-btn">
            <div class="btn-group" uib-dropdown >
              <button id="category-select-button" type="button" class="btn-btn-primary" uib-dropdown-toggle
              >Search</button>
              
            </div>
          </div>

            <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>

        </div>
      </form>
    </div>
  </div>
</div>

<div class="sec-bar"> 
  <nav class="Nav">
   <div class="menu-container" >
     <!-- Menu -->
     <ul class="menu">

       <li class="menu-mac">
         <a href="index.html">
           <span>Home</span>
         </a>
       </li>
       <li class="menu-iPad">
         <a href="BrandsRunway-shopping.html">
           <span>Women</span>
         </a>
       </li>
       <li class="menu-iPad">
         <a href="#">
           <span>Men</span>
         </a>
       </li>
       <li class="menu-iPad">
         <a href="#">
           <span>Kids</span>
         </a>
       </li>
       <li class="menu-iPhone">
         <a href="BrandsRunway-shopping.html">
           <span>Sales</span>
         </a>
       </li>
       <li class="menu-watch">
         <a href="BrandsRunway-login.php">
           <span>Login</span>
         </a>
       </li>
       <li class="menu-tv">
         <a href="BrandsRunway-admin.php">
           <span>Cart</span>
         </a>
       </li>
      
   </div>
 </nav>
 </div>



<iframe width="100%" height="100%" src="index1.php"></iframe>





<div class="footer">


 <div class="navFooterVerticalColumn navAccessibility" role="presentation"></div>

 <div class="navFooterDescLine" role="navigation" aria-label="More on Amazon.com">
  <table class="navFooterMoreOnAmazon" cellspacing="0">
  </table>
     <img class="the-app" src="apple.jpg">
     <img class="the-app2" src="google.jpg">    
   </div>

 <div class="navFooterCopyright">
  <ul class="nav_last"> Copyright 2020 By Duha_Aljubbah , Contact Us : +963-992628342</ul>
 </div>
        </div>

</div>







<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./script1.js"></script>


</body>
</html>

