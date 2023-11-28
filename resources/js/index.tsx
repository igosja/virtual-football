import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import {BrowserRouter} from "react-router-dom";
import {AuthProvider} from "./src/public/context/AuthProvider";
import {AdminAuthProvider} from "./src/admin/context/AuthProvider";
import App from "./src/App";

const root = ReactDOM.createRoot(
    document.getElementById('root') as HTMLElement
);

root.render(
    <React.StrictMode>
        <BrowserRouter>
            <AuthProvider>
                <AdminAuthProvider>
                    <App/>
                </AdminAuthProvider>
            </AuthProvider>
        </BrowserRouter>
    </React.StrictMode>
);
