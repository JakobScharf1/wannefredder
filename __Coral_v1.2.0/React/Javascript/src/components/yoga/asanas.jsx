import { Link } from 'react-router-dom'
import asana1 from '../../assets/images/asana/ardha_padmasana.png'
import asana2 from '../../assets/images/asana/bhujangasana.png'
import asana3 from '../../assets/images/asana/halasana.png'
import asana4 from '../../assets/images/asana/natarajasana.png'

let data = [
    {
        image:asana1,
        title:'Ardha Padmasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        image:asana2,
        title:'Bhujangasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        image:asana3,
        title:'Halasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
        image:asana4,
        title:'Natarajasana',
        desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
]

export default function Asanas() {
  return (
    <div className="row g-4">
        {data.map((item,index)=>( 
            <div className="col-lg-3 col-md-6 col-12" key={index}>
                <div className="position-relative features text-center rounded p-4">
                    <div className="position-relative d-flex justify-content-center">
                        <img src={item.image} className="avatar avatar-large" alt=""/>
                        <div className="feature-icon bg-soft-primary position-absolute top-0 translate-middle avatar avatar-large"></div>
                    </div>

                    <div className="mt-4">
                        <Link to="/service-detail" className="h5 text-dark link-title">{item.title}</Link>
                        <p className="text-muted mt-3">{item.desc}</p>
                        <Link to="/service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
