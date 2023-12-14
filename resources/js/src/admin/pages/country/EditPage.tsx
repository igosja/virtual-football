import React from 'react';
import FormView from "../../components/formView/FromView";

function EditPage() {
    return (
        <FormView config={{
            apiUrl: 'countries',
            fields: [
                'name'
            ],
        }}/>
    );
}

export default React.memo(EditPage);
