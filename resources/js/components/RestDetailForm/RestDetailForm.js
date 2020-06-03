import React, {Component} from 'react';
import './RestDetailForm.css';

export class RestDetailForm extends Component {
    render() {
        return <form className='RestDetailForm-form'>
            <fieldset className='RestDetailForm-container'>
                <legend className="RestDetailForm-title">ЗАБРОНИРОВАТЬ</legend>
                <div className='form-container'>
                    <input type="text" name="name" placeholder="name"/>
                    <input type="text" name="phone" placeholder="phone"/>
                    <input type="text" name="email" placeholder="email"/>
                    <input type="text" name="date" placeholder="date"/>
                    <input type="text" name="period" placeholder="period"/>
                    <input type="text" name="category" placeholder="category"/>
                    <textarea name="message" id="message"/>
                    <button className="button-link button-link-btn">Отправить</button>
                </div>
            </fieldset>
        </form>
    }
}
