import React, {Component} from 'react';
import Header from "../Header/Header";
import Footer from "../Footer/Footer";

class Contacts extends Component {
    render() {
        return (
            <>
                <div className="container">
                    <Header />
                </div>
                <div>
                    This is our contacts!
                </div>
                <Footer />
            </>
        );
    }
}

export default Contacts;
