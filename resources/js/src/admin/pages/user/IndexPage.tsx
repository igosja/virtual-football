import React, {useEffect, useState} from 'react';
import axios from '../../components/axios/Axios';
import MainLayout from "../layout/MainLayout";
import {Link, useSearchParams} from "react-router-dom";
import Pagination from "../../components/Pagination";
import HeaderRow from "../../components/HeaderRow";

function IndexPage() {
    const url = 'users';
    const [users, setUsers] = useState([]);
    const [meta, setMeta] = useState({
        from: 1,
        to: 1,
        total: 1,
        links: []
    });
    const [searchParams, setSearchParams] = useSearchParams();
    const fetchData = () => {
        setMeta({
            from: 1,
            to: 1,
            total: 1,
            links: []
        });
        axios
            .get(url + '?page=' + (searchParams.get('page') ?? 1), {
                params: {
                    fields: 'id,login',
                    filters: {
                        id: searchParams.get('filters.id'),
                        login: searchParams.get('filters.login'),
                    },
                    sorting: searchParams.get('sorting'),
                    page: searchParams.get('page'),
                },
            })
            .then(data => {
                setUsers(data.data.data)
                setMeta(data.data.meta)
            });
    };

    useEffect(() => {
        fetchData();
    }, [setSearchParams]);

    return (
        <MainLayout>
            <h1 className="text-center">Users</h1>
            <div className="row">
                <div id="w0" className="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                    <div className="summary">
                        Showed <b>{meta.from}-{meta.to}</b> from <b>{meta.total}</b>
                    </div>
                    <table className="table table-bordered table-hover">
                        <HeaderRow header={[
                            {label: 'ID', name: 'id', type: 'number'},
                            {label: 'Login', name: 'login', type: 'text'},
                            {sorting: false, filter: false},
                        ]}/>
                        <tbody>
                        {users.map(({id, login}) => (
                            <tr key={id}>
                                <td className="text-center">{id}</td>
                                <td>{login}</td>
                                <td className="text-center">
                                    <Link to={'/admin/users/' + id} title="Show" aria-label="Show">
                                        <svg aria-hidden="true"
                                             style={{
                                                 display: "inline-block",
                                                 fontSize: "inherit",
                                                 height: "1em",
                                                 overflow: "visible",
                                                 verticalAlign: "-.125em",
                                                 width: "1.125em"
                                             }}
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                  d="M573 241C518 136 411 64 288 64S58 136 3 241a32 32 0 000 30c55 105 162 177 285 177s230-72 285-177a32 32 0 000-30zM288 400a144 144 0 11144-144 144 144 0 01-144 144zm0-240a95 95 0 00-25 4 48 48 0 01-67 67 96 96 0 1092-71z"></path>
                                        </svg>
                                    </Link>
                                </td>
                            </tr>
                        ))}
                        </tbody>
                    </table>
                    <Pagination links={meta.links}/>
                </div>
            </div>
        </MainLayout>
    );
}

export default React.memo(IndexPage);
