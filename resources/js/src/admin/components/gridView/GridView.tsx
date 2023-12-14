import React, {useEffect, useState} from "react";
import axios from "../axios/Axios";
import {useSearchParams} from "react-router-dom";
import Pagination from "./pagination/Pagination";
import Summary from "./summary/Summary";
import Table from "./table/Table";

function GridView({config}) {
    const initConfig = {
        columns: [],
        apiUrl: 'users',
    };
    const currentConfig = {...initConfig, ...config};

    const [items, setItems] = useState([]);
    const [meta, setMeta] = useState({
        from: 1,
        to: 1,
        total: 1,
        links: []
    });
    const [searchParams, setSearchParams] = useSearchParams();

    const fetchData = () => {
        let fields = [];
        let filters = {};
        currentConfig.columns.map(column => {
            fields.push(column.attribute);
            filters[column.attribute] = searchParams.get('filters.' + column.attribute);
        });
        axios
            .get(currentConfig.apiUrl + '?page=' + (searchParams.get('page') ?? 1), {
                params: {
                    fields: fields.join(','),
                    filters: filters,
                    sorting: searchParams.get('sorting'),
                    page: searchParams.get('page'),
                },
            })
            .then(data => {
                setItems(data.data.data)
                setMeta(data.data.meta)
            });
    };

    useEffect(() => {
        fetchData();
    }, [setSearchParams]);

    return (
        <div className='row'>
            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                <Summary meta={meta}/>
                <Table config={config} items={items}/>
                <Pagination links={meta.links}/>
            </div>
        </div>
    );
}

export default React.memo(GridView);
