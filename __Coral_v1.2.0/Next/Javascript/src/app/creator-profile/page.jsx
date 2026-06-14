import Link from 'next/link'
import Image from 'next/image'

import { FiCopy, FiUpload } from 'react-icons/fi'

import NftNav from '../components/navbar/nft-nav'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'
import ExploreProduct from '../components/nft/explore-product'

export default function CreatorProfile() {
    
  return (
    <>
        <NftNav/>

        <section className="section pb-0 position-relative mt-4 mt-lg-0">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col">
                        <Image src='/images/blog/1.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'200px'}} className="rounded shadow-sm img-fluid avatar avatar-ex-large w-100 object-fit-cover" alt=""/>
                        <div className="position-relative text-center">
                            <div className="position-absolute top-0 start-50 translate-middle">
                                <Image src='/images/team/1.jpg' width={65} height={65} className="avatar avatar-small img-thumbnail rounded-pill shadow" alt=""/>
                            </div>
                        </div>

                        <div className="content text-center">
                            <h5 className="mb-3 mt-5">streetboyyy</h5>
                            <small className="text-muted px-2 py-1 rounded shadow">bhcedeh5sdijuj-husac4saiu <Link href="#" className="text-primary h5 ms-1"><FiCopy className="fea icon-sm"/></Link></small>

                            <h6 className="mt-3 mb-0">Artist, UX / UI designer, and Entrepreneur</h6>

                            <div className="mt-4">
                                <Link href="/profile-setting" className="btn btn-sm btn-outline-primary mx-1">Edit Profile</Link>
                                <Link href="/upload-item" className="btn btn-sm btn-icon btn-outline-primary mx-1"><FiUpload className="fea icon-sm"/></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   

        <section className="section pt-5">
            <div className="container">
                <ExploreProduct/>
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>
    </>
  )
}
