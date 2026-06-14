import image1 from '../assets/images/client/amazon.svg'
import image2 from '../assets/images/client/google.svg'
import image3 from '../assets/images/client/lenovo.svg'
import image4 from '../assets/images/client/paypal.svg'
import image5 from '../assets/images/client/shopify.svg'
import image6 from '../assets/images/client/spotify.svg'

let images  = [image1,image2,image3,image4,image5,image6,image1,image2,image3,image4,image5,image6,]

export default function PartnerOne() {
  return (
    <ul className="list-inline mb-0 move-text">
        {images.map((item:string,index:number)=>( 
            <li className="list-inline-item px-sm-5 px-4 mb-0" key={index}>
                <img src={item} className="img-fluid img-white" alt=""/>
            </li>
        ))}
    </ul>
  )
}
