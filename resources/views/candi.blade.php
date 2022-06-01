<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>
    <title>Candi Store</title>

<style>

@import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
html,
body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Quicksand", sans-serif;
    font-size: 62.5%;
    font-size: 10px;
}
/*-- Inspiration taken from abdo steif -->
/* --> https://codepen.io/abdosteif/pen/bRoyMb?editors=1100*/

/* Navbar section */

.nav {
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: center;
    z-index:1;
}

.nav div.logo {
    float: left;
    width: auto;
    height: auto;
    padding-left: 3rem;
}

.nav div.logo a {
    text-decoration: none;
    color: #fff;
    font-size: 2.5rem;
}

.nav div.logo a:hover {
    color: #00E676;
}

.nav div.main_list {
    height: 65px;
    float: right;
}

.nav div.main_list ul {
    width: 100%;
    height: 65px;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav div.main_list ul li {
    width: auto;
    height: 65px;
    padding: 0;
    padding-right: 3rem;
}

.nav div.main_list ul li a {
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    font-size: 2.4rem;
}

.nav div.main_list ul li a:hover {
    color: #00E676;
}


/* Home section */

.home {
    width: 100%;
    height: 100vh;
    background-image: url(https://www.justfood.tv//UserFiles/SUCETTE_source_jf_1.jpg);
    background-position: center top;
	background-size:cover;
}

.navTrigger {
    display: none;
}

.nav {
    padding-top: 20px;
    padding-bottom: 20px;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}


/* Media qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
    .container {
        margin: 0;
    }
}

@media screen and (max-width:768px) {
    .navTrigger {
        display: block;
    }
    .nav div.logo {
        margin-left: 15px;
    }
    .nav div.main_list {
        width: 100%;
        height: 0;
        overflow: hidden;
    }
    .nav div.show_list {
        height: auto;
        display: none;
    }
    .nav div.main_list ul {
        flex-direction: column;
        width: 100%;
        height: 100vh;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: #111;
        /*same background color of navbar*/
        background-position: center top;
    }
    .nav div.main_list ul li {
        width: 100%;
        text-align: right;
    }
    .nav div.main_list ul li a {
        text-align: center;
        width: 100%;
        font-size: 3rem;
        padding: 20px;
    }
    .nav div.media_button {
        display: block;
    }
}


/* Animation */
/* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

.navTrigger {
    cursor: pointer;
    width: 30px;
    height: 25px;
    margin: auto;
    position: absolute;
    right: 30px;
    top: 0;
    bottom: 0;
}

.navTrigger i {
    background-color: #fff;
    border-radius: 2px;
    content: '';
    display: block;
    width: 100%;
    height: 4px;
}

.navTrigger i:nth-child(1) {
    -webkit-animation: outT 0.8s backwards;
    animation: outT 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(2) {
    margin: 5px 0;
    -webkit-animation: outM 0.8s backwards;
    animation: outM 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(3) {
    -webkit-animation: outBtm 0.8s backwards;
    animation: outBtm 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger.active i:nth-child(1) {
    -webkit-animation: inT 0.8s forwards;
    animation: inT 0.8s forwards;
}

.navTrigger.active i:nth-child(2) {
    -webkit-animation: inM 0.8s forwards;
    animation: inM 0.8s forwards;
}

.navTrigger.active i:nth-child(3) {
    -webkit-animation: inBtm 0.8s forwards;
    animation: inBtm 0.8s forwards;
}

@-webkit-keyframes inM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes inM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes outM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes outM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes inT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes inT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes outT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes outT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes inBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes inBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

@-webkit-keyframes outBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes outBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

.affix {
    padding: 0;
    background-color: #111;
}






.myH2 {
	text-align:center;
	font-size: 4rem;
}
.myP {
	text-align: justify;
	padding-left:15%;
	padding-right:15%;
	font-size: 20px;
}
@media all and (max-width:700px){
	.myP {
		padding:2%;
	}
}



/* *********************************************** Card ********************************************** */

/* // font stuff */
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900);


// colour stuff
@black: #ffffff;
@lightBG: #dce1df;
@salmon: #ff6666;

@teal: #0096a0;
@tealMid: #0ebac7;
@tealContrast: #33ffff;
@tealShade:	#007c85;

