import React from 'react'
import './FindRestItem.css'

export const FindRestItem = (props) => {
    return (
        <div className="FindRestItem__wrap FindRestItem__wrap_margin">
            <div className="FindRestItem__imageWrap">
                {/* <img src="#" alt="#" /> */}
            </div>
            <div className="FindRestItem__info">
                <h4 className="info__title">{props.title}</h4>
                <p className="info__text">{props.text}</p>
                <button className="button-linkAlt">Подробнее</button>
            </div>
        </div>
    )
}
