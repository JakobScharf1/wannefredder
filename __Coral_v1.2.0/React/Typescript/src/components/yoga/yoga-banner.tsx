import hero from '../../assets/images/hero/yoga-hero.png'
import hero1 from '../../assets/images/hero1.png'
import hero2 from '../../assets/images/hero2.png'
import hero3 from '../../assets/images/hero3.png'

import TinySlider from "tiny-slider-react";
import 'tiny-slider/dist/tiny-slider.css'

import { TypeAnimation } from 'react-type-animation';
import { Link } from 'react-router-dom'

export default function YogaBanner() {
    const settings = {
        container: '.tiny-single-item-no-nav',
        items: 1,
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        navPosition: "bottom",
        nav: false,
        speed: 400,
        gutter: 16,
      };
  return (
        <section className="bg-half-170 d-table w-100 bg-yoga">
            <div className="container position-relative z-1">
                <div className="row align-items-center">
                    <div className="col-md-6">
                        <div className="title-heading">
                            <span className="badge bg-soft-primary">Welcome to Coral</span>
                            <h1 className="heading my-3">Yoga, Meditation,  <br/> and  Wellness for <br/> a 
                            <span className="text-primary"> 
                            <TypeAnimation
                                sequence={[
                                    // Same substring at the start will only be typed out once, initially
                                    'Balanced',
                                    1000, // wait 1s before replacing "Mice" with "Hamsters"
                                    'Healthy',
                                    1000,
                                    'Fit & Fine',
                                    1000,
                                ]}
                                wrapper="span"
                                className="typewrite text-primary mx-3"
                                repeat={Infinity}
                                cursor={false}
                                />
                            Life</span></h1>
                            <p className="para-desc text-muted">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                            <div className="mt-4 pt-2">
                                <Link to="/services" className="btn btn-outline-primary">Get Started <i className="mdi mdi-arrow-right"></i></Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-6">
                        <div className="position-relative">
                            <div className="row">
                                <div className="col-12">
                                    <div className="tiny-single-item-no-nav">
                                        <TinySlider settings={settings}>
                                            <div className="tiny-slide">
                                                <img src={hero1} className="img-fluid" alt=""/>
                                            </div>
                                            <div className="tiny-slide">
                                                <img src={hero2} className="img-fluid" alt=""/>
                                            </div>
                                            <div className="tiny-slide">
                                                <img src={hero3} className="img-fluid" alt=""/>
                                            </div>
                                        </TinySlider>
                                    </div>
                                </div>
                            </div>
                            <div className="position-absolute top-0 start-0 z-n1">
                                <img src={hero} className="img-fluid" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  )
}
