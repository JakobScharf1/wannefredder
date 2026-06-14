import { Link } from 'react-router-dom'
import { FiFacebook, FiInstagram, FiTwitter } from 'react-icons/fi'

import team1 from '../../assets/images/team/yoga1.jpg'
import team2 from '../../assets/images/team/yoga2.jpg'
import team3 from '../../assets/images/team/yoga3.jpg'
import team4 from '../../assets/images/team/yoga4.jpg'

export const teamData = [
    {
        image:team1,
        name:'Jack John',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
    {
        image:team2,
        name:'Jeremiah Green',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
    {
        image:team3,
        name:'Christin Vasquez',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
    {
        image:team4,
        name:'Lillian Boldt',
        position:'Yoga Coach',
        social:[FiFacebook,FiInstagram,FiTwitter]
    },
]

export default function YogaTeam() {
  return (
    <div className="row g-4">
        {teamData.map((item,index)=>{
            return(
                <div className="col-lg-3 col-md-6 col-12" key={index}>
                    <div className="card team team-primary bg-transparent text-center mb-5">
                        <div className="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                            <img src={item.image} className="img-fluid" alt=""/>

                            <ul className="list-unstyled team-social mb-0">
                                {item.social.map((el,index)=>{
                                    let Icon = el
                                    return(
                                        <li className="mt-1" key={index}><Link to="#" className="btn btn-sm btn-pills btn-icon"><Icon className="icons fea-social"/></Link></li>
                                    )
                                })}
                            </ul>
                        </div>

                        <div className="content bg-white mx-4 p-4 z-1 rounded shadow">
                            <Link to="" className="text-dark h5 mb-0 title">{item.name}</Link>
                            <h6 className="text-muted mb-0 mt-1 fw-normal">{item.position}</h6>
                        </div>
                    </div>
                </div>
            )
        })}
    </div>
  )
}
