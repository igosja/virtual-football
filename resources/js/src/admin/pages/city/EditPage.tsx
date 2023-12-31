import React from 'react';
import FormView from "../../components/formView/FromView";

function EditPage() {
    return (
        <FormView config={{
            apiUrl: 'cities',
            fields: [
                'name',
                'country_id',
            ],
        }}/>
    );
}

export default React.memo(EditPage);
