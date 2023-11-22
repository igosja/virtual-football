import useAuth from "../../hooks/useAuth";
import {Link, useNavigate} from 'react-router-dom';
import MainLayout from "../layout/MainLayout";
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";
import React, {useState} from 'react';
import axios from "axios";

const SignupPage = () => {
    const {setAuth} = useAuth();
    const navigate = useNavigate();
    const from = '/';

    const url = '/api/signup';

    const [validated, setValidated] = useState(false);

    const [inputs, setInputs] = useState({
        email: '',
        login: '',
        password: '',
    });

    const [errors, setErrors] = useState({
        email: [],
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
                    email: [],
                    login: [],
                    password: [],
                });

                localStorage.setItem('access_token', data.data.data.token);

                setAuth(true)
                navigate(from, {replace: true});
            })
            .catch(function (error) {
                setErrors({
                    email: error.response.data.errors.email ?? [],
                    login: error.response.data.errors.login ?? [],
                    password: error.response.data.errors.password ?? [],
                });
            });

        setValidated(true);
    };

    return (
        <MainLayout>
            <h1 className="text-center">Регистрация</h1>

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
                    <Form.Label>Email</Form.Label>
                    <Form.Control
                        type="email"
                        placeholder="Email"
                        name="email"
                        value={inputs.email}
                        onChange={handleChange}
                        isInvalid={!!errors.email.length}
                    />
                    <Form.Control.Feedback type="invalid">
                        {errors.email[0]}
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
                <Button type="submit">
                    Регистрация
                </Button>
            </Form>
            <Link to={'/login'}>Вход</Link>
        </MainLayout>
    )
}

export default React.memo(SignupPage)