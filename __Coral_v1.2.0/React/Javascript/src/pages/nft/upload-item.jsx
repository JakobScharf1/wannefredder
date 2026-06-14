import { FiLogOut, FiSettings, FiUser } from 'react-icons/fi'
import { useState } from 'react'
import { Link } from 'react-router-dom'

import bg from '../../assets/images/hero/pages.jpg'
import team from '../../assets/images/team/1.jpg'

import NftNavLight from '../../components/navbar/nft-nav-light'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'

export default function UploadItem() {

     let [file, setFile] = useState();

    function handleChange(e) {
        setFile(URL.createObjectURL(e.target.files[0]));
    }
  return (
    <>
        <NftNavLight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Upload Item</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link to="/">Coral</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Upload Item</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <div className="position-relative">
            <div className="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <section className="section">
            <div className="container">
                <div className="row g-4">
                    <div className="col-lg-3 col-md-4 order-2 order-md-1">
                        <div className="rounded shadow overflow-hidden sticky-bar">
                            <div className="bg-gradient-primary p-4 pt-5"></div>
                            <div className="position-relative">
                                <div className="position-absolute top-0 start-50 translate-middle">
                                    <img src={team} className="avatar avatar-small rounded-pill shadow-sm img-thumbnail bg-light" alt=""/>
                                </div>
                                <div className="content text-center p-4">
                                    <div className="mt-4">
                                        <h6 className="mb-0">Steven Townsend</h6>
                                        <small className="text-muted">@StreetBoy</small>

                                        <ul className="list-unstyled mb-0 mt-3" id="navmenu-nav">
                                            <li className="px-0">
                                                <Link to="/creator-profile" className="d-flex align-items-center text-dark">
                                                    <FiUser className="fea icon-sm me-1 align-middle"/>
                                                    <small className="d-block fw-semibold mb-0 ms-2">Profile</small>
                                                </Link>
                                            </li>
                                            
                                            <li className="px-0 mt-2">
                                                <Link to="/profile-setting" className="d-flex align-items-center text-dark">
                                                    <FiSettings className="fea icon-sm me-1 align-middle"/>
                                                    <small className="d-block fw-semibold mb-0 ms-2">Settings</small>
                                                </Link>
                                            </li>
                                            
                                            <li className="px-0 mt-2">
                                                <Link to="/lock-screen" className="d-flex align-items-center text-dark">
                                                    <FiLogOut className="fea icon-sm me-1 align-middle"/>
                                                    <small className="d-block fw-semibold mb-0 ms-2">Logout</small>
                                                </Link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-9 col-md-8 order-1 order-md-2">
                        <div className="rounded shadow p-4">
                            <div className="row">
                                <div className="col-lg-5">
                                    <div className="d-grid">
                                        <p className="fw-semibold mb-4">Upload your ART here, Please click "Upload Image" Button.</p>
                                        {file && 
                                            <div className="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light text-muted p-2 text-center small"><img src={file} alt="" className='w-100 h-auto'/></div>
                                        }
                                        {!file && 
                                            <div className="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light text-muted p-2 text-center small">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                                        }
                                        <input type="file" id="input-file" name="input-file" accept="image/*" hidden onChange={(e) =>handleChange(e)} />
                                        <label className="btn-upload btn btn-sm btn-primary rounded mt-4" htmlFor="input-file">Upload Image</label>
                                    </div>
                                </div>
    
                                <div className="col-lg-7 mt-4 mt-lg-0">
                                    <div className="ms-lg-4">
                                        <form>
                                            <div className="row">
                                                <div className="col-12 mb-4">
                                                    <label className="form-label fw-semibold">Art Title <span className="text-danger">*</span></label>
                                                    <input name="name" id="name" type="text" className="form-control" placeholder="Title :"/>
                                                </div>
                                                

                                                <div className="col-12 mb-4">
                                                    <label className="form-label fw-semibold"> Description : </label>
                                                    <textarea name="comments" id="comments" rows="4" className="form-control" placeholder="Description :"></textarea>
                                                </div>
                                                
        
                                                <div className="col-md-6 mb-4">
                                                    <label className="form-label fw-semibold">Type :</label>
                                                    <select className="form-control">
                                                        <option>GIFs</option>
                                                        <option>Music</option>
                                                        <option>Video</option>
                                                        <option>Tech</option>
                                                    </select>
                                                </div>
                                                
        
                                                <div className="col-md-6 mb-4">
                                                    <label className="form-label fw-semibold"> Rate : </label>
                                                    <input name="time" type="text" className="form-control" id="time" defaultValue="0.004ETH"/>
                                                </div>
                                                

                                                <div className="col-12">
                                                    <h6>Auction :</h6>
                                                </div>

                                                <div className="col-md-6 mb-4">
                                                    <label className="form-label fw-semibold"> Starting Date : </label>
                                                    <input name="date" type="text" className="form-control start" placeholder="Select date :"/>
                                                </div>
                                                
                
                                                <div className="col-md-6 mb-4">
                                                    <label className="form-label fw-semibold"> Expiration date : </label>
                                                    <input name="date" type="text" className="form-control end" placeholder="Select date :"/>
                                                </div>
                                                
        
                                                <div className="col-lg-12">
                                                    <button type="submit" className="btn btn-sm btn-primary rounded">Create Item</button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>
    </>
  )
}
