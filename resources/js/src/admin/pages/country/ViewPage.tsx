import React from 'react';
import DetailView from "../../components/detailView/DetailView";

function ViewPage() {
    return (
        <DetailView config={{
            apiUrl: 'countries',
            attributes: [
                {
                    captionOptions: {
                        class: 'col-6',
                    },
                    attribute: 'id',
                },
                'name',
                'created_at',
                'updated_at',
            ],
        }}/>
    );
}

export default React.memo(ViewPage);
