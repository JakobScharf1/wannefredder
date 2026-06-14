import { Link } from 'react-router-dom'
import { servicesData } from '../../data/data'
import type { IconType } from 'react-icons';

interface Services{
    icon: IconType;
    title: string;
    desc: string;
}

export default function ServicesTwo() {
  return (
    <div className="row g-4">
        {servicesData.map((item:Services,index:number)=>{
            let Icon = item.icon
            return(
                <div className="col-lg-4 col-md-6 col-12" key={index}>
                    <div className="position-relative features text-center rounded p-4 pt-5">
                        <div className="position-relative d-flex justify-content-center">
                            <Icon className="fea icon-md text-primary z-1"></Icon>
                            <div className="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                        </div>

                        <div className="mt-4">
                            <Link to="/service-detail" className="h5 text-dark link-title">{item.title}</Link>
                            <p className="text-muted mt-3">{item.desc}</p>
                            <Link to="/service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                        </div>
                    </div>
                </div>
            )
        })}
    </div>
  )
}
