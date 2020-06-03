import React from 'react';
import ReactDOM from 'react-dom';
import App from "./components/App";
import {BrowserRouter, Redirect, Route, Switch} from 'react-router-dom'
import About from "./components/About/About";
import FindRest from "./components/FindRest/FindRest";
import Contacts from "./components/Contacts/Contacts";
import Main from "./components/Main/Main";
import Header from "./components/Header/Header";
import Footer from "./components/Footer/Footer";
import {RestDetail} from "./components/RestDetail/RestDetail";

if(document.getElementById('root')){
    ReactDOM.render(

        <BrowserRouter>
            <Header />
            <Switch>
                <Route path='/about' component={About} />
                <Route path='/restaurants' component={FindRest} />
                <Route path='/contacts' component={Contacts} />
                <Route path='/' component={Main} />
                <Redirect to='/' exact />
                <App />
            </Switch>
            <Footer />
        </BrowserRouter>

        ,document.getElementById('root'));
}
