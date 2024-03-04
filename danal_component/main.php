<?php
    include("./header.php");
?>
<!-- container-->
<div class="container">
	<script type="text/javascript">
	$(document).ready(function() {
    	 $(".variable").slick({
	    	  dots: false,
	    	  infinite: true,
	    	  speed: 800,
	    	  slidesToShow: 1,
	    	  autoplay: true,
	    	  autoplaySpeed: 4000,
	    	  adaptiveHeight: true,
	    	  arrows: false
	      });
   });
   </script>
    <div class="mainbanner_wrap variable">

        <div class="bg_banner01">
            <div class="width_banner">
                <div class="banner01">
                    <h1 class="title_broad">
                        효율적인 협업, 일관적인 사용자 경험을 위한<br>
                        다날 디자인 시스템을 지금 만나보세요!
                    </h1>
                    <h1 class="title_narrow">
                        효율적인 협업,<br>일관적인 사용자 경험을 위한<br>
                        다날 디자인 시스템을<br>지금 만나보세요!
                    </h1>
                    <img src="./images/img_mainbanner01.png" alt="컴포넌트, 디자이너와 개발자가 악수하는 이미지의 배너">
                </div>
            </div>
        </div>

        <div class="bg_banner02" > <!--배너2번-->
            <div class="width_banner">
                <div class="banner02">
                    <h1>디자이너와<br>
                        개발자를 연결하는<br>
                        다날 디자인 시스템입니다
                    </h1>
                    <img src="./images/img_mainbanner02.png" alt="컴포넌트와 아이콘 이미지를 소개하는 이미지의 배너">
                </div>
            </div>
        </div>
        
    </div>

