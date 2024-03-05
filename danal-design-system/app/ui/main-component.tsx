import Image from "next/image";

export function MainCard(cardProps: {
    href: string,
    imgsrc: string,
    imgalt: string,
    label: string,
    description: string,
    width?: number,
    height?: number,
}){

    return (
        <a href={cardProps.href}>
            <Image 
                src={cardProps.imgsrc} 
                alt={cardProps.imgalt}
                width={cardProps.width? cardProps.width : 36} 
                height={cardProps.height ? cardProps.height : 36} />
            <strong>{cardProps.label}</strong>
            <p>{cardProps.description}</p>
        </a>
    )
}

export function MainMoreIcon(){

    return (
        <Image src="/images/icon_more.png" alt="더보기 아이콘" width={12} height={12} />
    )
}