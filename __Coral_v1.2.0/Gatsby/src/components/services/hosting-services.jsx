import React from 'react'
import { Link } from 'gatsby'

import image1 from '../../assets/images/hosting/1.png'
import image2 from '../../assets/images/hosting/2.png'
import image3 from '../../assets/images/hosting/3.png'
import image4 from '../../assets/images/hosting/4.png'
import image5 from '../../assets/images/hosting/5.png'

let data = [
    {
        image:image1,
        title:'Shared Hosting',
        value:'Starting $2.99/month'
    },
    {
        image:image2,
        title:'VPS Hosting',
        value:'Starting $2.99/month'
    },
    {
        image:image3,
        title:'Dedicated Server',
        value:'Starting $2.99/month'
    },
    {
        image:image4,
        title:'Cloud Hosting',
        value:'Starting $2.99/month'
    },
    {
        image:image5,
        title:'Reseller Hosting',
        value:'Starting $2.99/month'
    },
]

export default function HostingServices() {
  return (
    <div className="row justify-content-center">
        <div className="col-lg-12">
            <div className="features-absolute">
                <div className="row row-cols-lg-5 row-cols-md-3 row-cols-lg-2 row-cols-lg-1 g-4">
                    {data.map((item,index)=>( 
                        <div className="col" key={index}>
                            <div className="features rounded shadow p-4 bg-primary bg-gradient">
                                <img src={item.image} className="avatar avatar-md-sm" alt=""/>

                                <div className="mt-3">
                                    <Link to="" className="text-white fw-semibold">{item.title}</Link>
                                    <small className="text-white-50 d-block mt-1">{item.value}</small>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    </div>
  )
}
