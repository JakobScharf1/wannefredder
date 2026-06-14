import Image from "next/image";

export default function DrTable() {
  return (
        <section className="section">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Doctors Availability</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container-fluid">
                <div className="row">
                    <div className="col-12 mt-4 pt-2">
                        <div className="table-responsive rounded">
                            <table className="table table-center table-bordered bg-white mb-0">
                                <thead>
                                    <tr>
                                        <th className="text-center py-4" style={{minWidth: '120px'}}>Time Table</th>
                                        <th className="text-center py-4" style={{minWidth: '200px'}}>Monday</th>
                                        <th className="text-center py-4" style={{minWidth: '200px'}}>Tuesday</th>
                                        <th className="text-center py-4" style={{minWidth: '200px'}}>Wednesday</th>
                                        <th className="text-center py-4" style={{minWidth: '200px'}}>Thursday</th>
                                        <th className="text-center py-4" style={{minWidth: '200px'}}>Friday</th>
                                        <th className="text-center py-4" style={{minWidth: '200px'}}>Saturday</th>
                                        <th className="text-center py-4" style={{minWidth: '200px'}}>Sunday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th className="text-center py-5">09:00AM</th>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/01.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Calvin Carlo</h6>
                                                    <small className="text-muted">Eye Care</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00AM - 10:00AM</small>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/03.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Alia Reddy</h6>
                                                    <small className="text-muted">Psychotherapy</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00AM - 01:00PM</small>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th className="text-center py-5">11:00AM</th>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/02.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Cristino Murphy</h6>
                                                    <small className="text-muted">Gynecology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">11:00AM - 04:00PM</small>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/05.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Jennifer Ballance</h6>
                                                    <small className="text-muted">Cardiology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">11:00AM - 12:00PM</small>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/04.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Toni Kovar</h6>
                                                    <small className="text-muted">Orthopedic</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00AM - 10:00AM</small>
                                        </td>
                                        <td></td>
                                    </tr>
                                    
                                    <tr>
                                        <th className="text-center py-5">02:00PM</th>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/06.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Tara Arrington</h6>
                                                    <small className="text-muted">Neurology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">02:00PM - 04:00PM</small>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/05.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Jennifer Ballance</h6>
                                                    <small className="text-muted">Cardiology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">11:00AM - 12:00PM</small>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                    <tr>
                                        <th className="text-center py-5">04:00PM</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/06.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Tara Arrington</h6>
                                                    <small className="text-muted">Neurology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">04:00PM - 05:00PM</small>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/06.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Tara Arrington</h6>
                                                    <small className="text-muted">Neurology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">04:30PM - 06:00PM</small>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th className="text-center py-5">06:00PM</th>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/03.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Alia Reddy</h6>
                                                    <small className="text-muted">Psychotherapy</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">06:00PM - 09:00PM</small>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/04.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Toni Kovar</h6>
                                                    <small className="text-muted">Orthopedic</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">07:00PM - 08:00PM</small>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/05.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Jennifer Ballance</h6>
                                                    <small className="text-muted">Cardiology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">06:00PM - 07:00PM</small>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/03.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Alia Reddy</h6>
                                                    <small className="text-muted">Psychotherapy</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">06:00PM - 07:00PM</small>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th className="text-center py-5">09:00PM</th>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/04.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Toni Kovar</h6>
                                                    <small className="text-muted">Orthopedic</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00PM - 10:00PM</small>
                                        </td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/05.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Jennifer Ballance</h6>
                                                    <small className="text-muted">Cardiology</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00PM - 10:00PM</small>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div className="d-flex mb-3">
                                                <Image src='/images/team/04.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-circle border shadow" alt=""/>
                                                <div className="ms-3">
                                                    <h6 className="text-dark mb-0 d-block">Toni Kovar</h6>
                                                    <small className="text-muted">Orthopedic</small>
                                                </div>
                                            </div>
                                            <small className="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00PM - 10:00PM</small>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  )
}
