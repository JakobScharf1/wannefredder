import Image from "next/image"

let images  = ['/images/client/amazon.svg','/images/client/google.svg','/images/client/lenovo.svg','/images/client/paypal.svg','/images/client/shopify.svg','/images/client/spotify.svg','/images/client/amazon.svg','/images/client/google.svg','/images/client/lenovo.svg','/images/client/paypal.svg','/images/client/shopify.svg','/images/client/spotify.svg',]

export default function PartnerOne() {
  return (
    <ul className="list-inline mb-0 move-text">
        {images.map((item,index)=>( 
            <li className="list-inline-item px-sm-5 px-4 mb-0" key={index}>
                <Image src={item} width={0} height={0} sizes="100vw" style={{width:'100%', height:'28px'}} className="img-fluid img-white" alt=""/>
            </li>
        ))}
    </ul>
  )
}
