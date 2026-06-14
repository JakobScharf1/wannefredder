import React from 'react'
import { Link } from 'gatsby'

import { servicesData } from '../../data/data'

export default function ServicesOne() {
  return (
    <div className="row g-4">
      {servicesData.slice(0,3).map((item,index)=>{
        let Icon  = item.icon
        return(
            <div className="col-lg-4 col-md-6 col-12" key={index}>
                <div className="position-relative features d-flex">
                    <div className="position-relative d-flex justify-content-center">
                        <Icon className="fea icon-m-md text-primary z-1"/>
                        <div className="feature-icon bg-soft-primary position-absolute top-0 start-50 translate-middle"></div>
                    </div>

                    <div className="ms-3">
                        <Link to="/service-detail" className="h5 text-dark link-title">{item.title}</Link>
                        <p className="text-muted mt-3">{item.desc}</p>
                        <Link to="service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                </div>
            </div>
        )
      } 
      )}
  </div>
  )
}
