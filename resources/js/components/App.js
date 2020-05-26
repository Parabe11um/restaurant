import React, {Component} from 'react';
import Header from "./Header/Header";
import Footer from "./Footer/Footer";


class App extends Component {
    render(){
        return (
            <>
                <Header />
                    { this.props.children }
                <Footer />
            </>
        );
    }
}

export default App;
