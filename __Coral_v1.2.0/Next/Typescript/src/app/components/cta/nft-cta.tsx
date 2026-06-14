import Image from "next/image"
import Link from "next/link"

let data = [
    {
        image:'/images/community.png',
        title:'Join our community: Coral',
        desc:'Welcome to the future, you can buy and sell awesome artworks form here.'
    },
    {
        image:'/images/united.png',
        title:'Learn more about us: Coral',
        desc:'Welcome to the future, you can buy and sell awesome artworks form here.'
    },
]

interface Data{
    image: string;
    title: string;
    desc: string;
}

export default function NftCta() {
  return (
        <section className="cta-video-section position-relative overflow-hidden" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundAttachment:'fixed'}}>
            <div className="bg-overlay"></div>
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title text-white title-dark mb-3">Join the fastest growing Coral NFTs</h4>
                            <p className="text-white-50 para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>
                </div>

                <div className="row g-4">
                    {data.map((item:Data,index:number)=>( 
                        <div className="col-md-6" key={index}>
                            <div className="card p-4 rounded-md shadow bg-white">
                                <h4 className="mb-4">{item.title}</h4>
                                <p className="text-muted mb-0">{item.desc}</p>

                                <div className="mt-3">
                                    <Link href="/aboutus" className="btn btn-link primary text-dark">Read More <i className="mdi mdi-arrow-right"></i></Link>
                                </div>
                                <div className="py-4"></div>
                                <div className="position-absolute bottom-0 end-0">
                                    <Image src={item.image} width={110} height={110} className="avatar avatar-medium opacity-25" alt=""/>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
  )
}
