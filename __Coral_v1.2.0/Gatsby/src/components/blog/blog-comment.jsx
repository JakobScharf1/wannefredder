import React from 'react'
import { Link } from 'gatsby'
import team1 from '../../assets/images/team/1.jpg'
import team2 from '../../assets/images/team/2.jpg'
import team3 from '../../assets/images/team/3.jpg'

export default function BlogComment() {
  return (
    <>
        <div className="card shadow rounded border-0 mt-4">
            <div className="card-body">
                <h5 className="card-title mb-0">Comments :</h5>

                <ul className="media-list list-unstyled mb-0">
                    <li className="mt-4">
                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <Link className="pe-3" to="#">
                                    <img src={team1} className="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img"/>
                                </Link>
                                <div className="commentor-detail">
                                    <h6 className="mb-0"><Link to="#" className="text-dark media-heading">Lorenzo Peterson</Link></h6>
                                    <small className="text-muted">1st June 2024 at 01:25 pm</small>
                                </div>
                            </div>
                            <Link to="#" className="text-muted"><i className="mdi mdi-reply"></i> Reply</Link>
                        </div>
                        <div className="mt-3">
                            <p className="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                        </div>
                    </li>

                    <li className="mt-4">
                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <Link className="pe-3" to="#">
                                    <img src={team2} className="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img"/>
                                </Link>
                                <div className="commentor-detail">
                                    <h6 className="mb-0"><Link to="#" className="media-heading text-dark">Tammy Camacho</Link></h6>
                                    <small className="text-muted">1st June 2024 at 05:44 pm</small>
                                </div>
                            </div>
                            <Link to="#" className="text-muted"><i className="mdi mdi-reply"></i> Reply</Link>
                        </div>
                        <div className="mt-3">
                            <p className="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                        </div>
                    </li>
                    
                    <li className="mt-4">
                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <Link className="pe-3" to="#">
                                    <img src={team3} className="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img"/>
                                </Link>
                                <div className="commentor-detail">
                                    <h6 className="mb-0"><Link to="#" className="media-heading text-dark">Tammy Camacho</Link></h6>
                                    <small className="text-muted">1st June 2024 at 03:44 pm</small>
                                </div>
                            </div>
                            <Link to="#" className="text-muted"><i className="mdi mdi-reply"></i> Reply</Link>
                        </div>
                        <div className="mt-3">
                            <p className="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                        </div>

                        <ul className="list-unstyled ps-4 ps-md-5 sub-comment">
                            <li className="mt-4">
                                <div className="d-flex justify-content-between">
                                    <div className="d-flex align-items-center">
                                        <Link className="pe-3" to="#">
                                            <img src={team1} className="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img"/>
                                        </Link>
                                        <div className="commentor-detail">
                                            <h6 className="mb-0"><Link to="#" className="text-dark media-heading">Lorenzo Peterson</Link></h6>
                                            <small className="text-muted">1st June 2024 at 01:25 pm</small>
                                        </div>
                                    </div>
                                    <Link to="#" className="text-muted"><i className="mdi mdi-reply"></i> Reply</Link>
                                </div>
                                <div className="mt-3">
                                    <p className="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div className="card shadow rounded mt-4">
            <div className="card-body">
                <h5 className="card-title mb-0">Leave A Comment :</h5>

                <form className="mt-4">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="mb-3">
                                <label className="form-label" htmlFor='message'>Your Comment</label>
                                <textarea id="message" placeholder="Your Comment" rows="5" name="message" className="form-control" required=""></textarea>
                            </div>
                        </div>

                        <div className="col-lg-6">
                            <div className="mb-3">
                                <label className="form-label" htmlFor='name'>Name <span className="text-danger">*</span></label>
                                <input id="name" name="name" type="text" placeholder="Name" className="form-control" required=""/>
                            </div>
                        </div>

                        <div className="col-lg-6">
                            <div className="mb-3">
                                <label className="form-label" htmlFor='email'>Your Email <span className="text-danger">*</span></label>
                                <input id="email" type="email" placeholder="Email" name="email" className="form-control" required=""/>
                            </div>
                        </div>

                        <div className="col-md-12">
                            <div className="send d-grid">
                                <button type="submit" className="btn btn-pills btn-primary">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </>
  )
}
