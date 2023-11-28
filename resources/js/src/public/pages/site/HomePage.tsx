import MainLayout from "../layout/MainLayout";
import React from "react";

function HomePage() {
    return (
        <MainLayout>
            <h1 className="text-center">VF</h1>
        </MainLayout>
    );
}

export default React.memo(HomePage);
