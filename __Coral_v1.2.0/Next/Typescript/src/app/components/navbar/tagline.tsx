import Link from 'next/link'
import React from 'react'
import { FiClock, FiMail, FiMapPin } from 'react-icons/fi'

export default function Tagline() {
  return (
    <div className="tagline bg-white shadow">
        <div className="container">                
            <div className="row">
                <div className="col-12">
                    <div className="d-flex align-items-center justify-content-between">
                        <ul className="list-unstyled mb-0">
                            <li className="d-inline-flex align-items-center">
                                <FiClock className="fea icon-sm text-primary"/>
                                <span className="ms-2 text-muted">Mon-Sat: 9am to 6pm</span>
                            </li>
                            <li className="d-inline-flex align-items-center ms-2">
                                <FiMapPin className="fea icon-sm text-primary"/>
                                <span className="ms-2 text-muted">Houston, USA 485</span>
                            </li>
                        </ul>

                        <ul className="list-unstyled mb-0">
                            <li className="d-inline-flex align-items-center">
                                <FiMail className="fea icon-sm text-primary"/>
                                <Link href="mailto:contact@example.com" className="ms-2 text-muted link-title">contact@example.com</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

  )
}
