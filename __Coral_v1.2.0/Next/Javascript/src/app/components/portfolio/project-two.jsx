import Image from 'next/image'
import { portfolioOne } from '../../data/data'
import Link from 'next/link'

export default function ProjectTwo() {
  return (
    <div className="row g-4">
        {portfolioOne.map((item,index)=>( 
            <div className="col-lg-3 col-md-4 " key={index}>
                <div className="portfolio modern rounded shadow position-relative overflow-hidden">
                    <div className="position-relative overflow-hidden image">
                        <Image src={item.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                    </div>

                    <div className="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded m-4">
                        <Link href="#" className="text-dark fs-5 fw-medium link-title">{item.title}</Link>
                        <p className="text-muted mb-0">{item.name}</p>
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
