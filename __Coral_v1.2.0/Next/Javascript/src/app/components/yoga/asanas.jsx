import Image from "next/image"
import Link from "next/link"

let data = [
    {
        image:'/images/asana/ardha_padmasana.png',
        title:'Ardha Padmasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        image:'/images/asana/bhujangasana.png',
        title:'Bhujangasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        image:'/images/asana/halasana.png',
        title:'Halasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        image:'/images/asana/natarajasana.png',
        title:'Natarajasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
]

export default function Asanas() {
  return (
    <div className="row g-4">
        {data.map((item,index)=>( 
            <div className="col-lg-3 col-md-6 col-12" key={index}>
                <div className="position-relative features text-center rounded p-4">
                    <div className="position-relative d-flex justify-content-center">
                        <Image src={item.image} width={140} height={140} className="avatar avatar-large" alt=""/>
                        <div className="feature-icon bg-soft-primary position-absolute top-0 translate-middle avatar avatar-large"></div>
                    </div>

                    <div className="mt-4">
                        <Link href="/service-detail" className="h5 text-dark link-title">{item.title}</Link>
                        <p className="text-muted mt-3">{item.desc}</p>
                        <Link href="/service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
