import React, {PropsWithChildren} from "react";
import 'bootstrap/dist/css/bootstrap.min.css';
import Footer from "./Footer";
import Header from "./Header";

function MainLayout({children}: PropsWithChildren) {
    return (
        <section>
            <Header/>
            <main id="main" className="flex-shrink-0" role="main">
                <div className="container">
                    {children}
                </div>
            </main>
            <Footer/>
        </section>
    );
}

export default React.memo(MainLayout);
