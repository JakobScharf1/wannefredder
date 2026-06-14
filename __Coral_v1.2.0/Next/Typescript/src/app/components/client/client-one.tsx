'use client'
import Image from 'next/image';
import dynamic from 'next/dynamic';

import { clientData } from '../../data/data'

const TinySlider = dynamic(()=>import("tiny-slider-react"),{ssr:false})
import 'tiny-slider/dist/tiny-slider.css';

interface ClientData{
    tag: string;
    image: string;
    rate: string[];
    desc: string;
    name: string;
    position: string;
}

const settings = {
    items: 1,
    controls: false,
    mouseDrag: true,
    loop: true,
    rewind: true,
    autoplay: true,
    autoplayButtonOutput: false,
    autoplayTimeout: 3000,
    navPosition: "bottom",
    speed: 400,
    gutter: 0,
};

export default function ClientOne() {
  return (
    <div className="tiny-single-item">
        <TinySlider settings={settings}>
            {clientData.map((item:ClientData,index:number)=>{
                return(
                    <div className="tiny-slide" key={index}>
                        <div className="position-relative overflow-hidden z-1 bg-white rounded shadow p-4 m-2">
                            <div className="d-flex align-items-center justify-content-between">
                                <h6 className="mb-0">{item.tag}</h6>

                                <ul className="list-unstyled mb-0 text-warning">
                                    {item.rate.map((el:string,index:number)=>( 
                                        <li className="list-inline-item" key={index}><i className={el}></i></li>
                                    ))}
                                </ul>
                            </div>

                            <p className="text-muted fst-italic mt-2">{item.desc}</p>

                            <div className="d-flex align-items-center">
                                <Image src={item.image} width={65} height={65} className="avatar avatar-small rounded-pill shadow object-fit-cover" alt=""/>
                                <div className="ms-2">
                                    <h6 className="text-dark small mb-0">{item.name}</h6>
                                    <small className="text-muted d-block">{item.position}</small>
                                </div>
                            </div>

                            <i className="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                        </div>
                    </div>
                )
            })}
        </TinySlider>
    </div>
  )
}
