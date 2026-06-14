import Link from 'next/link'
import Image from 'next/image'

import { FiSearch } from 'react-icons/fi'
import { blogTag, recentPost } from '../../data/data'

interface BlogPost{
    image: string;
    title: string;
    date: string;
}

export default function SidebarBlog() {
  return (
    <>
      <div className="card bg-white p-4 rounded shadow sticky-bar">
        <div>
            <h6 className="pt-2 pb-2 bg-light rounded text-center">Search</h6>

            <div className="search-bar mt-4">
                <div id="itemSearch" className="menu-search mb-0">
                    <form role="search" method="get" id="searchItemform" className="searchform">
                        <input type="text" className="form-control rounded border" name="s" id="searchItem" placeholder="Search..."/>
                        <input type="submit" id="searchItemsubmit" value="Search"/>
                        <FiSearch className="icons"/>
                    </form>
                </div>
            </div>
        </div>

        <div className="mt-4">
            <h6 className="pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
            <div className="mt-4">
              {recentPost.map((item:BlogPost,index:number)=>( 
                <div className="blog blog-primary d-flex align-items-center mt-3" key={index}>
                    <Image src={item.image} className="avatar avatar-small rounded" width={0} height={0} sizes='100vw' style={{width: 'auto', height:'65px'}} alt=""/>
                    <div className="flex-1 ms-3">
                        <Link href="#" className="d-block title text-dark fw-medium">{item.title}</Link>
                        <span className="text-muted small">{item.date}</span>
                    </div>
                </div>
              ))}
            </div>
        </div>

        <div className="mt-4 text-center">
            <h6 className="pt-2 pb-2 bg-light rounded">Tags Cloud</h6>
            <ul className="tagcloud list-unstyled mt-4">
              {blogTag.map((item:string,index:number)=>{
                return(
                  <li className="d-inline-flex m-1" key={index}><Link href="#" className="rounded fw-medium text-dark py-1 px-2">{item}</Link></li>
                )
              })}
            </ul>
        </div>
      </div> 
    </>
  )
}
