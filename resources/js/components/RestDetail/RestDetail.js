import React, {Component} from 'react';
import {RestDetailHeader} from "../RestDetailHeader/RestDetailHeader";
import {RestDetailForm} from "../RestDetailForm/RestDetailForm";

export class RestDetail extends Component {
    render() {
        return (<>
                <RestDetailHeader />
                <div>
                    Описание из компонента FindRest
                </div>
                <div>
                    Контактные данные из компонента FindRest
                </div>
                <RestDetailForm />
        </>)
    }
}
