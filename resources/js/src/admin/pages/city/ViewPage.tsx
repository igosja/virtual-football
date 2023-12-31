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
                'name',
                'country_id',
                'created_at',
                'updated_at',
            ],
        }}/>
    );
}

export default React.memo(ViewPage);
