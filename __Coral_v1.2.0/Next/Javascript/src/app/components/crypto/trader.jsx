import Image from 'next/image'
import Link from 'next/link'

let data = [
    {
        image:'/images/cpu.svg',
        title:'Buy & Sell Crypto',
        desc:'Buy or sell Bitcoin, Ethereum, and other crypto assets with your credit card, debit card, or bank account.',
        btn:'Buy Bitcoin'
    },
    {
        image:'/images/analytics.svg',
        title:'Trade Assets',
        desc:'Discover new and innovative crypto assets with over 200 spot trading pairs and 25 margin trading pairs.',
        btn:'View Exchange'
    },
    {
        image:'/images/exchange.svg',
        title:'Hedge with Coral Futures',
        desc:'Trade Bitcoin, Ethereum, and other perpetual with up to 100x leverage on Coral Futures.',
        btn:'Trade Futures'
    },
    {
        image:'/images/money.svg',
        title:'Earn Rewards for Trading',
        desc:'Never miss an opportunity for a little competition. Join our latest campaigns to earn rewards.',
        btn:'Join Competition'
    },
]

export default function Trader() {
  return (
    <div className="row justify-content-center g-4">
        {data.map((item,index)=>(
            <div className="col-lg-3 col-md-6" key={index}>
                <div className="position-relative p-4 bg-white shadow rounded overflow-hidden">
                    <div className="pe-4">
                        <Link href="#" className="link-title h5 text-dark">{item.title}</Link>
                        <p className="text-muted mb-3 mt-4">{item.desc}</p>
                        <Link href="#" className="btn btn-link primary">{item.btn} <i className="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                    <div className="position-absolute top-50 start-100 translate-middle z-0">
                        <Image src={item.image} width={140} height={140} className="avatar avatar-large opacity-25" alt=""/>
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
