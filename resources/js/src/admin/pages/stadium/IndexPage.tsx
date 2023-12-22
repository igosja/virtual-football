import React from 'react';
import GridView from "../../components/gridView/GridView";
import {ACTION_TYPE} from "../../components/gridView/table/tbody/action/ActionColumn";

function IndexPage() {
    return (
        <GridView config={{
            apiUrl: 'stadiums',
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
        }}/>
    );
}

export default React.memo(IndexPage);
