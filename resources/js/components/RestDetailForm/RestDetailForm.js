import React, {Component} from 'react';
import {NavLink} from "react-router-dom";

export class RestDetailForm extends Component {
    render() {
        return <form>
            <input type="text" name="name"/>
            <input type="text" name="phone"/>
            <input type="text" name="email"/>
            <input type="text" name="date"/>
            <input type="text" name="period"/>
            <input type="text" name="category"/>
            <textarea name="message" id="message"></textarea>
            <button>Отправить</button>
        </form>
    }
}
