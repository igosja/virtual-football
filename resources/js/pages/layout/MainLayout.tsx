import React, {PropsWithChildren} from "react";
import 'bootstrap/dist/css/bootstrap.min.css';
import {Container, Nav, Navbar, Offcanvas} from "react-bootstrap";

function MainLayout({children}: PropsWithChildren) {
    // @ts-ignore
    return (
        <section>
            <header id="header">
                <Navbar expand={false} className="bg-body-tertiary mb-3">
                    <Container>
                        <Navbar.Brand href={'/'}>Navbar Offcanvas</Navbar.Brand>
                        <Navbar.Toggle aria-controls={`offcanvasNavbar-expand`}/>
                        <Navbar.Offcanvas
                            id={`offcanvasNavbar-expand`}
                            aria-labelledby={`offcanvasNavbarLabel-expand`}
                            placement="end"
                        >
                            <Offcanvas.Header closeButton>
                                <Offcanvas.Title id={`offcanvasNavbarLabel-expand`}>
                                    Offcanvas
                                </Offcanvas.Title>
                            </Offcanvas.Header>
                            <Offcanvas.Body>
                                <Nav className="justify-content-end flex-grow-1 pe-3">
                                    <Nav.Link href={'/'}>Главная</Nav.Link>
                                    <Nav.Link href={'/login'}>Вход</Nav.Link>
                                    <Nav.Link href={'/signup'}>Регистрация</Nav.Link>
                                    <Nav.Link href={'/logout'}>Выход</Nav.Link>
                                </Nav>
                            </Offcanvas.Body>
                        </Navbar.Offcanvas>
                    </Container>
                </Navbar>
            </header>
            <main id="main" className="flex-shrink-0" role="main">
                <div className="container">
                    {children}
                </div>
            </main>
            <footer id="footer" className="mt-auto py-3 bg-light">
                <div className="container">
                    <div className="row text-muted">
                        <div className="col-md-6 text-center text-md-start">VF</div>
                        <div className="col-md-6 text-center text-md-end"></div>
                    </div>
                </div>
            </footer>
        </section>
    );
}

export default React.memo(MainLayout);
