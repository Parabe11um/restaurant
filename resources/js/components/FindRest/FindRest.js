import React, {Component} from 'react';
import Header from "../Header/Header";
import Footer from "../Footer/Footer";
import {FindRestItem} from "./FindRestItem/FindRestItem"
import './FindRest.css'

/**
 * Страница поиска ресторанов
 *
 * @param bigText заглушка текста
 * @param {Array} restaurantData Массив ресторанов
 * @param {function} restaurantElements Отрисовка ресторанов 
 */

let bigText = `Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
ullamco laboris nisi ut aliquip ex ea commodo consequat.`

class FindRest extends Component {
    render() {
        const restaurantData = [
            {id: 1, img:'', title:'Ресторан неизвестный', text: bigText},
            {id: 2, img:'', title:'Ресторан неизвестный', text: bigText},
        ]
        let restaurantElements = restaurantData.map((rest, key) => <FindRestItem img={rest.img} title={rest.title} text={rest.text} key={key} />)

        return (
            <>
                <Header />

                <div className="FindRest">
                    <div className="FindRest__container">
                        <div className="FindRest__titleWrap">
                            <h2 className="FindRest__title">Найдите свой ресторан</h2>
                        </div>
                        <div className="FindRest__searchForm FindRest__searchForm_margin">
                            <input className="FindRest__input" placeholder="Найти ресторан"/>
                            <button className="button-linkAlt">Поиск</button>
                        </div>
                        <div>
                            {restaurantElements}
                        </div>
                        <button className="button-linkAlt">Показать еще</button>
                    </div>
                </div>
                <Footer />
            </>
        );
    }
}

export default FindRest;
