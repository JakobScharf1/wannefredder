import { useState } from 'react'
import { faqData } from '../../data/data'

export default function FaqOne() {
    let [activeTab, setActiveTab] = useState(1)
  return (
    <div className="accordion mt-4 pt-2">
        {faqData.map((item,index)=>(
            <div className="accordion-item rounded shadow mt-2" key={index}>
                <h2 className="accordion-header">
                    <button className={`accordion-button border-0 bg-white shadow ${activeTab === item.id ? '' :'collapsed'}`} type="button" onClick={()=>setActiveTab(item.id)}>
                        {item.title}?
                    </button>
                </h2>
                <div className={`accordion-collapse border-0 collapse ${activeTab === item.id ? 'show' : ''}`}>
                    <div className="accordion-body text-muted">
                        {item.desc}
                    </div>
                </div>
            </div>
        ))}
    </div>
  )
}
