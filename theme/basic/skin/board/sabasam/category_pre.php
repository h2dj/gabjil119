<?php
$is_category = false;
$category_option = '';
if ($board['bo_use_category']) {
    $is_category = true;
    $category_href = G5_BBS_URL.'/board.php?bo_table='.$bo_table;
/*    $category_option .= '<li><a href="'.$category_href.'"';
    if ($sca=='' && !$wr_id)
		$category_option .= ' id="bo_cate_on"';
    $category_option .= '>전체</a></li>';*/
    $categories = explode('|', $board['bo_category_list']); // 구분자가 , 로 되어 있음
    for ($i=0; $i<count($categories); $i++) {
        $category = trim($categories[$i]);
        if ($category=='') continue;
        
        if ($category==$sca || $category==$category_name) { // 현재 선택된 카테고리라면
			$category_option .= '<li class="active">';
            $category_msg = '<span class="sound_only">열린 분류 </span>';
        } else {
			$category_option .= '<li>'; //<a href="'.($category_href."&amp;sca=".urlencode($category)).'"';
	        $category_msg = '';
		}
		$category_option .= '<a href="'.($category_href."&amp;sca=".urlencode($category)).'"';
        $category_option .= '>'.$category_msg.$category.'</a></li>';
    }
}
?>