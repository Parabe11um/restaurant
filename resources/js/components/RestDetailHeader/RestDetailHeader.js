import React, {Component} from 'react';
import './RestDetailHeader.css';

export class RestDetailHeader extends Component {
    render() {
        return <div className='RestDetailHeader'>
            <h3 className='RestDetailHeader-title'>РЕСТОРАН НЕИЗВЕСТНЫЙ</h3>
            <span className='RestDetailHeader-description'>Lorem ipsum dolor sit amet,consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.</span>
            <a href='#reserveForm' className="button-link button-link-btn">
                Забронировать
            </a>
        </div>
    }
}
