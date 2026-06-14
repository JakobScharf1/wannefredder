'use client'
import Image from 'next/image';
import Link from 'next/link';

import { useEffect, useState } from 'react';

export default function Comingsoon() {
    let [days, setDays] = useState<number>(0);
    let [hours, setHours] = useState<number>(0);
    let [minutes, setMinutes] = useState<number>(0);
    let [seconds, setSeconds] = useState<number>(0);

    let deadline = "September, 13, 2025";

    let getTime = (deadline:any) => {
      let time = Date.parse(deadline) - Date.now();
      setDays(Math.floor(time / (1000 * 60 * 60 * 24)));
      setHours(Math.floor((time / (1000 * 60 * 60)) % 24));
      setMinutes(Math.floor((time / 1000 / 60) % 60));
      setSeconds(Math.floor((time / 1000) % 60));
    };

    useEffect(() => {
      let interval = setInterval(() => getTime(deadline), 1000);
      return () => clearInterval(interval);
    })
  return (
    <>
        <section className="bg-home d-flex align-items-center" style={{backgroundImage:`url('/images/hero/special.jpg')`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row">
                    <div className="col-12 p-0">
                        <div className="d-flex flex-column min-vh-100 justify-content-center p-md-5">
                            <div className="text-center">
                                <Link href="/"><Image src='/images/logo-icon-80-white.png' width={80} height={80} alt=""/></Link>
                            </div>
                            <div className="title-heading text-center my-auto">
                                <h2 className="title-dark text-white text-uppercase mt-2 mb-4 fw-semibold">Comingsoon</h2>
                                <p className="text-white para-desc para-dark mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                            
                                <div id="countdown">
                                    <ul className="count-down list-unstyled">
                                        <li id="days" className="count-number list-inline-item m-2">{days}<p className='count-head'>Days</p></li>
                                        <li id="hours" className="count-number list-inline-item m-2">{hours}<p className='count-head'>Hours</p></li>
                                        <li id="mins" className="count-number list-inline-item m-2">{minutes}<p className='count-head'>Mins</p></li>
                                        <li id="secs" className="count-number list-inline-item m-2">{seconds}<p className='count-head'>Secs</p></li>
                                        <li id="end" className="h1"></li>
                                    </ul>
                                </div>
                            </div>
                            <div className="text-center">
                                <p className="mb-0 text-white-50">© {new Date().getFullYear()} Coral. Design & Develop with <i className="mdi mdi-heart text-danger"></i> by <Link href="https://shreethemes.in/" target="_blank" className="text-reset">Shreethemes</Link>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </>
  )
}
