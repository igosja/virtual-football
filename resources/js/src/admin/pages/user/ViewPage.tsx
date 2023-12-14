import React from 'react';
import DetailView from "../../components/detailView/DetailView";

function ViewPage() {
    return (
        <DetailView config={{
            apiUrl: 'users',
            attributes: [
                {
                    captionOptions: {
                        class: 'col-6',
                    },
                    attribute: 'id',
                },
                'login',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at',
            ],
            editButton: false,
            h1: 'login',
        }}/>
    );
}

export default React.memo(ViewPage);
