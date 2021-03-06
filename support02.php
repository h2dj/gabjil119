<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

    <!-- CONTENTS -->
    <div id="job119_contents">

      <ul class="path pc">
        <li><a href="<?php echo G5_URL ?>">홈 ></a></li>
        <li><a href="/bbs/content.php?co_id=intro01">직장갑질119 ></a></li>
        <li><a href="<?php echo G5_URL ?>/support01.php">후원참여 ></a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=support02">후원해주시는 분들</a></li>
      </ul>

      <aside class="side_nav_wrap pc">
        <div class="leftside_nav">

          <ul class="side_nav">

            <li class="side_nav_title"><span>직장갑질119</span></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/" class="side_nav_sub_menu_btn"><span>소개</span><img src="images/common/down_arrow.png"></a>
              <ul>
                <li><a href="/bbs/content.php?co_id=intro01">직장갑질119 소개</a></li>
                <li><a href="/bbs/content.php?co_id=intro02">활동소개</a></li>
                <li><a href="/bbs/content.php?co_id=intro03">연혁</a></li>
              </ul>
            </li>
            <li><a href="/bbs/content.php?co_id=group">함께하는 사람들</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=report">사단법인 알림</a></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/support01.php" class="side_nav_sub_menu_btn"><span>후원참여</span><img src="images/common/down_arrow.png"></a>
              <ul>
                <li><a href="<?php echo G5_URL ?>/support01.php">후원안내</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=support02">후원해주시는 분들</a></li>
                
              </ul>
            </li>
            <li><a href="<?php echo G5_URL ?>/faq.php">직장갑질 FAQ</a></li>

          </ul>

        </div>
      </aside>

      <div class="qmenu pc"><a href="http://www.gabjil119.com/" target="_blank"><img src="images/common/quick.png" alt="상담하기 119"></a></div>

      <div class="support_main">
        <div class="support_main_img">
          <img src="images/support/support_main.png" alt="직장갑질119와 함께해주세요." class="pc">
          <img src="images/support/m_support_main.png" alt="직장갑질119와 함께해주세요." class="mb">
        </div>
        <ul class="support_main_btn">
          <li class="support_main_btn_list01"><a href="<?php echo G5_URL ?>/support01.php"></a></li>
          <li class="support_main_btn_list02 active"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=support02"></a></li>
          <li class="support_main_btn_list03"><a href="<?php echo G5_URL ?>/support03.php"></a></li>
        </ul>
      </div>

      <div class="support_txt02">
        <p class="pc">후원을 안내합니다.</p>
        <div class="support_txt_line pc"></div>

        <h2>후원해주시는 후원단체와 후원인들께 항상 감사드립니다.</h2>
        <p>
          KB증권노동조합,강*경,강*배,강*희,강*,고*민,고*은,구*희,권*표,권*섭,권*성,김*석,김*영,김*규,김*섭,김*수,김*욱,김*경,김*현,김*희,김*윤,김*경,김*산,김*영,김*옥,김*미,김*국,김*민,김*범,김*민,김*욱,김*일,김*진,김*경,김*현,김*준,김*현,김*숙,김*정,김*주,김*숙,김*훈,김*휘,김*원,김*호,김*영,김*정,김*진,김*진,김*철,김*수,김*규,김*익,김*경,김*수,김*정,노*운,노*경,류*소,문*주,문*찬,문*석,민*신,박*리,박*해,박*경,박*현,박*우,박*호,박*희,박*화,박*호,박*현,박*형,박*진,박*근,박*진,배*리,백*성,서*익,서*영,서*정,석*지,손*정,손*완,손*경,송*규,송*봄,송*경,신*아,신*규,신*나,안*호,안*경,안*철,안*종,양*영,오*해,왕*근,우*묵,유*환,유*영,유*미,유*현,유*연,유*하,윤*아,윤*규,윤*영,윤*열,윤*현,윤*빈,이*민,이*호,이*주,이*현,이*호,이*우,이*선,이*철,이*민,이*희A,이*희B,이*윤,이*찬,이*혜,이*남,이*열,이*주,이*림,이*훈,임*선,장*윤,장*숙,전*식,전*진,정*진,정*희,정*현,정*연,정*환,정*연,정*경,정*용,정*원,정*철,정*준,조*구,조*숙,조*애,조*돈,조*환,조*영,조*희,조*진,조*리,조*영,조*진,최*신,최*훈,최*영,최*욱,최*하,최*정,최*송,최*배,최*은,최*환,최*혜,최*인,편*경,하*종,한*황,한*현,현*영,홍*희,홍*환,홍*,황*진,황*현,황*우
        </p>
        <p>이상 181명</p>
      </div>

    </div>
<?php
include_once(G5_PATH.'/tail.php');
?>
