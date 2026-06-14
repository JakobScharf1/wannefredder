import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import { blogData } from '../data/data'

import Navlight from '../components/navbar/navlight'
import SidebarBlog from '../components/blog/sidebar-blog'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

interface BlogData{
    id: number;
    image: string;
    tag: string;
    title: string;
    desc: string;
}

export default function BlogSidebar() {
  return (
    <>
        <Navlight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Latest Articles</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link href="/">Coral</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Blogs</li>
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
                        <div className="row g-4">
                            {blogData.map((item:BlogData,index:number)=>( 
                                <div className="col-lg-6 col-12" key={index}>
                                    <div className="blog position-relative overflow-hidden shadow rounded p-4">
                                        <div className="position-relative">
                                            <div className="blog-image position-relative overflow-hidden rounded shadow">
                                                <Image src={item.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                                            </div>
            
                                            <div className="position-absolute top-100 start-0 translate-middle-y ms-2">
                                                <Link href="#" className="badge bg-primary">{item.tag}</Link>
                                            </div>
                                        </div>
            
                                        <div className="pt-4">
                                            <Link href={`/blog-standard-post/${item.id}`} className="text-dark title h5">{item.title}</Link>
            
                                            <p className="text-muted my-2">{item.desc}</p>
            
                                            <Link href={`/blog-standard-post/${item.id}`} className="text-dark read-more">Read More <i className="mdi mdi-chevron-right align-middle"></i></Link>
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div>
        
                        <div className="row mt-4">
                            <div className="col-12">
                                <ul className="pagination justify-content-center mb-0">
                                    <li className="page-item">
                                        <Link className="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i className="mdi mdi-chevron-left align-middle fs-6"></i></span>
                                        </Link>
                                    </li>
                                    <li className="page-item"><Link className="page-link" href="#">1</Link></li>
                                    <li className="page-item active"><Link className="page-link" href="#">2</Link></li>
                                    <li className="page-item"><Link className="page-link" href="#">3</Link></li>
                                    <li className="page-item">
                                        <Link className="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i className="mdi mdi-chevron-right align-middle fs-6"></i></span>
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
