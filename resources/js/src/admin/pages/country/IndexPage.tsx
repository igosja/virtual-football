import React from 'react';
import MainLayout from "../layout/MainLayout";
import {Link} from "react-router-dom";
import GridView from "../../components/gridView/GridView";
import {ACTION_TYPE} from "../../components/gridView/table/tbody/action/ActionColumn";

function IndexPage() {
    return (
        <MainLayout>
            <div className="row">
                <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 className="page-header">Countries</h3>
                </div>
            </div>
            <ul className="list-inline preview-links text-center">
                <li>
                    <Link className='btn btn-default' to={'/admin/countries/create'}>
                        Create
                    </Link>
                </li>
            </ul>
            <GridView config={{
                columns: [
                    {
                        attribute: 'id',
                        contentOptions: {
                            class: 'text-center',
                        },
                        headerOptions: {
                            class: 'col-1 text-center',
                        },
                        label: 'ID',
                    },
                    {
                        attribute: 'name',
                        headerOptions: {
                            class: 'text-center',
                        },
                        label: 'Name',
                    },
                    {
                        type: ACTION_TYPE,
                        contentOptions: {
                            class: 'text-center',
                        },
                        headerOptions: {
                            class: 'col-1 col-sm-2',
                        },
                        template: '{view} {edit}',
                    },
                ],
                apiUrl: 'countries',
                filterModel: 'search',
            }}/>
        </MainLayout>
    );
}

export default React.memo(IndexPage);
