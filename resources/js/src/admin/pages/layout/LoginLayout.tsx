import React, {PropsWithChildren} from "react";
import 'bootstrap/dist/css/bootstrap.min.css';

function LoginLayout({children}: PropsWithChildren) {
    return (
        <section>
            <main id="main" className="flex-shrink-0" role="main">
                <div className="container">
                    {children}
                </div>
            </main>
        </section>
    );
}

export default React.memo(LoginLayout);
