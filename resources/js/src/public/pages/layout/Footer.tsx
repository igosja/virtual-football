import React from "react";
import 'bootstrap/dist/css/bootstrap.min.css';

function Footer() {
    return (
        <footer className="mt-auto py-3 bg-light fixed-bottom">
            <div className="container">
                <div className="row text-muted">
                    <div className="col-md-6 text-center text-md-start">VF</div>
                    <div className="col-md-6 text-center text-md-end"></div>
                </div>
            </div>
        </footer>
    );
}

export default React.memo(Footer);
