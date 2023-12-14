import React from 'react';
import MainLayout from "../layout/MainLayout";
import DetailView from "../../components/detailView/DetailView";

function ViewPage() {
    return (
        <MainLayout>
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
        </MainLayout>
    );
}

export default React.memo(ViewPage);
