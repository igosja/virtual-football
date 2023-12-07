import React, {useEffect, useState} from 'react';
import axios from '../../components/axios/Axios';
import {Link, useParams} from "react-router-dom";
import MainLayout from "../layout/MainLayout";

function ViewPage() {
    const url = 'users/';
    const [user, setUser] = useState({
        id: 0,
        created_at: '',
        email: '',
        email_verified_at: '',
        login: '',
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
                setUser(data.data.data)
            });
    };

    useEffect(() => {
        fetchData();
    }, []);

    return (
        <MainLayout>
            <h1 className="text-center" id="header">{user.login}</h1>
            <ul className="list-inline text-center">
                <li className="list-inline-item">
                    <Link to={'/admin/users'} className="btn btn-default">
                        List
                    </Link>
                </li>
            </ul>
            <div className="row">
                <table className="table table-striped table-bordered detail-view" aria-describedby="header">
                    <tbody>
                    <tr>
                        <th className="col-lg-6">Id</th>
                        <td>{user.id}</td>
                    </tr>
                    <tr>
                        <th>Login</th>
                        <td>{user.login}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{user.email}</td>
                    </tr>
                    <tr>
                        <th>Email verified at</th>
                        <td>{user.email_verified_at}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{user.created_at}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                        <td>{user.updated_at}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </MainLayout>
    );
}

export default React.memo(ViewPage);
