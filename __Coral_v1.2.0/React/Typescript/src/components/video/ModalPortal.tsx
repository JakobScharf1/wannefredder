import ReactDOM from 'react-dom'

export default function ModalPortal({ children }:{ children:any }) {
  return ReactDOM.createPortal(children, document.body)
}