import React, { useEffect, useState } from 'react';
import { clientData } from '../../data/data'

import 'tiny-slider/dist/tiny-slider.css';

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
    const [TinySlider, setTinySlider] = useState(null);

     useEffect(() => {
        if (typeof window !== 'undefined') {
        import('tiny-slider-react').then((mod) => {
            setTinySlider(() => mod.default);
        });
        }
    }, []);

  if (!TinySlider) return null;
  return (
    <div className="tiny-single-item">
        <TinySlider settings={settings}>
            {clientData.map((item,index)=>{
                return(
                    <div className="tiny-slide" key={index}>
                        <div className="position-relative overflow-hidden z-1 bg-white rounded shadow p-4 m-2">
                            <div className="d-flex align-items-center justify-content-between">
                                <h6 className="mb-0">{item.tag}</h6>

                                <ul className="list-unstyled mb-0 text-warning">
                                    {item.rate.map((el,index)=>( 
                                        <li className="list-inline-item" key={index}><i className={el}></i></li>
                                    ))}
                                </ul>
                            </div>

                            <p className="text-muted fst-italic mt-2">{item.desc}</p>

                            <div className="d-flex align-items-center">
                                <img src={item.image} className="avatar avatar-small rounded-pill shadow object-fit-cover" alt=""/>
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
