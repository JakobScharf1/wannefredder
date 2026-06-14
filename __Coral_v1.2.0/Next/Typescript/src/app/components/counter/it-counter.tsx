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

export default function ItCounter() {
  return (
        <div className="row">
            {counterData.slice(0,3).map((item:CounterData,index:number)=>{
                let Icon = item.icon
                return(
                    <div className="col-lg-4 col-6 mt-4" key={index}>
                        <div className="counter-box">
                            <div className="position-relative">
                                <Icon className="fea icon-lg mb-2 text-primary"/>
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
