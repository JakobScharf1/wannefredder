'use client'
import { counterData } from '../../data/data'
import CountUp from 'react-countup'

export default function CounterOne() {
  return (
        <div className="container-fluid position-relative mt-100 mt-60 pt-5">
            <div className="bg-overlay opacity-25 bg-transparent" style={{backgroundImage:`url('/images/map.png')`, backgroundPosition:'center'}}></div>
            <div className="container mt-5">
                <div className="row justify-content-center">
                    <div className="col">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Trusted by more than 10K users</h4>
                            <p className="text-muted para-desc mb-0 mx-auto">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                        </div>
                    </div>
                </div>

                <div className="row">
                    {counterData.slice(0,3).map((item,index)=>{
                        let Icon = item.icon
                        return(
                            <div className="col-sm-4 col-12 py-3" key={index}>
                                <div className="counter-box text-center">
                                    <div className="position-relative d-flex justify-content-center">
                                        <Icon className="fea icon-lg mb-3 text-primary"/>
                                        <div className="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                                    </div>
                                    <h2 className="mb-0 text-dark fw-semibold"><CountUp end={item.value}/>{item.symbol}</h2>
                                    <h6 className="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                                </div>
                            </div>
                        )
                    })}
                </div>
            </div>
        </div>
  )
}
