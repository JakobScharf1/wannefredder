'use client'
import { counterData } from '@/app/data/data'
import React from 'react'
import CountUp from 'react-countup'
import { IconType } from 'react-icons';

interface CounterData{
    icon: IconType;
    title: string;
    value: number;
    symbol: string;
}

export default function CounterAbout() {
  return (
        <div className="row">
            {counterData.map((item:CounterData,index:number)=>{
                let Icon = item.icon
                return( 
                    <div className="col-6 mt-4" key={index}>
                        <div className="p-4 rounded bg-white shadow-lg">
                            <div className="counter-box text-center">
                                <div className="position-relative d-flex justify-content-center">
                                    <Icon className="fea icon-lg mb-3 text-primary"/>
                                    <div className="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                                </div>
                                <h3 className="mb-0 text-dark fw-semibold"><CountUp end={item.value}/>{item.symbol}</h3>
                                <h6 className="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                            </div>   
                        </div>
                    </div>
                )
            })}
        </div>
  )
}
