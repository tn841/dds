import Link from "next/link";
import "../ui/sub.css";
import "../ui/dn_style.css";

export default function Layout({
    children,
  }: Readonly<{
    children: React.ReactNode;
  }>) {

    return (
        <div>
          <div className="container">
                <div className="left_navi">
                    <div className="left_menu">
                        <h2>foundation</h2>
                        <div className="components_l">
                            <a className="first_menu">Guidelines</a>
                            <button type="button">
                                <span className="plus" style={{display: "none"}}></span>
                                <span className="minus"></span>
                            </button>
                        </div>
                        <div className="components_l on">
                            <ul>
                                <li>
                                  <Link href="/foundation/layout">Guide/Layout</Link>
                                </li>
                                <li>
                                  <Link href="/foundation/typo">Typography</Link>
                                </li>
                                <li>
                                  <Link href="/foundation/color">Color</Link>
                                </li>
                            </ul>
                        </div>
                        <div className="components_l">
                            <a className="first_menu">Web</a>
                            <button type="button">
                                <span className="plus" style={{display: "none"}}></span>
                                <span className="minus"></span>
                            </button>
                        </div>
                        <div className="components_l on">
                            <ul>
                                <li><a href="?view=index.html">Guide/Layout</a></li>
                                <li><a href="?view=typography.html">Typography</a></li>
                                <li><a href="?view=color.html">Color</a></li>
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
                                <li><a href="?view=index.html">Guide/Layout</a></li>
                                <li><a href="?view=typography.html">Typography</a></li>
                                <li><a href="?view=color.html">Color</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          {children}
        </div>
    )
}