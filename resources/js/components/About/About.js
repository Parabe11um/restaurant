import React, {Component} from 'react';
import Header from "../Header/Header";
import Footer from "../Footer/Footer";

class About extends Component {
    render() {
        return (
            <>
                <Header />
                <div>
                    this is about us!
                </div>
                <Footer />
            </>
        );
    }
}

export default About;
