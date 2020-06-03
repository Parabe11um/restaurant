import React, {Component} from 'react';
import {RestDetailHeader} from "../RestDetailHeader/RestDetailHeader";
import {RestDetailForm} from "../RestDetailForm/RestDetailForm";

import './RestDetail.css';

export class RestDetail extends Component {
    render() {
        return (<>
                <RestDetailHeader />
                <fieldset className='RestDetail-container RestDetail-description'>
                    <legend className='RestDetail-container_title RestDetail-description__title'>ОПИСАНИЕ РЕСТОРАНА</legend>
                    <span className='RestDetail-description-text'>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, recusandae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, recusandae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, recusandae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, recusandae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, recusandae.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, recusandae.
                    </span>
                </fieldset>
                <fieldset className='RestDetail-container RestDetail-info'>
                    <legend className='RestDetail-container_title RestDetail-info__title'>КОНТАКТНЫЕ ДАННЫЕ</legend>
                    <div>
                        <span>Количество столов: {}</span>
                        <span>Количество мест: {}</span>
                        <span>Размер: {}</span>
                        <span>Адрес: {}</span>
                        <span>Телефон: {}</span>
                        <span>Сайт: {}</span>
                        <span>Email: {}</span>
                    </div>
                </fieldset>
                <RestDetailForm />
        </>)
    }
}
