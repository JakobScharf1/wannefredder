import Image from 'next/image'
import Link from 'next/link'

import { blogData } from '../../data/data'

interface BlogData{
    id: number;
    image: string;
    tag: string;
    title: string;
    desc: string;
}

export default function BlogOne() {
  return (
    <div className="row g-4">
        {blogData.slice(0,3).map((item:BlogData,index:number)=>( 
            <div className="col-lg-4 col-md-6 col-12" key={index}>
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
  )
}
