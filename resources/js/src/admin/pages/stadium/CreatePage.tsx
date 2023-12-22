import React from 'react';
import FormView from "../../components/formView/FromView";

function CreatePage() {
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

export default React.memo(CreatePage);
