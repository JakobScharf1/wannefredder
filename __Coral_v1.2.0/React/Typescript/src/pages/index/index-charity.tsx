import { Link } from 'react-router-dom'

import about1 from '../../assets/images/about/charity1.jpg'
import about2 from '../../assets/images/about/charity2.jpg'

import CountUp from 'react-countup'

import Navlight from '../../components/navbar/navlight'
import CharityBanner from '../../components/cta/charity-banner'
import CtaThree from '../../components/cta/cta-three'
import BlogOne from '../../components/blog/blog-one'
import TeamOne from '../../components/team/team-one'
import CharityServices from '../../components/services/charity-services'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'

import { causeData } from '../../data/data'

interface CausesData{
    image: string;
    title: string;
    desc: string;
    progress: string;
    value1: string;
    value2: string;
}

export default function IndexCharity() {
  return (
    <>
        <Navlight/>

        <CharityBanner/>

        <section className="section">
            <div className="container">
                <div className="row">
                    <div className="col-lg-4 col-md-6 order-1 order-md-2">
                        <div className="features-absolute">
                            <div className="p-4 rounded shadow position-relative bg-white">
                                <div className="section-title">
                                    <h4 className="title mb-3">Make a Donation</h4>
                                    <p className="mb-0 text-muted">Your $40.00 monthly donation can give 12 people clean water every year. 100% funds water projects.</p>
                                </div>
    
                                <form className="mt-4">
                                    <div className="row">
                                        <div className="col-12">
                                            <div className="mb-3">
                                                <label className="form-label fw-semibold" htmlFor="name">Your Name : </label>
                                                <input name="name" id="name" type="text" className="form-control" placeholder="Your Name :"/>
                                            </div>
                                        </div>                               
        
                                        <div className="col-md-6 col-12">
                                            <div className="mb-3">
                                                <label className="form-label fw-semibold" htmlFor="email"> Your Mail : </label>
                                                <input name="email" id="email" type="email" className="form-control" placeholder="Your Mail :"/>
                                            </div> 
                                        </div>  
        
                                        <div className="col-md-6 col-12">
                                            <div className="mb-3">
                                                <label className="form-label fw-semibold" htmlFor="number2">Phone No. : </label>
                                                <input name="number" type="number" className="form-control" id="number2" placeholder="Phone :"/>
                                            </div> 
                                        </div> 
        
                                        <div className="col-12">
                                            <div className="mb-3">
                                                <label className="form-label fw-semibold">I Want to Donate for</label>
                                                <select className="form-select form-control" name="item_name">
                                                    <option value="Donate For Food">Donate For Food</option>
                                                    <option value="Food For Orphan">Food For Orphan</option>
                                                    <option value="Home For Homeless">Home For Homeless</option>
                                                    <option value="Holyday Gifts In Kind">Holyday Gifts In Kind</option>
                                                    <option value="For clean Water in Africa">For clean Water in Africa</option>
                                                    <option value="Health and Rights">Health and Rights</option>
                                                </select>
                                            </div>
                                        </div>
        
                                        <div className="col-12">
                                            <label className="form-label fw-semibold">How much do you want to donate ?</label>
                                            <div className="mb-3">
                                                <div className="input-group mb-3">
                                                    <span className="input-group-text" id="basic-addon1">$</span>
                                                    <input type="number" className="form-control" min="1" max="1000" placeholder="Enter Amount" id="amount" aria-describedby="inputGroupPrepend" required/>
                                                </div>
                                            </div>
                                        </div>                                                                          
        
                                        <div className="col-12">
                                            <div className="form-check">
                                                <input className="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                                <label className="form-check-label" htmlFor="flexCheckDefault">I agree to the <Link to="#" className="text-primary">Terms and Conditions</Link>.</label>
                                            </div>
                                        </div>                                    
        
                                        <div className="col-12 mt-3">
                                            <button type="submit" id="donatefund" name="send" className="btn btn-primary">Donate Us</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-8 col-md-6 order-2 order-md-1">
                        <div className="row align-items-center g-4">
                            <div className="col-lg-6 col-md-12">
                                <div className="position-relative">
                                    <div className="me-4">
                                        <img src={about1} className="img-fluid rounded shadow" alt=""/>
                                    </div>
                                    
                                    <div className="position-absolute end-0 top-50">
                                        <div className="position-relative overflow-hidden rounded shadow">
                                            <img src={about2} className="img-fluid avatar avatar-xl-large" alt=""/>
                                            <div className="bg-overlay bg-primary opacity-75"></div>

                                            <div className="position-absolute top-50 start-50 translate-middle">
                                                <div className="counter-box text-center">
                                                    <h2 className="fw-bold mb-0 text-white"><CountUp end={100}/>M</h2>
                                                    <p className="counter-head small fw-semibold text-white mb-0">PEOPLE FACING FOOD INSECURITY</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div className="col-lg-6 col-md-12">
                                <div className="section-title">
                                    <h6 className="fw-normal text-primary">ABOUT US</h6>
                                    <h4 className="title mb-4">The origin of <br/> the Fundraiser</h4>
        
                                    <p className="text-muted mb-0">Get instant helpful resources about anything on the go, easily implement secure money transfer solutions, boost your daily efficiency, connect to other app users and create your own Fronter network, and much more with just a few taps. commodo consequat. Duis aute irure.</p>
                                
                                    <div className="mt-4">
                                        <Link to="#" className="btn btn-primary">Read More <i className="mdi mdi-arrow-right"></i></Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Popular Causes</h4>
                            <p className="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
                        </div>
                    </div>
                </div>

                <div className="row g-4">
                    {causeData.map((item:CausesData,index:number)=>( 
                        <div className="col-lg-4 col-md-6" key={index}>
                            <div className="position-relative rounded bg-white shadow overflow-hidden">
                                <div className="position-relative overflow-hidden">
                                    <img src={item.image} className="img-fluid" alt=""/>
                                    <div className="bg-overlay bg-linear-gradient-2"></div>
                                    <div className="position-absolute bottom-0 p-4">
                                        <Link to="#" className="text-white title-dark fw-semibold link-title">Donate Now <i className="mdi mdi-arrow-right"></i></Link>
                                    </div>
                                </div>

                                <div className="content p-4">
                                    <h5><Link to="#" className="text-dark link-title">{item.title}</Link></h5>
                                    <p className="text-muted mb-0">{item.desc}</p>
                                    <div className="progress-box mt-5">
                                        <div className="progress rounded" style={{height: '8px'}}>
                                            <div className="progress-bar position-relative bg-primary rounded" style={{width:'60%'}}>
                                                <div className="progress-value d-block text-dark h6 mb-0">{item.progress}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="d-flex align-items-center justify-content-between mt-3">
                                        <h6 className="text-muted mb-0">{item.value1}</h6>
                                        <h6 className="text-muted mb-0">{item.value2}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>

        <CtaThree/>

         <section className="section">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">We Have Funded <span className="text-primary">150 Charity Projects</span> for <br/> 10M People Around The World.</h4>
                            <p className="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
                        </div>
                    </div>
                </div>
                <CharityServices/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Our Volunteers</h4>
                            <p className="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
                        </div>
                    </div>
                </div>
                <TeamOne/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Blog Or News</h4>
                            <p className="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
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
