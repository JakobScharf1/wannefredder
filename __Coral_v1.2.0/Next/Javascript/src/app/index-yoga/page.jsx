import React from 'react'
import Image from 'next/image'

import Navdark from '../components/navbar/navdark'
import YogaBanner from '../components/yoga/yoga-banner'
import YogaAbout from '../components/yoga/yoga-about'
import Asanas from '../components/yoga/asanas'
import CtaThree from '../components/cta/cta-three'
import YogaTab from '../components/yoga/yoga-tab'
import YogaTeam from '../components/yoga/yoga-team'
import FaqOne from '../components/faq/faq-one'
import BlogOne from '../components/blog/blog-one'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

export default function IndexYoga() {
  return (
    <>
        <Navdark bg="" tagline="" position="nav-right"/>   

        <YogaBanner/>

          <section className="section">
            <div className="container">
                <YogaAbout/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Yoga Asanas</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                        </div>
                    </div>
                </div>
                <Asanas/>
            </div>
        </section>

        <CtaThree/>

        <section className="section" id="schedule">
            <YogaTab/>
            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Meet Our Coaches</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                        </div>
                    </div>
                </div>
                <YogaTeam/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-6 col-md-6">
                        <div className="position-relative">
                            <Image src='/images/faqs.png' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                            <div className="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title mb-4 ms-lg-3">
                            <h4 className="title mb-3">Frequently Asked Questions</h4>
                            <p className="text-muted para-desc mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                            <FaqOne/>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Blog Or News</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                        </div>
                    </div>
                </div>
                <BlogOne/>
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>
    </>
  )
}
