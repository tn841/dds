
export default function Page() {
    return (
        <>
            <div className="components">
                <div className="introduce">
                    <h1>Color-Guide</h1>
                    <h3>다날 디자인 시스템에서 사용하는 컬러를 정의합니다.</h3>


                    <div className="components_intro">
                        <div className="cont_w">
                            <h2>Color palette</h2>
                            <p className="subtext">브랜드의 시각적 아이덴티티에 사용되는 색상은 사용자에게 특정한 감정적 반응을 불러일으킬 수 있습니다.
                                색상 팔레트를 올바로 선택하면 사용자의 기분에 영향을 미치고 브랜드에 대한 느낌을 개선하여 전환 가능성을 높일 수 있습니다.
                            </p>
                            <h3>Basic Color</h3>
                            <ul className="card_w">
                                <li>
                                    <div className="color_card">
                                        <div className="color_card_bg dn_c_b010"></div>
                                        <div className="color_card_tit"><p>Blue010</p><p>#2A61CC</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div className="color_card">
                                        <div className="color_card_bg dn_c_b020"></div>
                                        <div className="color_card_tit"><p>Blue020</p><p>#184FBC</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div className="color_card">
                                        <div className="color_card_bg dn_c_r010"></div>
                                        <div className="color_card_tit"><p>Red010</p><p>#F33A3A</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div className="color_card">
                                        <div className="color_card_bg dn_c_g010"></div>
                                        <div className="color_card_tit"><p>Gray010</p><p>#5A657B</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div className="color_card">
                                        <div className="color_card_bg dn_c_g020"></div>
                                        <div className="color_card_tit"><p>Gray020</p><p>#4D5769</p></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}