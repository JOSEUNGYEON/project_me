<?php
$pageDir = $_GET['cms'] == ""?"":"admin/";
$myFilePath = "./select/".$pageDir.str_replace('.php', '_select', basename(__FILE__));
$myFilePath = $myFilePath.'.php';

include $myFilePath;

?>




<div class='body'>
<?   include('proc_header.php'); ?>
<script src="./js/proc_main.js"></script>
	

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
		<label>jobbokchi news</label>
		<hr width='460px' align='left'>
		<p>'블랭크티비'에서 '블랭크'로 사명을 변경하며 새롭게 출발합니다. 새로운 관점으로 생각하고 
		기획하며 설계하는 메뉴팩처링, 문제를 해결하는 유연한 사고와 논리, 빠르게 변화하는 디지털 
		환경 속에서 혁신과 아이디어를 바탕으로 더 나은 삶의 가치를 담았습니다.</p>
	</div>

	<div class='js_news2'>
		<label>jobbokchi news</label>
		<hr width='460px' align='left'>
		<p>'블랭크티비'에서 '블랭크'로 사명을 변경하며 새롭게 출발합니다. 새로운 관점으로 생각하고 
		기획하며 설계하는 메뉴팩처링, 문제를 해결하는 유연한 사고와 논리, 빠르게 변화하는 디지털 
		환경 속에서 혁신과 아이디어를 바탕으로 더 나은 삶의 가치를 담았습니다.</p>
	</div>
</div>

<!-- 이미지들  -->
<div class='main_img'>

<!--  연동 후 사용 
		<ul>
		<? 
			for ($i=0 ; $row=sql_fetch_array(issue_list) ; $i++ ){
		 ?>

			 <li>
				<img src="./image/news/<?=$row['w_id']?>/<?=$row['w_img']?>">
				<label class='subject'>
					<strong><?=$row['w_subject']?></strong>
				</label>
				<p>
					<?=$row['w_content']?>
				</p>
			</li>

		<?}?>
	</ul>		
-->




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

<? include('proc_footer.php')?>


