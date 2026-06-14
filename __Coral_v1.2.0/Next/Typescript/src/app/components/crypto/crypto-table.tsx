import Link from 'next/link'
import Image from 'next/image'

import { cryptoData } from '../../data/data'

interface CryptoData{
    image: string;
    name1: string;
    name2: string;
    price: string;
    change1: string;
    change2: string;
    marketCap: string;
    text: string;
    bg: string;
}

export default function CryptoTable() {
  return (
        <div className="row justify-content-center">
            <div className="col-12 mt-4">
                <div className="table-responsive shadow rounded">
                    <table className="table mb-0 table-center bg-white">
                        <thead>
                            <tr>
                                <th scope="col" className="fw-normal border-bottom text-muted py-4 px-3" style={{minWidth: '180px'}}>Name</th>
                                <th scope="col" className="fw-normal border-bottom text-muted py-4 px-3" style={{minWidth: '100px'}}>Symbol</th>
                                <th scope="col" className="fw-normal border-bottom text-muted py-4 px-3" style={{width: '150px'}}>Price</th>
                                <th scope="col" className="fw-normal border-bottom text-muted py-4 px-3" style={{width: '150px'}}>Change(%)</th>
                                <th scope="col" className="fw-normal border-bottom text-muted py-4 px-3" style={{width: '150px'}}>Change($)</th>
                                <th scope="col" className="fw-normal border-bottom text-muted py-4 px-3" style={{width: '150px'}}>Marketcap</th>
                                <th scope="col" className="fw-normal border-bottom text-muted py-4 px-3 text-end" style={{width: '100px'}}>Trade</th>
                            </tr>
                        </thead>

                        <tbody>
                            {cryptoData.map((item:CryptoData,index:number)=>(
                                <tr key={index}>
                                    <th className="p-3">
                                        <div className="align-items-center">
                                            <Image src={item.image} width={36} height={36} className="me-2 avatar avatar-ex-small" alt=""/>
                                            <p className="mb-0 d-inline text-dark fw-normal h6">{item.name1}</p>
                                        </div>
                                    </th>
                                    <td className="p-3 text-muted fw-medium">{item.name2}</td>
                                    <td className="p-3 text-dark">{item.price}</td>
                                    <td className={`p-3 ${item.text}`}>{item.change1}</td>
                                    <td className={`p-3 ${item.text}`}>{item.change2}</td>
                                    <td className="text-muted p-3">{item.marketCap}</td>
                                    <td className="p-3 text-end"><Link href="#!" className="btn btn-sm btn-primary">Trade</Link></td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>

                <div className="mt-4 text-center">
                    <Link href="#!" className="btn btn-link primary fs-6">See More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                </div>
            </div>
        </div>
  )
}
