<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/vue"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src='./js/vidbg.js'></script>
<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">

<style>

/* reset */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
input, select, option, textarea
time, mark, audio, video {margin:0; padding:0; /*border: 0;*/}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {display: block;}
table {border-collapse: collapse; border-spacing: 0;}
span, a {margin:0; padding:0}
ol, ul, li {list-style:none;}
img {border:0; vertical-align:middle;}
a, a:hover {color:#333; text-decoration:none;}
legend, /*label*/ {position: absolute;top:0; left:0; width:0; height:0; overflow:hidden; visibility:hidden; font-size:0; line-height:0;}
form, fieldset {border:0;}

body {list-style:none;font-size:12px;font-family: "NBG","AppleGothic","serif";color:#333;/*line-height:1.3em;*/height: 100%; background:#fff !important;}
form, input, select, textarea {font:12px "NBG"; color:#333;}
input, select, textarea {vertical-align:middle; /*border:0;*/}



.body{
/*background-color:red;*/
width:100%;
height: 100%;
min-height:800px;
  z-index:-1;

  filter: blur(6px); 

  -webkit-filter: blur(6px); 

  -moz-filter: blur(6px);

  -o-filter: blur(6px);

  filter:url(#blur);




}
/*헤더*/
.header{
 height:100px;

}


/*로고와 메뉴바 */
div.logo{

	 float: left;    
    width: 150px;
	height: 100px;
   margin-left: 75px;
    margin-top: 30px;
}
div.menu_bar{

    width: 700px;
    float: right;

    margin-top: 30px;
    font-size: 30px;
    color: white;

}
.menu_ul ul{
	color:white;
padding-top: 34px;
}
/*header 안 ul들 */
.menu_bar ul li{

  list-style-type:none;
}
.menu_bar ul.menu_ul li{

  float:left;
  margin-left:20px;
}


.menu_bar div.lang_div{
    border: 1px solid white;
    margin-left: 20px;
    float: left;
    font-family: 'Concert One', cursive;
    padding: 5px;
    font-size: 20px;
    width: 110px;
	
}
div.lang_div img{
    float: right;
    margin-top: 12px;
	}
.menu_ul a{
color:white;
	font-family: 'Concert One', cursive;

}

.body_text{
	color:white;
	position: relative;
	top: 480px;
    left: 250px;
	width:510px;
	height:auto;
    float: left;

}
.body_text h1{
	font-size: 80px;
	letter-spacing: 1px;
	line-height: 1.1;
	font-family: 'Concert One', cursive;
	padding-bottom: 20;
	
}
.about{
position:relative; 
color:white;
background:black;
width:200px;
height:200px;
box-shadow: 0px 0px 6px 1px #252525;

font-size: 31px;
text-align: center;
line-height: 6.5;
font-family: 'Concert One', cursive;



}

.js_news{
    height: 350px;
    position: absolute;
    margin-top: 65px;
    width: 460px;
	left: 340px;
font-family: 'Concert One', cursive;
    font-size: 17px;
/*    line-height: 10;*/
    padding-top: 160px;


}
.js_news2{
    height: 350px;
    position: absolute;
    margin-top: 65px;
    width: 460px;
	left: 1105px;
font-family: 'Concert One', cursive;
    font-size: 17px;
    padding-top: 160px;


}
.main_news{
	 height: 550px;
}
.main_news hr{
    position: absolute;
    top: 180px;
}
.main_news p{
	 line-height: 2;
/*	font-family: 'Gamja Flower', cursive;*/
font-family: 'Chivo', sans-serif;

    padding-top: 20px;
}
.main_img{
    width: 1220px;
    height: 400px;
    margin: 0 auto;
	line-height: 1.5;

}
.main_img ul{
  list-style-type:none;
overflow:hidden 
}
.main_img ul li{
  float: left;  
  width :30%;
}
.main_img ul li:nth-last-child(2){
    padding-left: 61px;
    padding-right: 61px;
}

.main_img ul li img{

   width :100%;
    height: 60%;
  
}
.main_img label{

font-size: 22px;
line-height: 3;
}
.main_footer{
    height: 160px;
    margin-top: 200px;
	line-height: 1.5;
}
.main_footer p.copylight{
	position: absolute;
    left: 70px;
    margin-top: 20px;
font-family: 'Chivo', sans-serif;

}
.main_footer p.address{

	position: absolute;
    left: 500px;
    margin-top: 20px;
font-family: 'Chivo', sans-serif;

}
.main_footer p.hp{

	position: absolute;
    left: 860px;
    margin-top: 20px;
font-family: 'Chivo', sans-serif;

}
.main_footer span{
font-size: 14px;

}
.main_footer .footer_patch{
	    margin-left: 1200;
    margin-top: 35px;
    font-size: 60;
	font-family: 'Chivo', sans-serif;
}

</style>

<div class='body'>

	<div class='header'> 
	<!-- 상단 로고  -->
		<div class='logo'>
			<a href=""><img src="../image/me_logo1.png" /></a>
		</div> <!--  end of logo -->

		<div class='menu_bar'>
			<ul class='menu_ul'>
				<a href=''><li>about</li></a>
				<a href=''><li>team</li></a>
				<a href=''><li>brand</li></a>
				<a href=''><li>news</li></a>
				<a href=''><li>career</li></a>
			</ul>

			<div class='lang_div'>
				<ul class='lang'>
					<li class='init'>languege <img src='./image/v.png'></li>
					<li data-value='ko'>korea</li>
					<li data-value='en'>USA</li>
				</ul>
			</div> <!--  end of lang_div --> 
			

		</div> <!--  end of menu_bar -->
	</div><!--  end of header -->

	<div class='body_text'>
	<h1>Your company Needs</br>Solution.
	</h1>

			<div class='about'>
					about
						 <img src='./image/right.png'>
			</div>
			
    </div>

	

</div><!--  end of body -->

<!-- 뉴스및 공지사항  -->
<div class='main_news'>
	<div class='js_news'>
		<label>JSY news</label>
		<hr width='460px' align='left'>
		<p>'Vue.js'와 'Vue 강의'의 공통점 '뷰는 쉽게 접근할 수 있지만 하면 알면 알수록 어렵다'라고 한다. 
					뷰와 뷰 강의의 닮은 점이다. 강의 초반에는 자바스크립트 문법...</p>
	</div>

	<div class='js_news2'>
		<label>JSY news</label>
		<hr width='460px' align='left'>
		<p>'Vue.js'와 'Vue 강의'의 공통점 '뷰는 쉽게 접근할 수 있지만 하면 알면 알수록 어렵다'라고 한다. 
					뷰와 뷰 강의의 닮은 점이다. 강의 초반에는 자바스크립트 문법...</p>
	</div>
</div>

<!-- 이미지들  -->
<div class='main_img'>
	<ul>
		<li>
				<img src='./image/main_img.jpg'>
				
					<label class='subject'><strong>오늘은 왠지</strong></label>
				<p>
					'Vue.js'와 'Vue 강의'의 공통점 '뷰는 쉽게 접근할 수 있지만 하면 알면 알수록 어렵다'라고 한다. 
					뷰와 뷰 강의의 닮은 점이다. 강의 초반에는 자바스크립트 문법...
				</p>
		</li>
		<li>
				<img src='./image/main_img2.jpg'>
				
					<label class='subject'><strong>어두워질것만 같아</strong></label>
				<p> 
				Vue.js'와 'Vue 강의'의 공통점 '뷰는 쉽게 접근할 수 있지만 하면 알면 알수록 어렵다'라고 한다. 
					뷰와 뷰 강의의 닮은 점이다. 강의 초반에는 자바스크립트 문법...
				</p>
		</li>
		<li>
				<img src='./image/main_img3.jpg'>	
				
					<label class='subject'><strong>핸드폰 보다가  </strong></label>
				<p>
				Vue.js'와 'Vue 강의'의 공통점 '뷰는 쉽게 접근할 수 있지만 하면 알면 알수록 어렵다'라고 한다. 
					뷰와 뷰 강의의 닮은 점이다. 강의 초반에는 자바스크립트 문법...
				</p>
		</li>
	</ul>

</div> <!-- end of main_img -->

<div class='main_footer'>
		<hr width='1800px' align='center' >
		<p class='copylight'>
			<span><strong>FiRST PROJECT  WITH PHP</strong></span>
			<br>
			Copyright, JOCOMPANY Corp. All rights reserved.
		</p>
		<p class='address'>
			<span>
				<strong>Github</strong><br>
				<a href='https://github.com/JOSEUNGYEON'> https://github.com/JOSEUNGYEON</a>
			</span><br>
			<span>
				<strong>Email</strong><br>
					ironjo175@gmail.com
			</span><br>
			
		</p>
		<p class='hp'>
		<span>
				<strong>HP</strong><br>
				 010-6398-7754				
			</span>

		</p>
		<div class='footer_patch'>
			<label>You Need Me!</label>
			<img src='./image/pro_me_logo.png'>
		</div>
</div>





<script>


$("ul.lang").on("click", ".init", function() {
    $(this).closest("ul.lang").children('li:not(.init)').slideToggle();
});


var allOptions = $("ul.lang").children('li:not(.init)');
$("ul.lang").on("click", "li:not(.init)", function() {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $("ul.lang").children('.init').html($(this).html());
    allOptions.slideUp();
});

    $(function($){
          $('.body').vidbg({
              'mp4': './image/mp4_video.mp4',
//              'webm': '/SRC2/videoback/demo/media/webm_video.webm',
//              'poster': '/SRC2/videoback/demo/media/fallback.jpg',
          }, {
            // Options
            muted: true,
            loop: true,
  			overlay: true,
          });
      });



</script>