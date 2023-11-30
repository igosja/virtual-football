import React, {useEffect, useState} from 'react';
import axios from 'axios';
import {Link, useParams} from "react-router-dom";
import MainLayout from "../layout/MainLayout";

function ViewPage() {
    const url = '/api/cities/';
    const [city, setCity] = useState({
        id: 0,
        country_id: 0,
        created_at: '',
        name: '',
        updated_at: '',
    });

    const params = useParams();

    const fetchData = () => {
        axios
            .get(url + params.id, {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('admin_access_token')}`
                },
            })
            .then(data => {
                setCity(data.data.data)
            });
    };

    useEffect(() => {
        fetchData();
    }, []);

    return (
        <MainLayout>
            <h1 className="text-center" id="header">{city.name}</h1>
            <ul className="list-inline text-center">
                <li className="list-inline-item">
                    <Link to={'/admin/cities'} className="btn btn-default">
                        List
                    </Link>
                </li>
            </ul>
            <ul className="list-inline text-center">
                <li className="list-inline-item">
                    <Link to={'/admin/cities/edit/' + params.id} className="btn btn-default">
                        Edit
                    </Link>
                </li>
            </ul>
            <div className="row">
                <table className="table table-striped table-bordered detail-view" aria-describedby="header">
                    <tbody>
                    <tr>
                        <th className="col-lg-6">Id</th>
                        <td>{city.id}</td>
                    </tr>
                    <tr>
                        <th>Country id</th>
                        <td>{city.country_id}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{city.name}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{city.created_at}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                        <td>{city.updated_at}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </MainLayout>
    );
}

export default React.memo(ViewPage);
