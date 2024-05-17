import React, { useEffect } from 'react';
import { useState } from 'react';
import { DateBox, SelectBox } from 'devextreme-react';
import { NavLink, Form } from 'react-bootstrap';
import { useNavigate, useParams } from "react-router-dom";

const DriverTracking = () => {
  const navigate = useNavigate();


  const navigateToGmap = () => {
    // 👇️ navigate to /contacts
    navigate('/');
    window.location.reload();
  };


  const RefreshMap = () => {
    const currDate = new Date();
    localStorage.setItem("selDate",currDate);

    window.location.reload();
  };

  const [isCheckedDriver, setIsCheckeddriver] = useState(true);
  const [isCheckedDispatch, setIsCheckedDispatch] = useState(true);
  const [isCheckedReser, setIsCheckedReser] = useState(true);
  const [isCheckedPend, setIsCheckedPend] = useState(true);
  const [users, setUsers] = useState([]);

  const [fromDate, setFromDate] = useState(new Date());
  let { UserId, CompanyId, UserName } = useParams();
  const [selectedUser, setSelectedUser] = useState(""); // To store the selected username

  const defaultSelectedUser = { UserName } || 'subhani';


  useEffect(() => {
    // Define the API URL
    const apiUrl = 'https://webapi3.shuttleq.net/api/UserManagement/GetUsersByStatus?companyId=4091&status=1';

    // Create a request object for the POST request
    const requestOptions = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json', // Set the appropriate content type
      },
      // Include the request body if needed
      // body: JSON.stringify({ key: 'value' }),
    };

    // Make the POST request to the API
    fetch(apiUrl, requestOptions)
      .then((response) => {

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json(); // Assuming the response is in JSON format
      })
      .then((data) => {

        // Extract only the "userName" property from each object in the "data" array
        const extractedUsernames = data.data.map((user) => user.userName);

        setUsers(extractedUsernames); // Update your component state with the extracted usernames
      })
      .catch((error) => {
        console.error('Error:', error);
      });
  }, []); // The empty dependency array ensures this effect runs once on component mount

  // Event handler for when a username is selected in the SelectBox



   async function handleSelectBoxChange(e) {

    // window.location.reload();
    const newSelectedUser = e.value; // Get the new selected username

    setSelectedUser(newSelectedUser); // Set the selected username in the state // Set the selected username in the state
    //alert('Location Details are not submitted for this driver!!');



    const apiUrl = 'https://webapi3.shuttleq.net/api/UserManagement/GetUsersByStatus?companyId=4091&status=1';

    // Create a request object for the POST request
    const requestOptions = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json', // Set the appropriate content type
      },
    };

    // Make the POST request to the API
    const resp =await fetch(apiUrl, requestOptions)
      .then((response) =>
        response.json()
      )
      .then((data) => {


        data.data.map((user) => {
          if(user.userName === newSelectedUser){
            localStorage.setItem("userId",user.userId);
            localStorage.setItem("userName",user.userName);
            localStorage.setItem("companyId",user.companyId);
            window.location.href = "/DriverTracking/"+user.userId+"/"+user.companyId+"/"+user.userName;
         }
       })
     });
  };




  return (
    <div>
      {/* <input type="checkbox" id="chkAvilable" readOnly checked={isCheckedDriver} className='mb-4' /><span className='ms-3 text-success'>Available Drivers</span>
        <button id="rotateCar">Refresh</button>
        <input type="checkbox" id="chkUnAvilable" readOnly checked={isCheckedDispatch} className='ms-4' /><span className='ms-3 text-secondary'>Dispatch</span>
        <input type="checkbox" id="chkUnAvilable" readOnly checked={isCheckedReser} className='ms-4' /><span className='ms-3 text-info'>Reservation</span>
        <input type="checkbox" id="chkUnAvilable" readOnly checked={isCheckedPend} className='ms-4'/><span className='ms-3 text-danger'>Pending   </span>   */}




      <p className='tacking_name text-center alert alert-success text-dark p-2 mb-0'>
        {UserName}
      </p>


      <div className='row alert alert-success p-3 m-0'>
        <div className='col-lg-3 d-flex'>
          <NavLink className='text-primary ms-2' onClick={RefreshMap}><img src="/refresh.png" width={20}></img>Refresh</NavLink>
          <NavLink className='text-primary ms-2' onClick={navigateToGmap}><img src="/user.png"></img>All Drivers</NavLink>
          {/* <Button variant="primary" onClick={navigateToGmap}  className='ms-4'>Drivers Tracking 2</Button> */}
        </div>
        <div className='col-lg-6'>
          <div className='col-lg-4 mx-auto'>

            <SelectBox id='selectdriver'
              dataSource={users}
              value={UserName}
              searchEnabled
              showClearButton
              onValueChanged={handleSelectBoxChange}
              >
            </SelectBox>
          </div>

        </div>
        <div className='col-lg-3'>
          <div className='col-lg-8 float-end '>
            <DateBox
              displayFormat="longdate"
              applyValueMode="instantly"
              openOnFieldClick
              value={localStorage.getItem("selDate")}
              min={new Date(0)} // Set the minimum date to a very early date (e.g., January 1, 1970)
              max={new Date()} // Set the maximum date to the current date
              onValueChanged={(e) => {
                const selectedStartDate = e.value;
                setFromDate(selectedStartDate);
                localStorage.setItem("selDate",selectedStartDate);
                window.location.reload();
              }}
            />
          </div>

        </div>
        {/* <div>
                <p>Selected Username: {selectedUser}</p>
            </div> */}
      </div>

      <div id="dvCanvas" style={{ "width": "100vw", "height": "100vh" ,"margin-left":"-12px"}}></div>
    </div>

  )
}

export default DriverTracking
