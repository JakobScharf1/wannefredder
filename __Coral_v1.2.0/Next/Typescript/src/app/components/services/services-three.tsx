import Link from 'next/link'
import { servicesData } from '../../data/data'
import { IconType } from 'react-icons';

interface Services{
    icon: IconType;
    title: string;
    desc: string;
}

export default function ServicesThree() {
  return (
    <div className="row align-items-center g-4">
        {servicesData.slice(0,3).map((item:Services,index:number)=>{
            let Icon = item.icon
            return(
                <div className="col-lg-4 col-md-6 col-12" key={index}>
                    <div className="position-relative features text-center rounded shadow p-4 pt-5">
                        <div className="position-relative d-flex justify-content-center">
                            <Icon className="fea icon-md text-primary z-1"/>
                            <div className="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                        </div>

                        <div className="mt-4">
                            <Link href="/service-detail" className="h5 text-dark link-title">Branding Strategy</Link>
                            <p className="text-muted mt-3">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                            <Link href="/service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                        </div>
                    </div>
                </div>
            )
        })}
    </div>
  )
}
