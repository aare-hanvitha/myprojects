import React from 'react'

const Intransit = () => {
  return (
    <div>
            <div id="dvDistance" runat="server" className="intransist"></div>
            <div id="dvNotes"></div>
            <div id="dvCanvas" style={{"width":"100vw","height":"100vh" , "position":"fixed", "overflow":"hidden","top":"0"}}>
            </div>
    </div>


  )
}

export default Intransit
