import './bootstrap';
import ReactDOM  from 'react-dom/client';
import '../css/app.css';
import Header from './components/header';
import Footer from './components/footer';
import { BrowserRouter, Routes, Route } from 'react-router-dom';


ReactDOM.createRoot(document.getElementById("root")).render(
 <BrowserRouter>
 <Header/>
 </BrowserRouter>
);

