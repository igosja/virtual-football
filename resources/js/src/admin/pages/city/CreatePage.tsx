import React, {useState} from 'react';
import {Link, useNavigate} from 'react-router-dom';
import axios from 'axios';
import MainLayout from "../layout/MainLayout";
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

function CreatePage() {
    const navigate = useNavigate();
    const url = '/api/cities';
    const [formData, setFormData] = useState({
        country_id: 0,
        name: '',
    });

    const [validated, setValidated] = useState(false);

    const [errors, setErrors] = useState({
        country_id: [],
        name: [],
    });

    const handleChange = (event) => {
        const name = event.target.name;
        const value = event.target.value;

        setFormData(values => ({...values, [name]: value}));
    };

    const handleSubmit = (event) => {
        event.preventDefault();
        event.stopPropagation();

        axios
            .post(url, formData, {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('admin_access_token')}`
                }
            })
            .then(data => {
                setErrors({
                    country_id: [],
                    name: [],
                });

                navigate('/admin/cities/' + data.data.data.id, {replace: true});
            })
            .catch(function (error) {
                setErrors({
                    country_id: error.response.data.errors.country_id ?? [],
                    name: error.response.data.errors.name ?? [],
                });
            });

        setValidated(true);
    };

    return (
        <MainLayout>
            <Link to={'/admin/cities'}>
                List
            </Link>

            <h1>Create country</h1>

            <Form noValidate validated={validated} onSubmit={handleSubmit}>
                <Form.Group className="mb-3">
                    <Form.Label>Country</Form.Label>
                    <Form.Control
                        autoFocus
                        type="text"
                        placeholder="Country"
                        name="country_id"
                        value={formData.country_id}
                        onChange={handleChange}
                        isInvalid={!!errors.country_id.length}
                    />
                    <Form.Control.Feedback type="invalid">
                        {errors.country_id[0]}
                    </Form.Control.Feedback>
                </Form.Group>
                <Form.Group className="mb-3">
                    <Form.Label>Name</Form.Label>
                    <Form.Control
                        type="text"
                        placeholder="Name"
                        name="name"
                        value={formData.name}
                        onChange={handleChange}
                        isInvalid={!!errors.name.length}
                    />
                    <Form.Control.Feedback type="invalid">
                        {errors.name[0]}
                    </Form.Control.Feedback>
                </Form.Group>
                <Button type="submit">
                    Save
                </Button>
            </Form>
        </MainLayout>
    );
}

export default React.memo(CreatePage);
