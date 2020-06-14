import React, {Component} from 'react';
import './Contacts.css'

let text4 = '                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut\n' +
    '                            labore et dolore\n' +
    '                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut\n' +
    '                            aliquip ex ea commodo\n' +
    '                            consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\n' +
    '                            incididunt ut labore et\n' +
    '                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi\n' +
    '                            ut aliquip ex ea\n' +
    '                            commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod\n' +
    '                            tempor incididunt ut\n' +
    '                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco\n' +
    '                            laboris nisi ut\n' +
    '                            aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed\n' +
    '                            do eiusmod tempor\n' +
    '                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\n' +
    '                            exercitation ullamco laboris\n' +
    '                            nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing\n' +
    '                            elit, sed do eiusmod\n' +
    '                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\n' +
    '                            exercitation ullamco\n' +
    '                            laboris nisi ut aliquip ex ea commodo consequat.'
let submit = 'Ваше сообщение было отправлено, наш администратор свяжется с Вами с ближайшее время, спасибо за обрашение'

class Contacts extends Component {
    render() {
        return (
            <>
                <div>
                    <header className="head-contacts">
                        <h1 className="head-name">СВЯЖИТЕСЬ С НАМИ</h1>
                        <p className="head-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                    </header>
                    <div className='main-block'>
                        <p className="main-text-block">{text4}</p>
                    </div>
                    <form className='form-connect' action="#" method="get">
                        <div className='form-input'>
                            <span className="form-name">СВЯЗАТЬСЯ</span>
                            <input type="name" placeholder='ФИО' required/>
                            <input type="tel" placeholder='номер телефона' required/>
                            <input type="email" placeholder='E-Mail' required/>
                            <input className='input-text' type="text"/>
                            <button type='submit' className="button-link">Отправить</button>
                        </div>
                    </form>
                </div>
            </>
        );
    }
}

export default Contacts;
