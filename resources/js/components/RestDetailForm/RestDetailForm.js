import React, {Component} from 'react';
import './RestDetailForm.css';

import {handleFormSubmit} from '../../apiModules/handleFormSubmit';

export class RestDetailForm extends Component {

    constructor(props) {
        super(props);
        this.state = {
            r_id: this.props.id,
            name: '',
            phone: '',
            email: '',
            date: '',
            period: '',
            guests: '',
            message: '',
        }

        this.handleChange = (event) => {
            const name = event.currentTarget.name;
            const value = event.currentTarget.value;

            this.setState((state) => ({
                [name]: value,
            }))
        }

        this.onSubmit = (event) => {
            event.preventDefault();
            // const {name, phone, email, date, period, persons, message} = this.state
            const data = this.state;
            console.log(data)
            // handleFormSubmit(data)
        }
    }


    render() {
        return <form id='reserveForm' className='RestDetailForm-form' onSubmit={this.onSubmit}>
            <fieldset className='RestDetailForm-container'>
                <legend className="RestDetailForm-title">ЗАБРОНИРОВАТЬ</legend>
                <div className='form-container'>
                    <input name="r_id"
                           type="hidden"
                           value={this.props.id}/>
                    <input type="text"
                           name="name"
                           required
                           value={this.state.name}
                           onChange={this.handleChange}
                           placeholder="name"/>
                    <input type="text"
                           name="phone"
                           required
                           value={this.state.phone}
                           onChange={this.handleChange}
                           placeholder="phone"/>
                    <input type="email"
                           name="email"
                           required
                           value={this.state.email}
                           onChange={this.handleChange}
                           placeholder="email"/>
                    <input type="date"
                           name="date"
                           required
                           value={this.state.date}
                           onChange={this.handleChange}
                           placeholder="date"/>
                    <input type="text"
                           name="period"
                           required
                           value={this.state.period}
                           onChange={this.handleChange}
                           placeholder="period"/>
                    <input type="text"
                           name="guests"
                           required
                           value={this.state.guests}
                           onChange={this.handleChange}
                           placeholder="number of guests"/>
                    <textarea name="message"
                              id="message"
                              value={this.state.message}
                              onChange={this.handleChange}
                              placeholder="Your message..."/>
                    <button className="button-link button-link-btn">Отправить</button>
                </div>
            </fieldset>
        </form>
    }
}
