import React from 'react'
import VideoOne from './video/video-one'

import about1 from '../assets/images/about/1.jpg'
import about2 from '../assets/images/about/2.jpg'
import about3 from '../assets/images/about/3.jpg'
import about4 from '../assets/images/about/4.jpg'

export default function AboutImage() {
  return (
    <div className="position-relative">
        <div className="row align-items-end">
            <div className="col-7">
                <img src={about1} className="img-fluid rounded" alt=""/>
            </div>

            <div className="col-5">
                <img src={about3} className="img-fluid rounded" alt=""/>
            </div>
        </div>

        <div className="row align-items-start mt-4">
            <div className="col-5">
                <img src={about4} className="img-fluid rounded" alt=""/>
            </div>

            <div className="col-7">
                <img src={about2} className="img-fluid rounded" alt=""/>
            </div>
        </div>

        <VideoOne className="position-absolute top-50 start-50 translate-middle"/>

        <div className="position-absolute top-50 start-50 translate-middle z-n1">
            <div className="bg-primary rounded opacity-75 p-5"><div className="p-5 m-5"></div></div>
        </div>
    </div>
  )
}
