import React from "react";

function Footer() {
    return (
        <footer className="mt-auto py-3 bg-light fixed-bottom">
            <div className="container">
                <div className="row text-muted">
                    <div className="col text-center">VF admin</div>
                </div>
            </div>
        </footer>
    );
}

export default React.memo(Footer);
