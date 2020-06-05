import React, {Component} from 'react';
import {NavLink} from "react-router-dom";

export class RestDetailHeader extends Component {
    render() {
        return <div>
            <h3>РЕСТОРАН НЕИЗВЕСТНЫЙ</h3>
            <span>Lorem ipsum dolor sit amet,consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.</span>
            <NavLink to="/" className="button-link">
                Забронировать
            </NavLink>
        </div>
    }
}