@darkGrey: #4f585e;

body {
  background: @lightBG;
  color: @darkGrey;
  font-family: 'Source Sans Pro', sans-serif;
  text-rendering: optimizeLegibility;
}

a.btn {
  background: @teal;
  border-radius: 4px;
	box-shadow: 0 2px 0px 0 rgba(0,0,0,0.25);
  color: @black;
  display: inline-block;
  padding: 6px 30px 8px;
  position: relative;
  text-decoration: none;
	transition: all 0.1s 0s ease-out;
}

.no-touch a.btn:hover {
  background: lighten(@teal,2.5);
  box-shadow: 0px 8px 2px 0 rgba(0, 0, 0, 0.075);
  transform: translateY(-2px);
  transition: all 0.25s 0s ease-out;
}

.no-touch a.btn:active,
a.btn:active {
  background: darken(@teal,2.5);
  box-shadow: 0 1px 0px 0 rgba(255,255,255,0.25);
  transform: translate3d(0,1px,0);
  transition: all 0.025s 0s ease-out;
}

div.cards {
  margin: 80px auto;
  max-width: 960px;
  text-align: center;
}

div.card {
  background: @black;
  display: inline-block;
  margin: 8px;
  max-width: 300px;
  perspective: 1000;
  position: relative;
  text-align: left;
  transition: all 0.3s 0s ease-in;
  width: 300px;
  

  img {
    max-width: 300px;
  }
  
  .card__image-holder {
    background: rgba(0,0,0,0.1);
    /* height: 420 px;
    width 228 px ; */
    padding-bottom: 75%; 
  }

.card__image
{
height: 10%;
width: 10%;
}

  div.card-title {
    background: @black;
    padding: 6px 15px 10px;
    position: relative;
    z-index: 0;
    
    a.toggle-info {
      border-radius: 32px;
      height: 32px;
      padding: 0;
      position: absolute;
      right: 15px;
      top: 10px;
      width: 32px;
      
      span {
        background: @black;
        display: block;
        height: 2px;
        position: absolute;
        top: 16px;
        transition: all 0.15s 0s ease-out;
        width: 12px;
      }
      
      span.left {
        right: 14px;
        transform: rotate(45deg);
      }
      span.right {
        left: 14px;
        transform: rotate(-45deg);
      }
    }
    
    h2 {
      font-size: 24px;
      font-weight: 700;
      letter-spacing: -0.05em;
      margin: 0;
      padding: 0;
      
      small {
        display: block;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: -0.025em;
      }
    }
  }

  div.card-description {
    padding: 0 15px 10px;
    position: relative;
    font-size: 14px;
  }

  div.card-actions {
  	box-shadow: 0 2px 0px 0 rgba(0,0,0,0.075);
    padding: 10px 15px 20px;
    text-align: center;
  }
  
  div.card-flap {
    background: darken(@black,15);
    position: absolute;
    width: 100%;
    transform-origin: top;
    transform: rotateX(-90deg);
  }
  div.flap1 {
    transition: all 0.3s 0.3s ease-out;
    z-index: -1;
  }
  div.flap2 {
    transition: all 0.3s 0s ease-out;
    z-index: -2;
  }
  
}

div.cards.showing {
  div.card {
    cursor: pointer;
    opacity: 0.6;
    transform: scale(0.88);
  }
}

.no-touch  div.cards.showing {
  div.card:hover {
    opacity: 0.94;
    transform: scale(0.92);
  }
}

div.card.show {
  opacity: 1 !important;
  transform: scale(1) !important;

  div.card-title {
    a.toggle-info {
      background: @salmon !important;
      span {
        top: 15px;
      }
      span.left {
        right: 10px;
      }
      span.right {
        left: 10px;
      }
    }
  }
  div.card-flap {
    background: @black;
    transform: rotateX(0deg);
  }
  div.flap1 {
    transition: all 0.3s 0s ease-out;
  }
  div.flap2 {
    transition: all 0.3s 0.2s ease-out;
  }
}


/* *********************************New Cards******************************* */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
}

.section-products {
    padding: 80px 0 54px;
}

.section-products .header {
    margin-bottom: 50px;
}

