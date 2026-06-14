import type { IconType } from 'react-icons';
import { FiAperture, FiSend, FiUsers } from 'react-icons/fi'
import { Link } from 'react-router-dom'

let data = [
    {
        icon:FiAperture,
        title:'Breakfast Programme',
        desc:`We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.`
    },
    {
        icon:FiSend,
        title:'Food Assistance',
        desc:`We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.`
    },
    {
        icon:FiUsers,
        title:'Social Works',
        desc:`We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.`
    },
]

interface Services{
    icon: IconType;
    title: string;
    desc: string;
}

export default function CharityServices() {
    return (
        <div className="row g-4">
            {data.map((item:Services,index:number)=>{
                let Icon = item.icon
                return(
                    <div className="col-lg-4 col-md-6 col-12" key={index}>
                        <div className="position-relative features text-center rounded shadow p-4 pt-5">
                            <div className="position-relative d-flex justify-content-center">
                                <Icon className="fea icon-md text-primary z-1"/>
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
