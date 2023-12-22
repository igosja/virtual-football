import React from 'react';
import FormView from "../../components/formView/FromView";

function CreatePage() {
    return (
        <FormView config={{
            apiUrl: 'teams',
            fields: [
                'name',
                'stadium_id',
            ],
        }}/>
    );
}

export default React.memo(CreatePage);
