import React from "react";
import {Container, Nav, Navbar, Offcanvas} from "react-bootstrap";
import {Link} from "react-router-dom";
import LoginLink from "../../../components/public/layout/header/LoginLink";
import LogoutLink from "../../../components/public/layout/header/LogoutLink";
import SignupLink from "../../../components/public/layout/header/SignupLink";

function Header() {
    return (
        <header id="header">
            <Navbar expand={false} className="bg-body-tertiary mb-3">
                <Container>
                    <Navbar.Brand href={'/'}>VF</Navbar.Brand>
                    <Navbar.Toggle aria-controls={`offcanvasNavbar-expand`}/>
                    <Navbar.Offcanvas
                        id={'canvas-navbar'}
                        aria-labelledby={'canvas-navbar'}
                        placement="end"
                    >
                        <Offcanvas.Header closeButton>
                            <Offcanvas.Title id={'canvas-navbar'}>
                                VF title
                            </Offcanvas.Title>
                        </Offcanvas.Header>
                        <Offcanvas.Body>
                            <Nav className="justify-content-end flex-grow-1 pe-3">
                                <Link to={'/'} className="nav-link">Главная</Link>
                                <LoginLink/>
                                <SignupLink/>
                                <LogoutLink/>
                            </Nav>
                        </Offcanvas.Body>
                    </Navbar.Offcanvas>
                </Container>
            </Navbar>
        </header>
    );
}

export default React.memo(Header);
