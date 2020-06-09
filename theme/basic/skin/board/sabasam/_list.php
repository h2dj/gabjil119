<ul class="counseling_txt_video_list">
<!-- 	  <li><img src="<?php echo G5_URL ?>/images/counseling/play_btn.png" alt="재생목록" class="pc"><span>떼인 돈 받으려면? 수당의 모든 것!</span></li>
	  <li><img src="<?php echo G5_URL ?>/images/counseling/play_btn_active.png" alt="재생 중" class="pc"><span>연봉제 계약일 경우 수당을 안줘도 되나요?</span></li>
	  <li><img src="<?php echo G5_URL ?>/images/counseling/play_btn.png" alt="재생목록" class="pc"><span>떼인 돈 신고하려면 어떻게 해야 하죠?</span></li> -->
<?php
	$sql = " select * from g5_write_sabasam where wr_is_comment = 0 and ca_name = '{$category_name}' order by wr_num"; 
    $result = sql_query($sql); 

    for ($i=0; $row = sql_fetch_array($result); $i++) { 
		$list[$i] = get_list($row, $board, $latest_skin_url, $subject_len); 
     } 
     for ($i=0; $i<count($list); $i++) { ?>
		<li><img src="<?php echo G5_URL ?>/images/counseling/play_btn<?php if($wr_id == $list[$i]['wr_id']) echo '_active'; ?>.png" alt="재생목록" class="pc">
		&nbsp;&nbsp;<span><?=$list[$i]['subject'] ?></span></li>
<?php } ?>
</ul>