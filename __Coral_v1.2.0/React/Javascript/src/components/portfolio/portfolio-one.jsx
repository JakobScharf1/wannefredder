import { portfolioOne } from '../../data/data'
import { Link } from 'react-router-dom'

export default function PortfolioOne() {
  return (
    <div className="row g-4">
        {portfolioOne.slice(0,6).map((item,index)=>( 
            <div className="col-lg-4 col-md-4" key={index}>
                <div className="portfolio modern rounded shadow position-relative overflow-hidden">
                    <div className="position-relative overflow-hidden image">
                        <img src={item.image} className="img-fluid" alt=""/>
                        <div className="position-absolute start-0 end-0 top-0 bottom-0 overlay"></div>
                    </div>

                    <div className="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded shadow m-4">
                        <Link to="#" className="text-dark fs-5 fw-medium link-title">{item.title}</Link>
                        <p className="text-muted mb-0">{item.name}</p>
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
