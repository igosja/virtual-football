import React from 'react';
import DetailView from "../../components/detailView/DetailView";

function ViewPage() {
    return (
        <DetailView config={{
            apiUrl: 'cities',
            attributes: [
                {
                    captionOptions: {
                        class: 'col-6',
                    },
                    attribute: 'id',
                },
                'country_id',
                'name',
                'created_at',
                'updated_at',
            ],
        }}/>
    );
}

export default React.memo(ViewPage);
