import { clientData } from '../../data/data'

import TinySlider from "tiny-slider-react";
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
    controls: false,
    mouseDrag: true,
    loop: true,
    rewind: true,
    autoplay: true,
    autoplayButtonOutput: false,
    autoplayTimeout: 3000,
    navPosition: "bottom",
    speed: 400,
    gutter: 12,
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

export default function ClientTwo() {
  return (
    <div className="tiny-three-item">
        <TinySlider settings={settings}>
            {clientData.map((item:ClientData,index:number)=>( 
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
                            <img src={item.image} className="avatar avatar-small rounded-pill shadow" alt=""/>
                            <div className="ms-2">
                                <h6 className="text-dark small mb-0">{item.name}</h6>
                                <small className="text-muted d-block">{item.position}</small>
                            </div>
                        </div>
                        <i className="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                    </div>
                </div>
            ))}
        </TinySlider>
    </div>
  )
}
