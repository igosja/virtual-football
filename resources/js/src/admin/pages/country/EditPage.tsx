import React, {useEffect, useState} from 'react';
import {Link, useNavigate, useParams} from 'react-router-dom';
import axios from 'axios';
import MainLayout from "../layout/MainLayout";
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

function EditPage() {
    const navigate = useNavigate();
    const url = '/api/countries/';
    const [country, setCountry] = useState({
        name: '',
    });
    const [formData, setFormData] = useState({
        name: '',
    });

    const [validated, setValidated] = useState(false);

    const [errors, setErrors] = useState({
        name: [],
    });

    const params = useParams();

    const fetchData = () => {
        axios
            .get(url + params.id, {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('admin_access_token')}`
                }
            })
            .then(data => {
                setCountry(data.data.data)
                setFormData(data.data.data)
            });
    };

    useEffect(() => {
        fetchData();
    }, []);

    const handleChange = (event) => {
        const name = event.target.name;
        const value = event.target.value;

        setFormData(values => ({...values, [name]: value}));
    };

    const handleSubmit = (event) => {
        event.preventDefault();
        event.stopPropagation();

        axios
            .put(url + params.id, formData, {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('admin_access_token')}`
                }
            })
            .then(() => {
                setErrors({
                    name: [],
                });

                navigate('/admin/countries/' + params.id, {replace: true});
            })
            .catch(function (error) {
                setErrors({
                    name: error.response.data.errors.name ?? [],
                });
            });

        setValidated(true);
    };

    return (
        <MainLayout>
            <Link to={'/admin/countries'}>
                List
            </Link>

            <Link to={'/admin/countries/' + params.id}>
                View
            </Link>

            <h1>{country.name}</h1>

            <Form noValidate validated={validated} onSubmit={handleSubmit}>
                <Form.Group className="mb-3">
                    <Form.Label>Name</Form.Label>
                    <Form.Control
                        autoFocus
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

export default React.memo(EditPage);
