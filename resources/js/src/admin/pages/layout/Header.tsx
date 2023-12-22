import React from "react";
import {Container, Nav, Navbar, Offcanvas} from "react-bootstrap";
import {Link} from "react-router-dom";

function Header() {
    return (
        <header>
            <Navbar expand={false} className="bg-body-tertiary mb-3">
                <Container>
                    <Navbar.Brand href={'/'}>VF admin</Navbar.Brand>
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
                                <Link to={'/admin'} className="nav-link">Home</Link>
                                <Link to={'/admin/users'} className="nav-link">Users</Link>
                                <Link to={'/admin/teams'} className="nav-link">Teams</Link>
                                <Link to={'/admin/stadiums'} className="nav-link">Stadiums</Link>
                                <Link to={'/admin/cities'} className="nav-link">Cities</Link>
                                <Link to={'/admin/countries'} className="nav-link">Countries</Link>
                                <Link to={'/admin/logout'} className="nav-link">Logout</Link>
                            </Nav>
                        </Offcanvas.Body>
                    </Navbar.Offcanvas>
                </Container>
            </Navbar>
        </header>
    );
}

export default React.memo(Header);
