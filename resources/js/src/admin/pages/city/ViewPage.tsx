import React from 'react';
import MainLayout from "../layout/MainLayout";
import DetailView from "../../components/detailView/DetailView";

function ViewPage() {
    return (
        <MainLayout>
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
        </MainLayout>
    );
}

export default React.memo(ViewPage);
