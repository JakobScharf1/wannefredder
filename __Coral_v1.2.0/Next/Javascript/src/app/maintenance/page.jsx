'use client'
import Image from 'next/image';
import Link from 'next/link';
import { useEffect, useState } from 'react';

export default function Maintenance() {
    let [minutes, setMinutes] = useState(0);
    let [remainingSeconds, setRemainingSeconds] = useState(0);

    useEffect(() => {
        let intervalId = setInterval(() => {
            calculateTimeRemaining()
        }, 1000);
        var seconds = 3599;
        function calculateTimeRemaining() {
            const minutes = Math.round((seconds - 30) / 60);
            const remainingSeconds = seconds % 60;
            setMinutes(minutes);
            setRemainingSeconds(remainingSeconds);
            if (seconds === 0) {
                clearInterval(intervalId);
            } else {
                seconds = seconds - 1;
            }
        }
        return () => {
            clearInterval(intervalId);
        };
    }, []);
  return (
    <>
        <section className="bg-home d-flex align-items-center" style={{backgroundImage:`url('/images/hero/special.jpg')`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row">
                    <div className="col-12 p-0">
                        <div className="d-flex flex-column min-vh-100 justify-content-center p-md-5">
                            <div className="text-center">
                                <Link href="/"><Image src='/images/logo-icon-80-white.png' width={93} height={22} alt=""/></Link>
                            </div>
                            <div className="title-heading text-center my-auto">
                                <div className="row justify-content-center g-4">
                                    <div className="col-md-12 text-center">
                                        <h2 className="title-dark text-white text-uppercase mt-2 mb-4 fw-semibold">Maintenance</h2>
                                        <p className="text-white-50 para-desc para-dark mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                                    </div>
                                </div>
                
                                <div className="row my-4">
                                    <div className="col-md-12 text-center">
                                        <div className="text-center">
                                            <span id="maintenance" className="timer">{minutes}:{remainingSeconds}</span><span className="d-block h6 text-uppercase text-white title-dark">Minutes</span>
                                        </div>
                                    </div>
                                </div>
                
                                <div className="row">
                                    <div className="col-12 text-center">
                                        <div className="subscribe-form">
                                            <form className="mx-auto" action="index.html">
                                                <input name="email" id="email" type="email" className="rounded-pill bg-white" required="" placeholder="Your email :"/>
                                                <button type="submit" className="btn btn-primary rounded-pill">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
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
