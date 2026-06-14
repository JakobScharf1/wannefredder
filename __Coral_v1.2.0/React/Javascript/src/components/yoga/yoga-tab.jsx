import { Link } from 'react-router-dom'
import yoga1 from '../../assets/images/team/yoga1.jpg'
import yoga2 from '../../assets/images/team/yoga2.jpg'
import yoga3 from '../../assets/images/team/yoga3.jpg'
import yoga4 from '../../assets/images/team/yoga4.jpg'

let data = [
    {
        image:yoga1,
        time:'8:00AM',
        title:'Dhanurasana',
        name:'- Jack John'
    },
    {
        image:yoga2,
        time:'9:00AM',
        title:'Bhujangasana',
        name:'- Jeremiah Green'
    },
    {
        image:yoga3,
        time:'10:00AM',
        title:'Sirsasana',
        name:'- Christina Vasquez'
    },
    {
        image:yoga4,
        time:'11:00AM',
        title:'Padmasana',
        name:'- Lillian Boldt'
    },
    {
        image:yoga1,
        time:'12:00AM',
        title:'Utthita Parsvakonasana',
        name:'- Jack John'
    },
    {
        image:yoga2,
        time:'1:00PM',
        title:'Natarajasana',
        name:'- Jeremiah Green'
    },
    {
        image:yoga3,
        time:'2:00PM',
        title:'Halasana',
        name:'- Christina Vasquez'
    },
    {
        image:yoga4,
        time:'3:00PM',
        title:'Vajrasana',
        name:'- Lillian Boldt'
    },
]

