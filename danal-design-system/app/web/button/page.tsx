

export default function Page() {

    return (
        <div className="components">
            <div className="introduce">
                <h1>Button</h1>
                <h3>버튼은 사용자가 데이터를 전송하거나 기능을 실행하게 하는 어떠한 행동을 유도합니다.
                    다양한 필요를 위해 여러 스타일이 제공됩니다.</h3>
                <div className="components_intro">
                    <div className="demo">
                        <h2>Demo</h2>
                        <div className="source_demo">
                            <button type="button" className="dn_btn_sample">BUTTON</button>
                        </div>
                    </div>
                </div>
                <div className="info style01">
                    <p>버튼 태그는 <code>button</code>, <code>input type=&quot;button&quot;</code>, <code>a</code> 3가지를 주로 사용한다.</p>
                </div>
                <div className="info style02">
                    <p><code>button</code>, <code>input</code> 은 <code>type=&quot;button&quot;</code> 을 필수로 뒤에 덧붙여 사용한다.</p>
                </div>
                <div className="info style02">
                    <p><code>a</code> 는 <code>role=&quot;button&quot;</code> 을 필수로 뒤에 덧붙여 사용한다.</p>
                </div>
                <div className="source_code">
                    {/* <div className="colorscripter-code" style="color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important;overflow:auto"><table className="colorscripter-code-table" style="margin:0;padding:0;border:none;background-color:#fafafa;border-radius:4px;" cellspacing="0" cellpadding="0"><tr><td style="padding:6px;border-right:2px solid #e5e5e5"><div style="margin:0;padding:0;word-break:normal;text-align:right;color:#666;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div><div style="line-height:130%">3</div></div></td><td style="padding:6px 0;text-align:left"><div style="margin:0;padding:0;color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#010101">&lt;</span><span style="color:#066de2">button</span>&nbsp;<span style="color:#0a9989">type</span>=<span style="color:#df5000">"button"</span><span style="color:#0a9989"></span>&nbsp;<span style="color:#0a9989">className</span>=<span style="color:#df5000">"dn_btn_lg"</span><span style="color:#0a9989"></span><span style="color:#010101">&gt;</span>Button<span style="color:#010101">&lt;</span><span style="color:#010101">/</span><span style="color:#066de2">button</span><span style="color:#010101">&gt;</span>&nbsp;<span style="color:#999999">&lt;!--button&nbsp;태그--&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#010101">&lt;</span><span style="color:#066de2">input</span>&nbsp;<span style="color:#0a9989">type</span>=<span style="color:#df5000">"button"</span><span style="color:#0a9989"></span>&nbsp;<span style="color:#0a9989">value</span>=<span style="color:#df5000">"Button"</span><span style="color:#0a9989"></span>&nbsp;<span style="color:#0a9989">className</span>=<span style="color:#df5000">"dn_btn_lg"</span><span style="color:#0a9989"></span><span style="color:#010101">&gt;</span>&nbsp;<span style="color:#999999">&lt;!--input&nbsp;태그--&gt;</span>&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#010101">&lt;</span><span style="color:#066de2">a</span>&nbsp;<span style="color:#0a9989">href</span>=<span style="color:#df5000">"#"</span><span style="color:#0a9989"></span>&nbsp;<span style="color:#0a9989">role</span>=<span style="color:#df5000">"button"</span><span style="color:#0a9989"></span>&nbsp;<span style="color:#0a9989">className</span>=<span style="color:#df5000">"dn_btn_lg"</span><span style="color:#0a9989"></span><span style="color:#010101">&gt;</span>Button<span style="color:#010101">&lt;</span><span style="color:#010101">/</span><span style="color:#066de2">a</span><span style="color:#010101">&gt;</span>&nbsp;<span style="color:#999999">&lt;!--a&nbsp;태그--&gt;</span></div></div></td><td style="vertical-align:bottom;padding:0 2px 4px 0"><a href="http://colorscripter.com/info#e" target="_blank" style="text-decoration:none;color:white"><span style="font-size:9px;word-break:normal;background-color:#e5e5e5;color:white;border-radius:10px;padding:1px">cs</span></a></td></tr></table></div> */}
                </div>
                <div className="info style01">
                    <p>버튼 태그의 스타일을 지정할 때에 <code>className=&quot;사이즈, 스타일&quot;</code> 순서를 지키도록 한다.</p>
                </div>
                <div className="source_code">
                    {/* <div className="colorscripter-code" style="color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important;overflow:auto"><table className="colorscripter-code-table" style="margin:0;padding:0;border:none;background-color:#fafafa;border-radius:4px;" cellspacing="0" cellpadding="0"><tr><td style="padding:6px;border-right:2px solid #e5e5e5"><div style="margin:0;padding:0;word-break:normal;text-align:right;color:#666;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div></div></td><td style="padding:6px 0;text-align:left"><div style="margin:0;padding:0;color:#010101;font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important;line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#010101">&lt;</span><span style="color:#066de2">button</span>&nbsp;<span style="color:#0a9989">type</span>=<span style="color:#df5000">"button"</span><span style="color:#0a9989"></span>&nbsp;<span style="color:#0a9989">className</span>=<span style="color:#df5000">"<span style="background-color: yellow;">dn_btn_lg&nbsp;btn_secondary</span>"</span><span style="color:#0a9989"></span><span style="color:#010101">&gt;</span>.btn_secondary<span style="color:#010101">&lt;</span><span style="color:#010101">/</span><span style="color:#066de2">button</span><span style="color:#010101">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#010101">&lt;</span><span style="color:#066de2">button</span>&nbsp;<span style="color:#0a9989">type</span>=<span style="color:#df5000">"button"</span><span style="color:#0a9989"></span>&nbsp;<span style="color:#0a9989">className</span>=<span style="color:#df5000">"<span style="background-color: yellow;">dn_btn_lg&nbsp;btn_line</span>"</span><span style="color:#0a9989"></span><span style="color:#010101">&gt;</span>.btn_line<span style="color:#010101">&lt;</span><span style="color:#010101">/</span><span style="color:#066de2">button</span><span style="color:#010101">&gt;</span></div></div></td><td style="vertical-align:bottom;padding:0 2px 4px 0"><a href="http://colorscripter.com/info#e" target="_blank" style="text-decoration:none;color:white"><span style="font-size:9px;word-break:normal;background-color:#e5e5e5;color:white;border-radius:10px;padding:1px">cs</span></a></td></tr></table></div> */}
                </div>


            </div>
        </div>
    )
}