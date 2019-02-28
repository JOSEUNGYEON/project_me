<?php
//$pageDir = $_GET['cms'] == ""?"":"admin/";
//$myFilePath = "./select/".$pageDir.str_replace('.php', '_select', basename(__FILE__));
//$myFilePath = $myFilePath.'.php';
//
//include $myFilePath;

include('proc_header_sub.php');


?>
<script src="./js/proc_about.js"></script>


<div class="about_body">

        <img src="./image/about_img.jpg">

        <label>About me ...</label>
    </div>

    <div class="about_content">
       <h1>끊임없이 진화하는 미디어 1인 기업</h1>
        <p>
            조복치는 빠르게 변화하는 미디어 환경 속에서 끊임없이 진화합니다.
            문제를 해결하고자 하는 작은 아이디어를 바탕으로 더욱 정교하고 견고하게 더 많은 사람과 연결되어, 삶의 문제를 해결합니다.
            빠른 시도와 실패의 가치를 소중히 여기고 함께 성장하는 것, 조복치가 한발 앞서 시장을 선도할 수 있는 이유입니다.
        </p>
        <div class="about_iframe">
            <iframe src="./data/main1.mp4"></iframe>
        </div>

    </div>





    <div class="about_subcontent">
        <label>
            Your company Needs
            Solution.
        </label>
        <p class="slogun">
                조복치는 생각에서 멈추지 않습니다. 지나치기 쉬운 생활 속의 문제점을 발견하고, 그에 대한 솔루션을 제안합니다.
                기업의 더 나은 가치 창출을 위해 감각적이고 창의적으로 대응할 수 있도록 끊임없이 고민하고 생각합니다.
            </p>

    </div>
<div class="about_contact">

    <label>contact </br>us..</label>
    <ul class="rsume">
        <li class='init'> CLICK</li>
        <li>
            <img src="./image/resume.png">
        </li>
    </ul>
</div>


<?
include('proc_footer.php');
?>
