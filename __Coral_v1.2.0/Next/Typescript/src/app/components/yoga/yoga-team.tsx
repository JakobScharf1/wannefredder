import Image from 'next/image'
import Link from 'next/link'
import { IconType } from 'react-icons';
import { FiFacebook, FiInstagram, FiTwitter } from 'react-icons/fi'

interface TeamData{
    image: string;
    name: string;
    position: string;
    social: IconType[];
}

export const teamData = [
    {
        image:'/images/team/yoga1.jpg',
        name:'Jack John',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
    {
        image:'/images/team/yoga2.jpg',
        name:'Jeremiah Green',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
    {
        image:'/images/team/yoga3.jpg',
        name:'Christin Vasquez',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
    {
        image:'/images/team/yoga4.jpg',
        name:'Lillian Boldt',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
]

export default function YogaTeam() {
  return (
    <div className="row g-4">
        {teamData.map((item:TeamData,index:number)=>{
            return(
                <div className="col-lg-3 col-md-6 col-12" key={index}>
                    <div className="card team team-primary bg-transparent text-center mb-5">
                        <div className="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                            <Image src={item.image} width={0} height={0} sizes="100vw" style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>

                            <ul className="list-unstyled team-social mb-0">
                                {item.social.map((el,index)=>{
                                    let Icon = el
                                    return(
                                        <li className="mt-1" key={index}><Link href="#" className="btn btn-sm btn-pills btn-icon"><Icon className="icons fea-social"/></Link></li>
                                    )
                                })}
                            </ul>
                        </div>

                        <div className="content bg-white mx-4 p-4 z-1 rounded shadow">
                            <Link href="#" className="text-dark h5 mb-0 title">{item.name}</Link>
                            <h6 className="text-muted mb-0 mt-1 fw-normal">{item.position}</h6>
                        </div>
                    </div>
                </div>
            )
        })}
    </div>
  )
}