.section-products .header h3 {
    font-size: 1rem;
    color: #fe302f;
    font-weight: 500;
}

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section-products .single-product {
    margin-bottom: 26px;
}

.section-products .single-product .part-1 {
    position: relative;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
}

.section-products .single-product .part-1::before {
		position: absolute;
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
		transform: scale(1.2,1.2) rotate(5deg);
}

.section-products #product-1 .part-1::before {
    background: url("https://i5.walmartimages.ca/images/Enlarge/810/805/6000202810805.jpg") no-repeat center;
    background-size: cover;
		transition: all 0.3s;
}

.section-products #product-2 .part-1::before {
    background: url("https://m.media-amazon.com/images/I/41rm1lUhQZL.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-3 .part-1::before {
    background: url("https://m.media-amazon.com/images/I/81Rq4AejDWL._SL1500_.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-4 .part-1::before {
    background: url("https://images.shop.frankfurt-airport.com/pim/fjgQNQBCl4qJQWzfw0-qihQw5jxf-KHUs0tTxLZs2XM/1200x/Y2F0YWxvZy9kL2MvMC82L2RjMDYzN2JkMzY3ZGE0MDUzMWYwMWI2NWY1ZTZlMzJmXzEzNzY4MTEuanBn") no-repeat center;
    background-size: cover;
}

.section-products .single-product .part-1 .discount,
.section-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section-products .single-product .part-1 ul {
    position: absolute;
    bottom: -41px;
    left: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
}

.section-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section-products .single-product .part-1 ul li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section-products .single-product .part-1 ul li a:hover {
    color: #fe302f;
}

.section-products .single-product .part-2 .product-title {
    font-size: 1rem;
}

.section-products .single-product .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
}

.section-products .single-product .part-2 .product-old-price {
    position: relative;
    padding: 0 7px;
    margin-right: 2px;
    opacity: 0.6;
}

.section-products .single-product .part-2 .product-old-price::after {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #444444;
    transform: translateY(-50%);
}


</style>


</head>
<body>
    
<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Candieee</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="./about">About</a></li>
                    <li><a href="./login">Login</a></li>
                    <!-- <li><a href="#">Services</a></li> -->
                    <li><a href="./contact">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>



    <!-- <div class="cards">

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://storage.googleapis.com/tm-zopsmart-uploads/320/20210405/377816_1-20210405-220024.png" alt="wave" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://englishlib.org/dictionary/img/wlibrary/f/600d5f4e7a13f3.19897992.jpg" alt="beach" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://halgoom.com/wp-content/uploads/2020/07/Kinder-Bueno-Chocolate-2-bars-43-g.jpg" alt="mountain" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="data:image/jpeg;base64,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" alt="field" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://source.unsplash.com/300x225/?water" alt="water" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://source.unsplash.com/300x225/?river" alt="river" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://source.unsplash.com/300x225/?kite" alt="kite" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://source.unsplash.com/300x225/?underwater" alt="underwater" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://source.unsplash.com/300x225/?desert" alt="desert" />
  </div>
  <div class="card-title">
    
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        
      </div>
    </div>
  </div>
</div>

</div> -->




<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
								
										<h2>CANDY STORE</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
											
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
										
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
											
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
									
								
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
										
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
							
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
										
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
										
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>












<!-- Remove the container if you want to extend the Footer to full width. -->
<div >

  <!-- Footer -->
  <footer
          class="text-center text-lg-start "
          style="background-color: #FBCAFF"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #FFADF0"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-black me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-black me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-black me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-black me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-black me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-black me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Company name</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-black">MDBootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-black">MDWordPress</a>
            </p>
            <p>
              <a href="#!" class="text-black">BrandFlow</a>
            </p>
            <p>
              <a href="#!" class="text-black">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-black">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-black">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-black">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-black">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:Saaaj
      <a class="text-black" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>
<!-- End of .container -->




<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });


        $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});




// **************************************************cart section*********************************//


$(document).ready(function(){
  var zindex = 10;
  
  $("div.card").click(function(e){
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true
    }

    if ($("div.cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.show")
        .removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.cards")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("show");

      }

      zindex++;

    } else {
      // no cards in view
      $("div.cards")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }
    
  });
});



    </script>


</body>
</html>