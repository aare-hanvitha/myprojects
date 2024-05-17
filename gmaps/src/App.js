import { BrowserRouter as Router,Routes, Route } from 'react-router-dom'; 
import Gmap from './Gmap';
import DriverTracking from './DriverTracking';
import Intransit from './Intransit';
import MapMarker from './MapMarker';
import LocateAdd from './LocateAddress';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'devextreme/dist/css/dx.light.css';
import SinglePartyDriver from './SinglePartyDriver';
function App() {
  return (
    <Router> 
    <Routes> 
            <Route  path='/' element={< Gmap />}></Route> 
            <Route  path='/DriverTracking/:UserId/:CompanyId/:UserName' element={< DriverTracking />}></Route> 

            {/* <Route path='/DriverTracking/UserId=:UserId&CompanyId=:CompanyId&UserName=:UserName' element={<DriverTracking />} /> */}

            {/* <Route  path='/DriverTracking' element={< DriverTracking />}></Route>  */}
            <Route  path='/Intransit' element={< Intransit />}></Route>
            <Route  path='/MapMarker' element={< MapMarker />}></Route>
            <Route  path='/LocateAddress' element={< LocateAdd />}></Route> 
            <Route  path='/Single' element={<SinglePartyDriver/>}></Route> 


           
    </Routes> 
</Router> 
  );
}

export default App;
