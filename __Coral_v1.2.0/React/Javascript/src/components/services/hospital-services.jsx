import { Link } from 'react-router-dom'

import image1 from '../../assets/images/service/cardiology.svg'
import image2 from '../../assets/images/service/neurology.svg'
import image3 from '../../assets/images/service/orthopaedic.svg'
import image4 from '../../assets/images/service/gynecology.svg'
import image5 from '../../assets/images/service/dermatology.svg'

let data = [
    {
        image:image1,
        title:'Cardiology',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:image2,
        title:'Neurology',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:image3,
        title:'Orthopaedic',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:image4,
        title:'Gynecology',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:image5,
        title:'Dermatology',
        desc:'Success needs hard work & quality work.'
    },
]

export default function HospitalServices() {
  return (
    <div className="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 mt-2">
        {data.map((item,index)=>( 
            <div className="col" key={index}>
                <div className="position-relative features fea-medical text-center rounded shadow p-4">
                    <div className="position-relative d-flex justify-content-center">
                        <img src={item.image} className="avatar avatar-md-sm z-1" alt=""/>
                        <div className="feature-icon bg-soft-primary position-absolute top-50 start-50 translate-middle avatar avatar-small"></div>
                    </div>

                    <div className="mt-4">
                        <Link to="/service-detail" className="h5 text-dark link-title">Cardiology</Link>
                        <p className="text-muted mt-3">Success needs hard work & quality work.</p>
                        <Link to="/service-detail" className="text-primary">Read More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
