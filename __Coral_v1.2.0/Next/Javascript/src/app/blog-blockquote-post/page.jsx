import React from 'react'
import Link from 'next/link'

import Navlight from '../components/navbar/navlight'
import BlogDesc from '../components/blog/blog-desc'
import BlogComment from '../components/blog/blog-comment'
import SidebarBlog from '../components/blog/sidebar-blog'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

export default function BlogBlockquotePost() {
  return (
    <>
        <Navlight/>  

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <span className="badge bg-primary">Blockquote</span>
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark mt-4">You can choose between multiple languages</h5>

                            <ul className="list-inline text-center mb-0">
                                <li className="list-inline-item mx-4 mt-4">
                                    <span className="text-white-50 d-block">Author</span>
                                    <Link href="#" className="text-white title-dark">Coral</Link>
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
                            <li className="breadcrumb-item"><Link href="/">Coral</Link></li>
                            <li className="breadcrumb-item"><Link href="/blogs">Blogs</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">You can choose between multiple languages</li>
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
                            <div className="card-body">
                                <div className="bg-soft-primary p-4 rounded shadow text-center mb-4">
                                    <div className="position-relative">
                                        <div className="blog-line border border-top rounded-0 position-absolute top-50 w-100"></div>
                                        <div className="p-3 rounded-circle d-inline-flex bg-white z-1 position-relative"><i className="mdi mdi-24px mdi-format-quote-open lh-1"></i></div>
                                    </div>

                                    <div className="py-3 px-lg-4 my-2">
                                        <p className="text-dark fst-italic h4 mb-0">“ I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best. ”</p>
                                        <h6 className="mb-0 mt-3"> - Marilyn Monroe</h6>
                                    </div>

                                    <div className="position-relative">
                                        <div className="blog-line border border-top rounded-0 position-absolute top-50 w-100"></div>
                                        <div className="p-3 rounded-circle d-inline-flex bg-white z-1 position-relative"><i className="mdi mdi-24px mdi-format-quote-close lh-1"></i></div>
                                    </div>
                                </div>
                                
                                <BlogDesc/>
                            </div>
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
