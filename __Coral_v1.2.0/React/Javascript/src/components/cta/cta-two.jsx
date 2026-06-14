import bg from '../../assets/images/hero/pages.jpg'
import { clientData } from '../../data/data'

import TinySlider from "tiny-slider-react";
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

export default function CtaTwo() {
  return (
    <section className="cta-video-section position-relative" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center', backgroundAttachment:'fixed'}}>
        <div className="container">
            <div className="row">
                <div className="col-lg-4 col-md-5 col-10">
                    <div className="position-relative z-1 p-4 rounded shadow bg-white">
                        <div className="tiny-single-item">
                            <TinySlider settings={settings}>
                                {clientData.map((item,index)=>( 
                                    <div className="tiny-slide" key={index}>
                                        <div className="position-relative overflow-hidden">
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
                                        </div>
                                    </div>
                                ))}
                            </TinySlider>
                        </div>

                        <i className="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
  )
}
