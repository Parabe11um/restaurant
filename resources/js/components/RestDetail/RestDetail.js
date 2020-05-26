import React, {Component} from 'react';
import Header from "../Header/Header";
import Footer from "../Footer/Footer";
import {RestDetailHeader} from "../RestDetailHeader/RestDetailHeader";
import {RestDetailForm} from "../RestDetailForm/RestDetailForm";

export class RestDetail extends Component {
    render() {
        return (<>
            <Header />
                <RestDetailHeader />
                <div>
                    Описание из компонента FindRest
                </div>
                <div>
                    Контактные данные из компонента FindRest
                </div>
                <RestDetailForm />
            <Footer />
        </>)
    }
}
