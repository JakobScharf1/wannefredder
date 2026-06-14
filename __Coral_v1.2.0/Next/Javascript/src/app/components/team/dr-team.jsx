import Image from 'next/image'
import Link from 'next/link'

import { FiFacebook, FiInstagram, FiTwitter } from 'react-icons/fi'

let teamData = [
    {
        image:'/images/team/01.jpg',
        name:'Jack John',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
    {
        image:'/images/team/02.jpg',
        name:'Jeremiah Green',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
    {
        image:'/images/team/03.jpg',
        name:'Christina Vasquez',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
    {
        image:'/images/team/04.jpg',
        name:'Lillian Boldt',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
]

export default function DrTeam() {
  return (
    <div className="container">
        <div className="row justify-content-center">
            <div className="col-12">
                <div className="section-title text-center mb-4 pb-2">
                    <h4 className="title mb-3">Doctor's Team</h4>
                    <p className="text-muted para-desc mx-auto mb-0">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                </div>
            </div>
        </div>

        <div className="row align-items-center g-4">
            {teamData.map((item,index)=>{
                return(
                    <div className="col-lg-3 col-md-6 col-12" key={index}>
                        <div className="card team team-primary shadow text-center mb-5">
                            <div className="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                                <Image src={item.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>

                                <ul className="list-unstyled team-social mb-0">
                                    {item.social.map((el, index)=>{
                                        let Icon = el
                                        return(
                                            <li className="mt-1" key={index}><Link href="#" className="btn btn-sm btn-pills btn-icon"><Icon className="icons fea-social"/></Link></li>
                                        )
                                    })}
                                </ul>
                            </div>

                            <div className="content bg-white mx-4 p-4 z-1 rounded shadow">
                                <Link href="#" className="text-dark h5 mb-0 title">{item.name}</Link>
                                <h6 className="text-muted mb-0 fw-normal">{item.position}</h6>
                            </div>
                        </div>
                    </div>
                )
            })}
        </div>
    </div>
  )
}
