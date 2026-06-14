import { Link } from 'react-router-dom'

import { cryptoData } from '../../data/data'

import TinySlider from "tiny-slider-react";
import 'tiny-slider/dist/tiny-slider.css';

const settings = {
    controls: true,
    mouseDrag: true,
    loop: true,
    rewind: true,
    autoplay: true,
    autoplayButtonOutput: false,
    autoplayTimeout: 3000,
    navPosition: "bottom",
    controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
    nav: false,
    speed: 400,
    gutter: 0,
    responsive: {
        992: {
            items: 3
        },

        767: {
            items: 2
        },

        320: {
            items: 1
        },
    },
};


export default function CryptoSlider() {
  return (
    <div className="container mt-100 mt-60">
        <div className="row">
            <div className="col-12">
                <div className="tiny-three-item-icon">
                    <TinySlider settings={settings}>
                        {cryptoData.map((item,index)=>( 
                            <div className="tiny-slide" key={index}>
                                <div className="position-relative overflow-hidden rounded shadow bg-white p-4 m-2">
                                    <div className="position-relative d-flex align-items-center justify-content-between z-1">
                                        <div className="d-flex align-items-center">
                                            <img src={item.image} className="rounded-pill shadow bg-white avatar avatar-md-sm" alt=""/>
                                            
                                            <div className="ms-3">
                                                <h6 className="mb-1"><Link to="#" className="text-dark link-title">{item.name1} ({item.name2})</Link></h6>
                                                <h6 className={`small mb-0 ${item.text}`}>{item.price}</h6>
                                            </div>
                                        </div>
                                        
                                        <div className="ms-2">
                                            <span className={`badge rounded-pill ${item.bg}`}>{item.change1}</span>
                                        </div>
                                    </div>
                                    
                                    <div className="position-absolute top-50 start-100 translate-middle">
                                        <img src={item.image} className="avatar avatar-md-md opacity-10 me-5" alt=""/>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </TinySlider>
                </div>
            </div>
        </div>
    </div>
  )
}