export default function YogaTab() {
  return (
    <div className="container">
        <div className="row justify-content-center">
            <div className="col-12">
                <div className="section-title text-center mb-4 pb-2">
                    <h4 className="title mb-3">Yoga Schedule</h4>
                    <p className="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                </div>
            </div>
        </div>

        <div className="row g-4">
            <div className="col-md-4">
                <ul className="nav nav-pills nav-justified flex-column mb-0 sticky-bar" id="pills-tab" role="tablist">
                    <li className="nav-item">
                        <Link className="nav-link rounded shadow active" id="mondayschedule" data-bs-toggle="pill" to="#monday" role="tab" aria-controls="monday" aria-selected="false">
                            <div className="text-center py-1">
                                <h6 className="mb-0">Monday</h6>
                            </div>
                        </Link>
                    </li>
                    
                    <li className="nav-item mt-2">
                        <Link className="nav-link rounded shadow" id="tuesdayschedule" data-bs-toggle="pill" to="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">
                            <div className="text-center py-1">
                                <h6 className="mb-0">Tuesday</h6>
                            </div>
                        </Link>
                    </li>
                    
                    <li className="nav-item mt-2">
                        <Link className="nav-link rounded shadow" id="wednesdayschedule" data-bs-toggle="pill" to="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">
                            <div className="text-center py-1">
                                <h6 className="mb-0">Wednesday</h6>
                            </div>
                        </Link>
                    </li>
                    
                    <li className="nav-item mt-2">
                        <Link className="nav-link rounded shadow" id="thursdayschedule" data-bs-toggle="pill" to="#thursday" role="tab" aria-controls="thursday" aria-selected="false">
                            <div className="text-center py-1">
                                <h6 className="mb-0">Thursday</h6>
                            </div>
                        </Link>
                    </li>
                    
                    <li className="nav-item mt-2">
                        <Link className="nav-link rounded shadow" id="fridayschedule" data-bs-toggle="pill" to="#friday" role="tab" aria-controls="friday" aria-selected="false">
                            <div className="text-center py-1">
                                <h6 className="mb-0">Friday</h6>
                            </div>
                        </Link>
                    </li>
                    
                    <li className="nav-item mt-2">
                        <Link className="nav-link rounded shadow" id="saturdayschedule" data-bs-toggle="pill" to="#saturday" role="tab" aria-controls="saturday" aria-selected="false">
                            <div className="text-center py-1">
                                <h6 className="mb-0">Saturday</h6>
                            </div>
                        </Link>
                    </li>
                </ul>
            </div>

            <div className="col-md-8 col-12">
                <div className="tab-content" id="pills-tabContent">
                    <div className="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="mondayschedule">
                        <div className="table-responsive bg-white shadow rounded">
                            <table className="table mb-0 table-center">
                                <tbody>
                                    {data.map((item,index)=>( 
                                        <tr key={index}>
                                            <td className="p-4 fw-medium" style={{maxWidth: '100px'}}>8:00AM</td>
                                            <td className="p-4" style={{minWidth: '300px'}}>
                                                <div className="d-flex">
                                                    <img src={item.image} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                    <div className="ms-3">
                                                        <h6 className="text-dark mb-0 d-block">{item.title}</h6>
                                                        <small className="text-muted">{item.name}</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div className="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesdayschedule">
                        <div className="table-responsive bg-white shadow rounded">
                            <table className="table mb-0 table-center">
                                <tbody>
                                    {data.slice(0,5).map((item,index)=>( 
                                        <tr key={index}>
                                            <td className="p-4 fw-medium" style={{maxWidth: '100px'}}>8:00AM</td>
                                            <td className="p-4" style={{minWidth: '300px'}}>
                                                <div className="d-flex">
                                                    <img src={item.image} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                    <div className="ms-3">
                                                        <h6 className="text-dark mb-0 d-block">{item.title}</h6>
                                                        <small className="text-muted">{item.name}</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div className="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesdayschedule">
                        <div className="table-responsive bg-white shadow rounded">
                            <table className="table mb-0 table-center">
                                <tbody>
                                    {data.slice(0,5).map((item,index)=>( 
                                        <tr key={index}>
                                            <td className="p-4 fw-medium" style={{maxWidth: '100px'}}>8:00AM</td>
                                            <td className="p-4" style={{minWidth: '300px'}}>
                                                <div className="d-flex">
                                                    <img src={item.image} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                    <div className="ms-3">
                                                        <h6 className="text-dark mb-0 d-block">{item.title}</h6>
                                                        <small className="text-muted">{item.name}</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div className="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursdayschedule">
                        <div className="table-responsive bg-white shadow rounded">
                            <table className="table mb-0 table-center">
                                <tbody>
                                    {data.slice(0,4).map((item,index)=>( 
                                        <tr key={index}>
                                            <td className="p-4 fw-medium" style={{maxWidth: '100px'}}>8:00AM</td>
                                            <td className="p-4" style={{minWidth: '300px'}}>
                                                <div className="d-flex">
                                                    <img src={item.image} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                    <div className="ms-3">
                                                        <h6 className="text-dark mb-0 d-block">{item.title}</h6>
                                                        <small className="text-muted">{item.name}</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div className="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="fridayschedule">
                        <div className="table-responsive bg-white shadow rounded">
                            <table className="table mb-0 table-center">
                                <tbody>
                                    {data.slice(0,6).map((item,index)=>( 
                                        <tr key={index}>
                                            <td className="p-4 fw-medium" style={{maxWidth: '100px'}}>8:00AM</td>
                                            <td className="p-4" style={{minWidth: '300px'}}>
                                                <div className="d-flex">
                                                    <img src={item.image} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                    <div className="ms-3">
                                                        <h6 className="text-dark mb-0 d-block">{item.title}</h6>
                                                        <small className="text-muted">{item.name}</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div className="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturdayschedule">
                        <div className="table-responsive bg-white shadow rounded">
                            <table className="table mb-0 table-center">
                                <tbody>
                                    {data.slice(0,3).map((item,index)=>( 
                                        <tr key={index}>
                                            <td className="p-4 fw-medium" style={{maxWidth: '100px'}}>8:00AM</td>
                                            <td className="p-4" style={{minWidth: '300px'}}>
                                                <div className="d-flex">
                                                    <img src={item.image} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                    <div className="ms-3">
                                                        <h6 className="text-dark mb-0 d-block">{item.title}</h6>
                                                        <small className="text-muted">{item.name}</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  )
}
