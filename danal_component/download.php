<?php
    include("./header.php");
?>
<!-- container-->
<div class="container">
    <div class="contents_w">
        <div class="cont_tit">
            <h2>
            <strong>Danal Design System</strong>
            디자인 시스템 다운로드
            </h2>
            <p>손쉬운 사용을 위해 라이브러리 파일을 다운로드 할 수 있습니다.<br> 
            최신 버전 컨텐츠로 다운받아 보세요.</p>
        </div>
        <div class="down_w">
            <div class="down_cont">
                <h3>컴포넌트 다운로드</h3>
                <p>html, css, img가 모두 포함된 전체 파일을 다운로드할 수 있습니다.<br> html 페이지에는 css, img가 연결되어 있습니다.</p>
                <button class="btn_down01" onclick="window.open('../danal_component/download/v_1.1_dn_component.zip')">다운로드 <span class="icon_down"></span></button>
            </div>
            <div class="down_cont">
                <h3>템플릿 다운로드</h3>
                <p>다날 관리자 템플릿을 다운로드 할 수 있습니다.</p>
                <div class="template_w">
                     <ul>
                        <li>
                            <div class="layout_w">
                              <div class="layout_item01">
                              <span  class="l_left"></span>
                              <span  class="l_right"></span>
                              </div>
                              <p>가로형 템플릿</p>
                            </div>
                            <div>
                                <button class="btn_down02" onclick="window.open('../danal_component/download/template_side.zip')">다운로드<span class="icon_down"></span></button>
                                <button class="btn_demo"onclick="window.open('../template/side/login.html')">demo</button>
                            </div>
                        </li>
                        <li>
                            <div class="layout_w">
                              <div class="layout_item02">
                              <span class="l_top"></span>
                              <span class="l_bottom"></span>
                              </div>
                              <p>세로형 템플릿</p>
                            </div>
                            <div>
                                <button class="btn_down02" onclick="window.open('../danal_component/download/template_top.zip')">다운로드<span class="icon_down"></span></button>
                                <button class="btn_demo" onclick="window.open('../template/top/login.html')">demo</button>
                            </div>
                        </li>
                     </ul>
                </div>
            </div>
         </div>
         <div class="cont_w01">
             <h3>CDN 링크 설정</h3>
             <div class="code_style">
             <div class="colorscripter-code" style="color:#f0f0f0;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important;overflow:auto"><table class="colorscripter-code-table" style="margin:0;padding:0;border:none;background-color:#333;border-radius:4px;" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding:6px;border-right:2px solid #4f4f4f"><div style="margin:0;padding:0;word-break:normal;text-align:right;color:#aaa;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="line-height:130%">1</div></div></td><td style="padding:6px 0;text-align:left"><div style="margin:0;padding:0;color:#f0f0f0;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #64A6FF;">link</span>&nbsp;<span style="color: #C8FFD7;">rel</span>=<span style="color: #FF7272;">"stylesheet"</span><span style="color:#a8ff58"></span>&nbsp;<span style="color: #C8FFD7;">href</span>=<span style="color: #FF7272;">"https://cdn.danal.co.kr/dds/css/dn_style.css"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div></div></td></tr></tbody></table></div>
             </div>
             <p>html의 head 부분에 CDN으로 추가하여 사용할 수 있습니다.</p>
         </div>
         <div class="cont_w01">
             <h3>CSS 추가 링크 설정</h3>
             <div class="code_style">
             <div class="colorscripter-code" style="color:#f0f0f0;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important;overflow:auto"><table class="colorscripter-code-table" style="margin:0;padding:0;border:none;background-color: #333;border-radius:4px;" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding:6px;border-right:2px solid #4f4f4f"><div style="margin:0;padding:0;word-break:normal;text-align:right;color:#aaa;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div><div style="line-height:130%">3</div><div style="line-height:130%">4</div><div style="line-height:130%">5</div><div style="line-height:130%">6</div><div style="line-height:130%">7</div></div></td><td style="padding:6px 0;text-align:left"><div style="margin:0;padding:0;color:#f0f0f0;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">head</span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">title</span><span style="color:#f0f0f0">&gt;</span>다날&nbsp;컴포넌트&nbsp;라이브러리<span style="color:#f0f0f0">&lt;</span><span style="color:#f0f0f0">/</span><span style="color: #fff;">title</span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">meta</span>&nbsp;<span style="color: #fff;">charset</span>=<span style="color: #fff;">"utf-8"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">meta</span>&nbsp;<span style="color: #fff;">name</span>=<span style="color: #fff;">"viewport"</span><span style="color:#a8ff58"></span>&nbsp;<span style="color: #fff;">content</span>=<span style="color: #fff;">"width=device-width,&nbsp;initial-scale=1"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #64A6FF;">link</span>&nbsp;<span style="color: #C8FFD7;">rel</span>=<span style="color: #FF7272;">"stylesheet"</span><span style="color:#a8ff58"></span>&nbsp;<span style="color: #C8FFD7;">href</span>=<span style="color: #FF7272;">"./css/sub.css"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #64A6FF;">link</span>&nbsp;<span style="color: #C8FFD7;">rel</span>=<span style="color: #FF7272;">"stylesheet"</span><span style="color:#a8ff58"></span>&nbsp;<span style="color: #C8FFD7;">href</span>=<span style="color: #FF7272;">"./css/dn_style.css"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#f0f0f0">&lt;</span><span style="color:#f0f0f0">/</span><span style="color: #fff;">head</span><span style="color:#f0f0f0">&gt;</span></div></div></td></tr></tbody></table></div>          
             </div>
             <p>html의 head 부분에 link로 추가하여 사용할 수 있습니다.</p>
         </div>
         <div class="cont_w01">
             <h3>폴더 트리 구조 및 경로</h3>
             <div class="code_style01">
                <img alt="트리구조" src="./images/img_folder.png">
             </div>
             <p>폴더 기본 구성을 변경 시 에는  dn_style.css 경로 수정이 필요합니다.</p>
         </div>
         <div class="cont_w01">
            <div class="down_cont" style="margin-bottom:30px">
                <h3>Font 다운로드</h3>
                <p>font 파일을 다운로드할 수 있습니다.<br> font 파일은 head 부분에 link로 연결하여 사용하실 수 있습니다.</p>
                <button class="btn_down01" onclick="window.open('../danal_component/download/dn_font.zip')">다운로드 <span class="icon_down"></span></button>
            </div>
             <div class="code_style">
             <div class="colorscripter-code" style="color:#f0f0f0;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important;overflow:auto"><table class="colorscripter-code-table" style="margin:0;padding:0;border:none;background-color: #333;border-radius:4px;" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding:6px;border-right:2px solid #4f4f4f"><div style="margin:0;padding:0;word-break:normal;text-align:right;color:#aaa;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div><div style="line-height:130%">3</div><div style="line-height:130%">4</div><div style="line-height:130%">5</div><div style="line-height:130%">6</div><div style="line-height:130%">7</div></div></td><td style="padding:6px 0;text-align:left"><div style="margin:0;padding:0;color:#f0f0f0;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">head</span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">title</span><span style="color:#f0f0f0">&gt;</span>다날&nbsp;컴포넌트&nbsp;라이브러리<span style="color:#f0f0f0">&lt;</span><span style="color:#f0f0f0">/</span><span style="color: #fff;">title</span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">meta</span>&nbsp;<span style="color: #fff;">charset</span>=<span style="color: #fff;">"utf-8"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #fff;">meta</span>&nbsp;<span style="color: #fff;">name</span>=<span style="color: #fff;">"viewport"</span><span style="color:#a8ff58"></span>&nbsp;<span style="color: #fff;">content</span>=<span style="color: #fff;">"width=device-width,&nbsp;initial-scale=1"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #64A6FF;">link</span>&nbsp;<span style="color: #C8FFD7;">rel</span>=<span style="color: #FF7272;">"stylesheet"</span><span style="color:#a8ff58"></span>&nbsp;<span style="color: #C8FFD7;">href</span>=<span style="color: #FF7272;">"./css/dn_style.css"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#f0f0f0">&lt;</span><span style="color: #64A6FF;">link</span>&nbsp;<span style="color: #C8FFD7;">rel</span>=<span style="color: #FF7272;">"stylesheet"</span><span style="color:#a8ff58"></span>&nbsp;<span style="color: #C8FFD7;">href</span>=<span style="color: #FF7272;">"./css/dn_font.css"</span><span style="color:#a8ff58"></span><span style="color:#f0f0f0">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#f0f0f0">&lt;</span><span style="color:#f0f0f0">/</span><span style="color: #fff;">head</span><span style="color:#f0f0f0">&gt;</span></div></div></td></tr></tbody></table></div>          
             </div>
         </div>
          <div class="cont_w01">
             <h3>버전 업데이트</h3>
             <table class="dn_table_md table_style04 aling_left ">
                <colgroup>
                    <col width="25%">
                    <col width="">
                    <col width="15%">
                </colgroup>
                <thead>
                    <tr><th>버전</th><th>업데이트 내용</th><th>일자</th></tr>
                </thead>
                <tbody>
                    <tr><td>v_5.1.3_dn_style.css</td><td>컨포넌트 버튼 스타일 추가</td><td>2021-12-12</td></tr>
                    <tr><td>v_5.1.2_dn_style.css</td><td>모바일/웹용 메일폼  리소스 추가 </td><td>2021-12-12</td></tr>
                    <tr><td>v_5.1.1_dn_style.css</td><td>신규 가로메뉴 형 템플릿 컬러 추가</td><td>2021-12-12</td></tr>
                    <tr><td>v_5.1.0_dn_style.css</td><td>컨포넌트 버튼 스타일 추가</td><td>2021-12-12</td></tr>
                    <tr><td>v_5.0.1_dn_style.css</td><td>모바일/웹용 메일폼  리소스 추가</td><td>2021-12-12</td></tr>
                    <tr><td>v_5.0.0_dn_style.css</td><td>신규 가로메뉴 형 템플릿 컬러 추가</td><td>2021-12-12</td></tr>
                </tbody>
             </table>
             <div class="pag_nav_w">
                <div class="dn_pag_md style02">
                    <a class="first"></a>
                    <a class="pre"></a>
                    <a class="on">1</a>
                    <a>2</a>
                    <a>3</a>
                    <a>4</a>
                    <a href="#">5</a>
                    <a class="next" href="#"></a>
                    <a class="last" href="#"></a>
                </div>
             </div>
                
         </div>
     </div>    
</div>
<!-- //container-->
<?php
    include("./footer.php");
?>