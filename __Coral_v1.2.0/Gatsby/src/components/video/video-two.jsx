import React,{ useState } from 'react'
import { Link } from 'gatsby'
import ModalPortal from './ModalPortal'
import { FiVideo } from 'react-icons/fi'

export default function VideoTwo({className}) {
    let [open, setOpen] = useState(false)
  return (
    <>
        <Link to="#!" onClick={() =>setOpen(!open)} className="btn btn-icon btn-pills btn-primary m-1 lightbox"><FiVideo className="icons"/></Link><span className={`fw-bold text-uppercase small align-middle ms-2 ${className ? className : ''}`}>Watch Now</span>

        {open &&
            <ModalPortal>
                <div className="show d-block" tabIndex="-1" style={{ backgroundColor: '#00000099', position:'fixed', width:'100vw', height:'100vh', top:'0', left:'0', zIndex:'99999' }}>
                    <div className="modal-dialog modal-dialog-centered modal-lg position-relative h-100 d-flex align-items-center justify-content-center">
                        <div className="modal-content">
                            <div className="modal-header py-2">
                                <button type="button" className="btn-close bg-light p-2" aria-label="Close" onClick={() =>setOpen(!open)}></button>
                            </div>
                            <div className="modal-body p-2">
                                <div className="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/yba7hPeTSjk?playlist=yba7hPeTSjk&loop=1" title="YouTube video" allowFullScreen ></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ModalPortal>
        }
    </>
  )
}
