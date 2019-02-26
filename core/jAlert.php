

<link href="./css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<script src="./js/jquery-2.2.3.min.js"></script>
<script src="./js/jquery.alerts.js"></script>

<script>
$( document ).ready(function() {
	<?php
	if($gubun == 'jAlert'){
	?>
	jAlert("<?php echo $msg;?>", "COINARENA", function(r) {
		<?php
		if($url1){
		?>
			if(r) document.location.href = '<?php echo $url1?>';
		<?php
		}
		?>
	});
	<?php
	}else{
	?>
	jConfirm("<?php echo $msg;?>", "COINARENA", "<?php echo $okValue;?>", "<?php echo $noValue;?>", function(r) {
		<?php
		if($url1){
		?>
			if(r) document.location.href = '<?php echo $url1?>';
			else document.location.href = '<?php echo $url2?>';
		<?php
		}
		?>		
	});	
	<?php
	}
	?>
});
</script>



