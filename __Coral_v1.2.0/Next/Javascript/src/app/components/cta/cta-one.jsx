import VideoOne from '../video/video-one'

export default function CtaOne() {
  return (
    <section className="cta-video-section position-relative" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundPosition:'center', backgroundAttachment:'fixed'}}>
        <div className="bg-overlay"></div>
        <div className="container">
            <div className="row">
                <div className="col-12">
                    <VideoOne className="d-flex justify-content-center"/>

                    <div className="section-title text-center mt-4">
                        <h4 className="title text-white mb-0">Scalable & Growing Business for Startups.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
  )
}
