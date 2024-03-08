import "../ui/sub.css";
import "../ui/dn_style.css"
import Link from "next/link";


export default function Layout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {

  return (
    <div className="container">
      <div className="left_navi">
        <div className="left_menu">
          <h2>Web</h2>
          <div className="components_l">
            <a className="first_menu">Controls</a>
            <button type="button">
              <span className="plus" style={{display: "none"}}></span>
              <span className="minus"></span>
            </button>
          </div>
          <div className="components_l on">
            <ul>
              <li><Link href="/web/button">Button</Link></li>
              <li><Link href="/web/select">Select</Link></li>
              <li><Link href="/web/checkbox">Checkbox</Link></li>
              <li><Link href="/web/radio">Radio</Link></li>
              <li><Link href="/web/text_field">Text_field</Link></li>
              <li><Link href="/web/text_area">Text_area</Link></li>
              <li><Link href="/web/table">Table</Link></li>
              <li><Link href="/web/list">list</Link></li>
            </ul>
          </div>
          <div className="components_l">
            <a className="first_menu">Resources</a>
            <button type="button">
              <span className="plus" style={{display: "none"}}></span>
              <span className="minus"></span>
            </button>
          </div>
          <div className="components_l on">
            <ul>
              <li><Link href="/web/navigation">Navigation</Link></li>
              <li><Link href="/web/tab">Tab</Link></li>
              <li><Link href="/web/page_navigtion">Page_navigtion</Link></li>
              <li><Link href="/web/footer">Footer</Link></li>
              <li><Link href="/web/popup">Popup</Link></li>
              <li><Link href="/web/mail_form">Mail_form</Link></li>
              <li><Link href="/web/loading">loading</Link></li>
              <li><Link href="/web/terms">Terms</Link></li>
            </ul>
          </div>
          <div className="components_l">
            <a className="first_menu">Mobile</a>
            <button type="button">
              <span className="plus" style={{display: "none"}}></span>
              <span className="minus"></span>
            </button>
          </div>
          <div className="components_l on">
            <ul>
              <li><Link href="javascript:;">Tab bar</Link></li>
              <li><Link href="javascript:;">Input box</Link></li>
              <li><Link href="javascript:;">Top app bar</Link></li>
            </ul>
          </div>
          <div className="components_l">
            <a className="first_menu">Icon</a>
            <button type="button">
              <span className="plus" style={{display: "none"}}></span>
              <span className="minus"></span>
            </button>
          </div>
          <div className="components_l on">
            <ul>
              <li><Link href="?view=icon.html">Icon</Link></li>
            </ul>
          </div>
          <div className="components_l">
            <a className="first_menu">Plug-in</a>
            <button type="button">
              <span className="plus" style={{display: "none"}} ></span>
              <span className="minus"></span>
            </button>
          </div>
          <div className="components_l on">
            <ul>
              <li><Link href="/web/datepicker">Datepicker</Link></li>
              <li><Link href="/web/datatable">Datatable</Link></li>
              <li><Link href="/web/highchart">Highchart</Link></li>
            </ul>
          </div>
        </div>
      </div>
      <div>{children}</div>
    </div>
  )
}