<!--컴포넌트-->
    <div class="main_components">
        <div class="components_table">
            <details open>
                <summary><div class="comp_title">Guidelines<span>3<!--컨텐츠갯수--></span><img src="./images/icon_more.png" alt="더보기 아이콘"></div></summary>
                <div class="components_box">
                        <ul>
                            <li>
                                <a href="./foundation.php?view=guide.html">
                                    <img src="./images/icon_main_guide.png" alt="레이아웃가이드에 대한 아이콘">
                                    <strong>Guide/Layout</strong>
                                    <p>화면 크기에 따라 설계하기</p>
                                </a>
                            </li>
                            <li>
                                <a href="./foundation.php?view=typography.html">
                                    <img src="./images/icon_main_typo.png" alt="타이포가이드에 대한 아이콘">
                                    <strong>Typography</strong>
                                    <p>서체에 대한 가이드</p>
                                </a>
                            </li>
                            <li>
                                <a href="./foundation.php?view=olor.html">
                                    <img src="./images/icon_main_color.png" alt="컬러가이드에 대한 아이콘">
                                    <strong>Color</strong>
                                    <p>컬러 코드 제공</p>
                                </a>
                            </li>
                        </ul>
                </div>
            </details>
            <details open>
                <summary><div class="comp_title">Controls<span>8<!--컨텐츠갯수--></span><img src="./images/icon_more.png" alt="더보기 아이콘"></div></summary>
                <div class="components_box">
                    <ul>
                        <li>
                            <a href="./foundation.php?view=button.html">
                                <img src="./images/icon_main_button.png" alt="버튼에 대한 아이콘">
                                <strong>Button</strong>
                                <p>사용자 행동 유도</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=select.html">
                                <img src="./images/icon_main_select.png" alt="셀렉트에 대한 아이콘">
                                <strong>Select</strong>
                                <p>드롭다운 목록 중 옵션 선택</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=checkbox.html">
                                <img src="./images/icon_main_checkbox.png" alt="체크박스에 대한 아이콘">
                                <strong>Checkbox</strong>
                                <p>옵션 목록 중 여러개 선택</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=radiobox.html">
                                <img src="./images/icon_main_radio.png" alt="라디오박스에 대한 아이콘">
                                <strong>Radio</strong>
                                <p>옵션 목록 중 한가지 선택</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=text.html">
                                <img src="./images/icon_main_textfield.png" alt="텍스트필드에 대한 아이콘">
                                <strong>Text Field</strong>
                                <p>텍스트를 작성, 편집하는 필드</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=textarea.html">
                                <img src="./images/icon_main_textarea.png" alt="텍스트에어리어에 대한 아이콘">
                                <strong>Text Area</strong>
                                <p>여러 줄로 입력 가능한 필드</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=table.html">
                                <img src="./images/icon_main_table.png" alt="테이블에 대한 아이콘">
                                <strong>Table</strong>
                                <p>데이터를 정리하는 표</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=list.html">
                                <img src="./images/icon_main_list.png" alt="리스트에 대한 아이콘">
                                <strong>List</strong>
                                <p>데이터를 나열하는 목록</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>
            <details open>
                <summary><div class="comp_title">Resources<span>8<!--컨텐츠갯수--></span><img src="./images/icon_more.png" alt="더보기 아이콘"></div></summary>
                <div class="components_box">
                    <ul>
                        <li>
                            <a href="./foundation.php?view=navi.html">
                                <img src="./images/icon_main_navigation.png" alt="내비게이션에 대한 아이콘">
                                <strong>Navigation</strong>
                                <p>페이지 간 이동</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=tabs.html">
                                <img src="./images/icon_main_tab.png" alt="탭에 대한 아이콘">
                                <strong>Tab</strong>
                                <p>동일한 컨텐츠 내 탐색</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=page_navigtion.html">
                                <img src="./images/icon_main_pagenavigation.png" alt="페이지내비게이션에 대한 아이콘">
                                <strong>Pagination</strong>
                                <p>특정한 페이지로 이동하는 링크</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=footer.html">
                                <img src="./images/icon_main_footer.png" alt="푸터에 대한 아이콘">
                                <strong>Footer</strong>
                                <p>웹페이지 하단 정보 영역</p>
                            </a>
                        </li>
                        <li>
                            <a style="pointer-events: none;">
                                <img src="./images/icon_main_popup.png" alt="팝업에 대한 아이콘"><span>준비중</span>
                                <strong>Popup</strong>
                                <p>컨텐츠를 새창으로 띄우기</p>
                            </a>
                        </li>
                        <li>
                            <a style="pointer-events: none;">
                                <img src="./images/icon_main_mailform.png" alt="메일폼에 대한 아이콘"><span>준비중</span>
                                <strong>Mail Form</strong>
                                <p>HTML 메일 양식</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=loading.html">
                                <img src="./images/icon_main_loading.png" alt="로딩이미지에 대한 아이콘">
                                <strong>Loading</strong>
                                <p>데이터 처리 과정 표시</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=terms.html">
                                <img src="./images/icon_main_terms.png" alt="약관에 대한 아이콘">
                                <strong>Terms</strong>
                                <p>약관 내용 표시</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>
            <details open>
                <summary><div class="comp_title">Mobile<span>3<!--컨텐츠갯수--></span><img src="./images/icon_more.png" alt="더보기 아이콘"></div></summary>
                <div class="components_box">
                    <ul>
                        <li>
                            <a style="pointer-events: none;">
                                <img src="./images/icon_main_mobile.png" alt="모바일 탭 바에 대한 아이콘"><span>준비중</span>
                                <strong>Tab Bar</strong>
                                <p>모바일 화면 내 탭바</p>
                            </a>
                        </li>
                        <li>
                            <a style="pointer-events: none;">
                                <img src="./images/icon_main_mobile.png" alt="모바일 인풋박스에 대한 아이콘"><span>준비중</span>
                                <strong>Input Box</strong>
                                <p>모바일 화면 내 인풋박스</p>
                            </a>
                        </li>
                        <li>
                            <a style="pointer-events: none;">
                                <img src="./images/icon_main_mobile.png" alt="모바일 탑 앱 바에 대한 아이콘"><span>준비중</span>
                                <strong>Top App Bar</strong>
                                <p>모바일 화면 내 상단 앱 바</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>
            <details open>
                <summary><div class="comp_title">Icons<span>1<!--컨텐츠갯수--></span><img src="./images/icon_more.png" alt="더보기 아이콘"></div></summary>
                <div class="components_box off">
                    <ul>
                        <li>
                            <a href="./foundation.php?view=icon.html">
                                <img src="./images/icon_main_icon.png" alt="아이콘 컨텐츠에 대한 아이콘">
                                <strong>Icon</strong>
                                <p>효율적인 정보 제공</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>
        </div>
    </div>
</div>
<!-- //container-->
<?php
    include("./footer.php");
?>