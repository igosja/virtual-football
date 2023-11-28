import useAuth from "../../hooks/useAuth";
import {useLocation, useNavigate} from 'react-router-dom';
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";
import React, {useState} from 'react';
import axios from "axios";
import {Col, Row} from "react-bootstrap";
import LoginLayout from "../layout/LoginLayout";

const LoginPage = () => {
    const {setAuth} = useAuth();
    const navigate = useNavigate();
    const location = useLocation();
    const from = location.state?.from?.pathname || '/';

    const url = '/api/admin/login';

    const [validated, setValidated] = useState(false);

    const [inputs, setInputs] = useState({
        login: '',
        password: '',
    });

    const [errors, setErrors] = useState({
        login: [],
        password: [],
    });

    const handleChange = (event) => {
        const name = event.target.name;
        const value = event.target.value;

        setInputs(values => ({...values, [name]: value}));
    };

    const handleSubmit = (event) => {
        event.preventDefault();
        event.stopPropagation();

        axios
            .post(url, inputs)
            .then(data => {
                setErrors({
                    login: [],
                    password: [],
                });

                localStorage.setItem('admin_access_token', data.data.data.token);

                setAuth(true);
                navigate(from, {replace: true});
            })
            .catch(function (error) {
                setErrors({
                    login: error.response.data.errors.login ?? [],
                    password: error.response.data.errors.password ?? [],
                });
            });

        setValidated(true);
    };

    return (
        <LoginLayout>
            <h1 className="text-center">Вход</h1>
            <Row className='justify-content-md-center'>
                <Col className='col-md-6'>
                    <Form noValidate validated={validated} onSubmit={handleSubmit}>
                        <Form.Group className="mb-3">
                            <Form.Label>Логин</Form.Label>
                            <Form.Control
                                autoFocus
                                type="text"
                                placeholder="Логин"
                                name="login"
                                value={inputs.login}
                                onChange={handleChange}
                                isInvalid={!!errors.login.length}
                            />
                            <Form.Control.Feedback type="invalid">
                                {errors.login[0]}
                            </Form.Control.Feedback>
                        </Form.Group>
                        <Form.Group className="mb-3">
                            <Form.Label>Пароль</Form.Label>
                            <Form.Control
                                type="password"
                                placeholder="Пароль"
                                name="password"
                                value={inputs.password}
                                onChange={handleChange}
                                isInvalid={!!errors.password.length}
                            />
                            <Form.Control.Feedback type="invalid">
                                {errors.password[0]}
                            </Form.Control.Feedback>
                        </Form.Group>
                        <Row>
                            <Col className='text-center'>
                                <Button type="submit">
                                    Вход
                                </Button>
                            </Col>
                        </Row>
                    </Form>
                </Col>
            </Row>
        </LoginLayout>
    )
}

export default React.memo(LoginPage)
