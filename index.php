<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/vue"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src='./js/vidbg.js'></script>
<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">

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
/* border: 1px solid red;*/
}


/*로고와 메뉴바 */
div.logo{
    border: 1px solid white;
	 float: left;    
    width: 180px;
	height: 100px;
   margin-left: 75px;
    margin-top: 30px;
}
div.menu_bar{
/*    border: 1px solid red;*/
    width: 700px;
    float: right;
    /* height: 100%; */
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
/*display:inline;*/
/*  outline: 1px solid red;*/
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
.about{
/*	border: 1px solid red;*/
	width:50px;
	height:50px;
	position:relative; 
}
.body_text{
	color:white;
/*	border: 1px solid red;*/
	
	position: relative;
	top: 510px;
    left: 340px;
	width:200px;
	height:auto;


}
.body_text h1{
	font-size: 80px;
	letter-spacing: 1px;
	line-height: 1.1;
	font-family: 'Concert One', cursive;
	padding-bottom: 20;
	
}
.about{
color:white;
background:black;
width:200px;
height:200px;

font-size: 31px;
text-align: center;
line-height: 6.5;


}
.js_news{
/*	border: 1px solid red;*/
    height: 350px;
    position: relative;
    margin-top: 65px;
    width: 330px;
	left: 340px;
font-family: 'Concert One', cursive;
    font-size: 17px;
/*    line-height: 10;*/
    padding-top: 160px;


}
.js_news hr{
    position: absolute;
    top: 180px;
}
.js_news p{
	 line-height: 2;
/*	border: 1px solid red;*/
	font-family: 'Gamja Flower', cursive;
    padding-top: 20px;
}

</style>

<div class='body'>

	<div class='header'> 
	<!-- 상단 로고  -->
		<div class='logo'>
			<a href=""><img src="../image/logo.png" /></a>
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
	<h1>Lifestyle </br>
		Needs</br>
		Solution.</h1>

			<div class='about'>
					about
						 <img src='./image/right.png'>
			</div>
			
    </div>

	

</div><!--  end of body -->

<div class='js_news'>
	<label>JSY news</label>
	<hr width='320px' align='left'>
	<p>'블랭크티비'에서 '블랭크'로 사명을 변경하며 새롭게 출발합니다. 새로운 관점으로 생각하고 
	기획하며 설계하는 메뉴팩처링, 문제를 해결하는 유연한 사고와 논리, 빠르게 변화하는 디지털 
	환경 속에서 혁신과 아이디어를 바탕으로 더 나은 삶의 가치를 담았습니다.</p>
</div>



<script>


$("ul.lang").on("click", ".init", function() {
    $(this).closest("ul").children('li:not(.init)').slideToggle();
});


var allOptions = $("ul.lang").children('li:not(.init)');
$("ul").on("click", "li:not(.init)", function() {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $("ul").children('.init').html($(this).html());
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