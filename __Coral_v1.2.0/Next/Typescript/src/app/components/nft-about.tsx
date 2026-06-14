import Link from 'next/link'
import { IconType } from 'react-icons';
import { FiBookmark, FiTarget, FiZap } from 'react-icons/fi'

let aboutData = [
    {
        icon:FiZap,
        title:'Create Item',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        icon:FiBookmark,
        title:'Collect',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        icon:FiTarget,
        title:'Sell Item',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
]

interface AboutData{
    icon: IconType;
    title: string;
    desc: string;
}

export default function NftAbout() {
  return (
    <>
            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">How we works? : Coral</h4>
                            <p className="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>
                </div>

                <div className="row g-4">
                    {aboutData.map((item:AboutData,index:number)=>{
                        let Icon = item.icon
                        return(
                            <div className="col-lg-4 col-md-6 col-12" key={index}>
                                <div className="position-relative features text-center p-4">
                                    <div className="position-relative d-flex justify-content-center">
                                        <Icon className="fea icon-md text-primary z-1"/>
                                        <div className="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                                    </div>
            
                                    <div className="mt-4">
                                        <Link href="/service-detail" className="h5 text-dark link-title">{item.title}</Link>
                                        <p className="text-muted mt-3">{item.desc}</p>
                                        <Link href="/service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                                    </div>
                                </div>
                            </div>
                        )
                    })}
                </div>
            </div>
    </>
  )
}
