import React, {Component} from 'react';
import Header from "../Header/Header";
import Footer from "../Footer/Footer";
import {RestDetail} from "../RestDetail/RestDetail";

class FindRest extends Component {
    render() {
        return (
            <>
                <Header />
                <div>
                    <RestDetail />
                </div>
                <Footer />
            </>
        );
    }
}

export default FindRest;
