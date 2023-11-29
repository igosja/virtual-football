import React from "react";

function Footer() {
    return (
        <footer id="footer" className="mt-auto py-3 bg-light">
            <div className="container">
                <div className="row text-muted">
                    <div className="col text-center">VF admin</div>
                </div>
            </div>
        </footer>
    );
}

export default React.memo(Footer);
