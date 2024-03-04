import Image from "next/image";
import Link from "next/link";

export default function Layout({
    children,
  }: Readonly<{
    children: React.ReactNode;
  }>) {

    return (
        <div>{children}</div>
    )
}