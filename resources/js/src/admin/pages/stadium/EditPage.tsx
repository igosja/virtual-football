import React from 'react';
import FormView from "../../components/formView/FromView";

function EditPage() {
    return (
        <FormView config={{
            apiUrl: 'stadiums',
            fields: [
                'name',
                'city_id',
                'capacity',
            ],
        }}/>
    );
}

export default React.memo(EditPage);
