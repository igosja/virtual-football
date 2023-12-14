import React from 'react';
import FormView from "../../components/formView/FromView";

function EditPage() {
    return (
        <FormView config={{
            apiUrl: 'cities',
            fields: [
                'country_id',
                'name',
            ],
        }}/>
    );
}

export default React.memo(EditPage);
