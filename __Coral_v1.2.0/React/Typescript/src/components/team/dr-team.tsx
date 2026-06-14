import { Link } from 'react-router-dom'

import { FiFacebook, FiInstagram, FiTwitter } from 'react-icons/fi'
import team1 from '../../assets/images/team/01.jpg'
import team2 from '../../assets/images/team/02.jpg'
import team3 from '../../assets/images/team/03.jpg'
import team4 from '../../assets/images/team/04.jpg'
import type { IconType } from 'react-icons'

let teamData = [
    {
        image:team1,
        name:'Jack John',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
    {
        image:team2,
        name:'Jeremiah Green',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
    {
        image:team3,
        name:'Christina Vasquez',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
    {
        image:team4,
        name:'Lillian Boldt',
        position:'Doctor',
        social:[FiFacebook, FiInstagram, FiTwitter]
    },
]

interface TeamData{
    image: string;
    name: string;
    position: string;
    social: IconType[];
}

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
            {teamData.map((item:TeamData,index:number)=>{
                return(
                    <div className="col-lg-3 col-md-6 col-12" key={index}>
                        <div className="card team team-primary shadow text-center mb-5">
                            <div className="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                                <img src={item.image} className="img-fluid" alt=""/>

                                <ul className="list-unstyled team-social mb-0">
                                    {item.social.map((el, index)=>{
                                        let Icon = el
                                        return(
                                            <li className="mt-1" key={index}><Link to="#" className="btn btn-sm btn-pills btn-icon"><Icon className="icons fea-social"/></Link></li>
                                        )
                                    })}
                                </ul>
                            </div>

                            <div className="content bg-white mx-4 p-4 z-1 rounded shadow">
                                <Link to="#" className="text-dark h5 mb-0 title">{item.name}</Link>
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
