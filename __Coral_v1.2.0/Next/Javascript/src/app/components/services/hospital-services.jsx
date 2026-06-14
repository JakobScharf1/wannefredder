import Image from "next/image"
import Link from "next/link"

let data = [
    {
        image:'/images/service/cardiology.svg',
        title:'Cardiology',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:'/images/service/neurology.svg',
        title:'Neurology',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:'/images/service/orthopaedic.svg',
        title:'Orthopaedic',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:'/images/service/gynecology.svg',
        title:'Gynecology',
        desc:'Success needs hard work & quality work.'
    },
    {
        image:'/images/service/dermatology.svg',
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
                        <Image src={item.image} width={45} height={45} className="avatar avatar-md-sm z-1" alt=""/>
                        <div className="feature-icon bg-soft-primary position-absolute top-50 start-50 translate-middle avatar avatar-small"></div>
                    </div>

                    <div className="mt-4">
                        <Link href="/service-detail" className="h5 text-dark link-title">Cardiology</Link>
                        <p className="text-muted mt-3">Success needs hard work & quality work.</p>
                        <Link href="/service-detail" className="text-primary">Read More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
