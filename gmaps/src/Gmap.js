import { Button } from 'devextreme-react';
import React from 'react'
import { useState } from 'react';
import { Dropdown } from 'react-bootstrap';
import { useNavigate } from 'react-router-dom';


const Gmap = () => {


  const navigate = useNavigate();

    // const [chkAvilable,setchkAvilable] = useState(true);
    // const [chkDispatch,setChkDispatch] = useState();
    // const [chkReservation,setChkReservation] = useState();
    // const [chkPending,setchkPending] = useState();

    const data = {
      UserId:13,
      CompanyId:1,
      UserName:"jagadeesh"
    };

    const currDate = new Date();

    localStorage.setItem("userName","jagadeesh");
    localStorage.setItem("userId","13");
    localStorage.setItem("companyId","1");
    localStorage.setItem("selDate",currDate);

    //Handle the click event
    const handleDriverTrackingClick = () => {
      const queryString = Object.keys(data)
        .map((key) => `${encodeURIComponent(data[key])}`)
        .join('/');

        const newTabUrl = `/DriverTracking/${queryString}`;
        window.open(newTabUrl, '_blank');
      // Navigate to the /DriverTracking route with the query string
      // navigate(`/DriverTracking/${queryString}`);
      window.location.reload();
//navigate(`/DriverTracking`);

    };

// const handleDriverTrackingClick = () => {
//   const queryString = Object.keys(data)
//     .map((key) => `${key}=${encodeURIComponent(data[key])}`)
//     .join('&');

//   // Navigate to the /DriverTracking route with the query string
//   navigate(`/DriverTracking/UserId=${data.UserId}&CompanyId=${data.CompanyId}&UserName=${data.UserName}`);
//   window.location.reload();
// };


  return (
     <div>
      <div style={{ position:'fixed',top:'0', width:'100%', backgroundColor:"#fff",zIndex:'3' }} >
        <div className='ps-2 pt-1 pb-0'>
        <input type="checkbox" id="chkAvilable"  className='mb-4 check_box' /><span className='ms-2 mt-0 text-success map-data'>Available Drivers</span>
        <input type="checkbox" id="chkUnAvilable"  className='ms-3 check_box' /><span className='ms-2 text-secondary map-data'>Un Available Drivers</span>
        <input type="checkbox" id="chkDispatch"  className='ms-3 check_box' /><span className='ms-2 text-secondary map-data'>Dispatch</span>
        <input type="checkbox" id="chkReservation"  className='ms-3 check_box' /><span className='ms-2 text-info map-data'>Reservation</span>
        <input type="checkbox" id="chkPending"  className='ms-3 check_box'/><span className='ms-2 text-danger map-data'>Pending   </span>
        <button id="rotateCar" className='btn bg-primary rounded text-white map_btns ms-3'>Refresh</button>
        {/* <a href="#" id="driverTracking">Driver Tracking Link</a> */}
        <button type='button' className='btn bg-primary text-white rounded map_btns ms-3' onClick={handleDriverTrackingClick}>Driver Tracking </button>
        <div className='col-lg-2 float-end'>
         <Dropdown className='float-end'>
      <Dropdown.Toggle variant='link' id="dropdown-basic">
        <img src='info-dropdwn.png' width={30}></img>
      </Dropdown.Toggle>

      <Dropdown.Menu>
        <Dropdown.Item href="#/action-1"><img src="pink_user.png" width={20} className='me-2'></img>Pending</Dropdown.Item>
        <Dropdown.Item href="#/action-2"><img src="pink_user.png" width={20} className='me-2'></img>Dispatch</Dropdown.Item>
        <Dropdown.Item href="#/action-3"><img src="blue_user.png" width={20} className='me-2'></img>Reservation</Dropdown.Item>
        <Dropdown.Item href="#/action-3"><img src="green_car.png" width={20} className='me-2'></img>Available</Dropdown.Item>
        <Dropdown.Item href="#/action-3"><img src="red_car.png" width={20} className='me-2'></img>Un-Avalible</Dropdown.Item>
      </Dropdown.Menu>
    </Dropdown>
    </div>
    </div>
    </div>
        <div className="col-lg-12" id="dvCanvas" style={{"width":"100vw","height":"93vh",    "top": "66px"}} >
        </div>

    </div>


  //   <div className='p-3'>
  //       <div className='row'>
  //       <div className='col-lg-10'>
  //     <input type="checkbox" id="chkAvilable" checked="checked" className='mb-4' /><span className='ms-3 text-success'>Available Drivers</span>

  //     <input type="checkbox" id="chkposotion" checked="checked" className='fs-4 ms-4' /><span className='ms-3 text-danger'>Un Available Drivers</span>
  //     <input type="checkbox" id="chkUnAvilable" checked="checked" className='ms-4' /><span className='ms-3 text-secondary'>Dispatch</span>
  //     <input type="checkbox" id="chkUnAvilable" checked="checked" className='ms-4' /><span className='ms-3 text-info'>Reservation</span>
  //     <input type="checkbox" id="chkUnAvilable" checked="checked" className='ms-4'/><span className='ms-3 text-danger'>Pending   </span>
  //     <Button variant="primary" id="rotateCar"  className='ms-4'>REFRESH</Button>
  //     <Button variant="primary" onClick={handleDriverTrackingClick}  className='ms-4'>Drivers Tracking</Button>

  //     {/* <Button variant="primary" id="rotateCar" onClick={navigateToDriversTracking}  className='ms-4'>Drivers</Button> */}
  //     <div id="dvCanvas" style={{"width":"100vw","height":"100vh"}}>
  //     </div>
  //   </div>
  //   <div className='col-lg-2 float-end'>
  //        <Dropdown className='float-end'>
  //     <Dropdown.Toggle variant='link' id="dropdown-basic">
  //       <img src='info-dropdwn.png' width={30}></img>
  //     </Dropdown.Toggle>

  //     <Dropdown.Menu>
  //       <Dropdown.Item href="#/action-1"><img src="pink_user.png" width={20} className='me-2'></img>Pending</Dropdown.Item>
  //       <Dropdown.Item href="#/action-2"><img src="pink_user.png" width={20} className='me-2'></img>Dispatch</Dropdown.Item>
  //       <Dropdown.Item href="#/action-3"><img src="blue_user.png" width={20} className='me-2'></img>Reservation</Dropdown.Item>
  //       <Dropdown.Item href="#/action-3"><img src="green_car.png" width={20} className='me-2'></img>Available</Dropdown.Item>
  //       <Dropdown.Item href="#/action-3"><img src="red_car.png" width={20} className='me-2'></img>Un-Avalible</Dropdown.Item>
  //     </Dropdown.Menu>
  //   </Dropdown>
  //   </div>
  //  </div>
  //   </div>

  )
}

export default Gmap
