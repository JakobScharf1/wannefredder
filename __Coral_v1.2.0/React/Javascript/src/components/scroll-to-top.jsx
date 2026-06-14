import { useEffect, useState } from 'react';
import { FiArrowUp } from 'react-icons/fi'
import { Link } from 'react-router-dom'

export default function ScrollToTop() {
     let [scrolling, setScrolling] = useState(false);

    useEffect(()=>{

        const handleScroll = () => {
            const isScrolling = window.scrollY > 50;
            setScrolling(isScrolling);
        };
        window.addEventListener('scroll', handleScroll);

        return()=>{
            window.removeEventListener('scroll', handleScroll);
        }
        
    },[])

    const scrollToTop = () =>{ 
        window.scrollTo({ 
          top: 0,  
          behavior: 'smooth'
        }); 
    }; 
  return (
    <>
        {scrolling && 
            (<Link to="#" onClick={()=>scrollToTop()} className="back-to-top rounded fs-5 d-block"><FiArrowUp data-feather="arrow-up" className="fea icon-sm align-middle"/></Link>)
        }
    </>
  )
}
