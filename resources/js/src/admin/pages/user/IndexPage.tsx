import React from 'react';
import MainLayout from "../layout/MainLayout";
import GridView from "../../components/gridView/GridView";
import {ACTION_TYPE} from "../../components/gridView/table/tbody/action/ActionColumn";

function IndexPage() {
    return (
        <MainLayout>
            <div className="row">
                <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 className="page-header">Users</h3>
                </div>
            </div>
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
                        attribute: 'login',
                        headerOptions: {
                            class: 'text-center',
                        },
                        label: 'Login',
                    },
                    {
                        type: ACTION_TYPE,
                        contentOptions: {
                            class: 'text-center',
                        },
                        headerOptions: {
                            class: 'col-1 col-sm-2',
                        },
                        template: '{view}',
                    },
                ],
                apiUrl: 'users',
            }}/>
        </MainLayout>
    );
}

export default React.memo(IndexPage);
