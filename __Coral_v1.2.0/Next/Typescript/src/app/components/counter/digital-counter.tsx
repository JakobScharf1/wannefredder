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

export default function DigitalCounter() {
  return (
        <div className="row g-4">
            {counterData.slice(0,3).map((item:CounterData, index:number)=>{
                let Icon = item.icon
                return(
                    <div className="col-lg-12 col-md-4 col-6" key={index}>
                        <div className="counter-box text-center">
                            <div className="position-relative">
                                <Icon className="fea icon-md mb-2 text-primary"/>
                            </div>
                            <h3 className="text-dark fw-semibold"><CountUp end={item.value}/>{item.symbol}</h3>
                            <h6 className="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                        </div>    
                    </div>
                )
            })}
        </div>
  )
}
