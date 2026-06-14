import Image from "next/image"
import Link from "next/link"

let data = [
    {
        image:'/images/hosting/1.png',
        title:'Shared Hosting',
        value:'Starting $2.99/month'
    },
    {
        image:'/images/hosting/2.png',
        title:'VPS Hosting',
        value:'Starting $2.99/month'
    },
    {
        image:'/images/hosting/3.png',
        title:'Dedicated Server',
        value:'Starting $2.99/month'
    },
    {
        image:'/images/hosting/4.png',
        title:'Cloud Hosting',
        value:'Starting $2.99/month'
    },
    {
        image:'/images/hosting/5.png',
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
                                <Image src={item.image} width={45} height={45} className="avatar avatar-md-sm" alt=""/>

                                <div className="mt-3">
                                    <Link href="#" className="text-white fw-semibold">{item.title}</Link>
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
