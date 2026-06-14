import { Link, useParams } from 'react-router-dom'

import bg from '../../assets/images/hero/pages.jpg'
import blog from '../../assets/images/blog/1.jpg'

import { blogData } from '../../data/data';

import Navlight from '../../components/navbar/navlight'
import SidebarBlog from '../../components/blog/sidebar-blog';
import BlogComment from '../../components/blog/blog-comment';
import BlogDesc from '../../components/blog/blog-desc';
import Footer from '../../components/footer';
import ScrollToTop from '../../components/scroll-to-top';

export default function BlogStandardPost() {
    let params = useParams();
    let id:any = params.id

    let data = blogData.find((item)=>item.id === parseInt(id))
  return (
    <>
        <Navlight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <span className="badge bg-primary">Coral</span>
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark mt-4">{data && data?.title ? data.title : 'Utilizing mobile technology in the field'}</h5>

                            <ul className="list-inline text-center mb-0">
                                <li className="list-inline-item mx-4 mt-4">
                                    <span className="text-white-50 d-block">Author</span>
                                    <Link to="#" className="text-white title-dark">{data && data.tag ? data.tag : 'Coral'}</Link>
                                </li>

                                <li className="list-inline-item mx-4 mt-4">
                                    <span className="text-white-50 d-block">Date</span>
                                    <span className="text-white title-dark">15th July 2025</span>
                                </li>

                                <li className="list-inline-item mx-4 mt-4">
                                    <span className="text-white-50 d-block">Read Time</span>
                                    <span className="text-white title-dark">5 min read</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link to="/">Coral</Link></li>
                            <li className="breadcrumb-item"><Link to="/blogs">Blogs</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">{data && data?.title ? data.title : 'Utilizing mobile technology in the field'}</li>
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
                    <div className="col-lg-8 col-md-7">
                        <div className="card border-0 shadow rounded overflow-hidden">
                            <img src={data && data.image ? data.image : blog} className="img-fluid" alt=""/>
                            <BlogDesc/>
                        </div>

                        <BlogComment/>
                    </div>

                    <div className="col-lg-4 col-md-5 col-12">
                        <SidebarBlog/>
                    </div>
                </div>
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>

    </>
  )
}
