
export default function Page() {
    return (
        <div className="components">
            <div className="introduce">
                <h1>Typography</h1>
                <h3>전역 폰트 설정, 제목, 폰트 정렬, 목록 등을 포함하여 Typography에 대한 가이드를 정의합니다.</h3>

                <div className="components_intro">


                    <div className="cont_w">
                        <h2>Font Type</h2>
                        <table className="table_style01 ">
                            <colgroup>
                                <col width="20%" />
                                <col width="" />
                            </colgroup>
                            <tr>
                                <th>Device</th>
                                <th>Font</th>
                            </tr>
                            <tr>
                                <th>Web</th>
                                <td>Noto Sans KR, Spoqa Han Sans</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>Helvetica, Apple SD Gothic Neo, sans-serif</td>
                            </tr>
                        </table>
                    </div>


                </div>

            </div>
        </div>
    )
}