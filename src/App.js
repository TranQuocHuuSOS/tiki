// import logo from './logo.svg';
// import './App.css';
// // import ShowProduct from './component/ShowProduct';
// import ShowTiki from './component/ShowTiki';

// function App() {
//   return (
//     <div className="App">
//       {/* <ShowProduct /> */}
//       <ShowTiki />
      
//     </div>
//   );
// }
// export default App;



import './App.css';
import React from 'react';

import Header from './component/Header';

import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import ShowTiki from './component/ShowTiki';
import HomeUser from './component/HomeUser';

function App() {
  return (
    <div className="App">
    
      <Router>
        <Header />
        <Routes>
          
          <Route exact path="/ShowTiki" element={<ShowTiki/>} />
          <Route exact path="/HomeUser" element={<HomeUser/>} />
         
          
        </Routes>

      </Router>
      
    </div>
  );
}

export default App;
