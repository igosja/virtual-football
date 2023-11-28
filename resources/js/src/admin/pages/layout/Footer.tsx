import React from "react";
import 'bootstrap/dist/css/bootstrap.min.css';

function Footer() {
    return (
        <footer id="footer" className="mt-auto py-3 bg-light">
            <div className="container">
                <div className="row text-muted">
                    <div className="col text-center">VF</div>
                </div>
            </div>
        </footer>
    );
}

export default React.memo(Footer);
