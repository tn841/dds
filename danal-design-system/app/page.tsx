import Image from "next/image";
import "./ui/main.css";
import {MainCard, MainMoreIcon} from "./ui/main-component";

export default function Home() {
  return (
    <div className="container">
      <div className="main_components">
        <div className="components_table">
            <details open>
                <summary>
                  <div className="comp_title">Guidelines<span>3</span>
                    <MainMoreIcon />
                  </div>
                </summary>
                <div className="components_box">
                        <ul>
                            <li>
                                <MainCard
                                    href="/foundation/layout"
                                    imgsrc="/images/icon_main_guide.png"
                                    imgalt="레이아웃가이드에 대한 아이콘"
                                    label="Guide/Layout"
                                    description="화면 크기에 따라 설계하기"
                                />
                                {/* <a href="./foundation.php?view=guide.html">
                                    <Image 
                                        src="/images/icon_main_guide.png" 
                                        alt="레이아웃가이드에 대한 아이콘" 
                                        width={36} 
                                        height={36} />
                                    <strong>Guide/Layout</strong>
                                    <p>화면 크기에 따라 설계하기</p>
                                </a> */}
                            </li>
                            <li>
                                <MainCard 
                                    href="/foundation/typo"
                                    imgalt="타이포가이드에 대한 아이콘"
                                    imgsrc="/images/icon_main_typo.png"
                                    label="Typography"
                                    description="서체에 대한 가이드"
                                />
                            </li>
                            <li>
                                <MainCard 
                                    href="/foundation/color"
                                    imgalt="컬러가이드에 대한 아이콘"
                                    imgsrc="/images/icon_main_color.png"
                                    label="Color"
                                    description="컬러 코드 제공"
                                />
                            </li>
                        </ul>
                </div>
            </details>
            <details open>
                <summary>
                    <div className="comp_title">Controls<span>8</span>
                        <MainMoreIcon/>
                    </div>
                </summary>
                <div className="components_box">
                    <ul>
                        <li>
                            <MainCard 
                                imgalt="버튼에 대한 아이콘"
                                imgsrc="/images/icon_main_button.png"
                                href="/foundation/button"
                                label="Button"
                                description="사용자 행동 유도"
                            />
                        </li>
                        <li>
                            <a href="./foundation.php?view=select.html">
                                <Image src="/images/icon_main_select.png" alt="셀렉트에 대한 아이콘" width={100} height={100} />
                                <strong>Select</strong>
                                <p>드롭다운 목록 중 옵션 선택</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=checkbox.html">
                                <Image src="/images/icon_main_checkbox.png" alt="체크박스에 대한 아이콘" width={100} height={100}/>
                                <strong>Checkbox</strong>
                                <p>옵션 목록 중 여러개 선택</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=radiobox.html">
                                <Image src="/images/icon_main_radio.png" alt="라디오박스에 대한 아이콘" width={100} height={100}/>
                                <strong>Radio</strong>
                                <p>옵션 목록 중 한가지 선택</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=text.html">
                                <Image src="/images/icon_main_textfield.png" alt="텍스트필드에 대한 아이콘" width={100} height={100}/>
                                <strong>Text Field</strong>
                                <p>텍스트를 작성, 편집하는 필드</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=textarea.html">
                                <Image src="/images/icon_main_textarea.png" alt="텍스트에어리어에 대한 아이콘" width={100} height={100}/>
                                <strong>Text Area</strong>
                                <p>여러 줄로 입력 가능한 필드</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=table.html">
                                <Image src="/images/icon_main_table.png" alt="테이블에 대한 아이콘" width={100} height={100}/>
                                <strong>Table</strong>
                                <p>데이터를 정리하는 표</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=list.html">
                                <Image src="/images/icon_main_list.png" alt="리스트에 대한 아이콘" width={100} height={100}/>
                                <strong>List</strong>
                                <p>데이터를 나열하는 목록</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>
            <details open>
                <summary>
                    <div className="comp_title">Resources<span>8</span>
                        <MainMoreIcon/>
                    </div>
                </summary>
                <div className="components_box">
                    <ul>
                        <li>
                            <a href="./foundation.php?view=navi.html">
                                <Image src="/images/icon_main_navigation.png" alt="내비게이션에 대한 아이콘" width={100} height={100}/>
                                <strong>Navigation</strong>
                                <p>페이지 간 이동</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=tabs.html">
                                <Image src="/images/icon_main_tab.png" alt="탭에 대한 아이콘" width={100} height={100}/>
                                <strong>Tab</strong>
                                <p>동일한 컨텐츠 내 탐색</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=page_navigtion.html">
                                <Image src="/images/icon_main_pagenavigation.png" alt="페이지내비게이션에 대한 아이콘" width={100} height={100}/>
                                <strong>Pagination</strong>
                                <p>특정한 페이지로 이동하는 링크</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=footer.html">
                                <Image src="/images/icon_main_footer.png" alt="푸터에 대한 아이콘" width={100} height={100}/>
                                <strong>Footer</strong>
                                <p>웹페이지 하단 정보 영역</p>
                            </a>
                        </li>
                        <li>
                            <a style={{pointerEvents: "none"}}>
                                <Image src="/images/icon_main_popup.png" alt="팝업에 대한 아이콘" width={100} height={100}/><span>준비중</span>
                                <strong>Popup</strong>
                                <p>컨텐츠를 새창으로 띄우기</p>
                            </a>
                        </li>
                        <li>
                            <a style={{pointerEvents: "none"}}>
                                <Image src="/images/icon_main_mailform.png" alt="메일폼에 대한 아이콘" width={100} height={100}/><span>준비중</span>
                                <strong>Mail Form</strong>
                                <p>HTML 메일 양식</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=loading.html">
                                <Image src="/images/icon_main_loading.png" alt="로딩이미지에 대한 아이콘" width={100} height={100}/>
                                <strong>Loading</strong>
                                <p>데이터 처리 과정 표시</p>
                            </a>
                        </li>
                        <li>
                            <a href="./foundation.php?view=terms.html">
                                <Image src="/images/icon_main_terms.png" alt="약관에 대한 아이콘" width={100} height={100}/>
                                <strong>Terms</strong>
                                <p>약관 내용 표시</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>
            <details open>
                <summary>
                    <div className="comp_title">Mobile<span>3</span>
                    <MainMoreIcon/>
                    </div></summary>
                <div className="components_box">
                    <ul>
                        <li>
                            <a style={{pointerEvents: "none"}}>
                                <Image src="/images/icon_main_mobile.png" alt="모바일 탭 바에 대한 아이콘" width={100} height={100}/><span>준비중</span>
                                <strong>Tab Bar</strong>
                                <p>모바일 화면 내 탭바</p>
                            </a>
                        </li>
                        <li>
                            <a style={{pointerEvents: "none"}}>
                                <Image src="/images/icon_main_mobile.png" alt="모바일 인풋박스에 대한 아이콘" width={100} height={100}/><span>준비중</span>
                                <strong>Input Box</strong>
                                <p>모바일 화면 내 인풋박스</p>
                            </a>
                        </li>
                        <li>
                            <a style={{pointerEvents: "none"}}>
                                <Image src="/images/icon_main_mobile.png" alt="모바일 탑 앱 바에 대한 아이콘" width={100} height={100}/><span>준비중</span>
                                <strong>Top App Bar</strong>
                                <p>모바일 화면 내 상단 앱 바</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>
            <details open>
                <summary>
                    <div className="comp_title">Icons<span>1</span>
                    <MainMoreIcon/>
                    </div></summary>
                <div className="components_box off">
                    <ul>
                        <li>
                            <a href="./foundation.php?view=icon.html">
                                <Image src="/images/icon_main_icon.png" alt="아이콘 컨텐츠에 대한 아이콘" width={100} height={100}/>
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
  );
}
