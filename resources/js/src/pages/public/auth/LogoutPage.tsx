import React, {useEffect} from "react";
import {useNavigate} from "react-router-dom";
import MainLayout from "../layout/MainLayout";
import useAuth from "../../../hooks/useAuth";

function LogoutPage() {
    const {setAuth} = useAuth();
    const navigate = useNavigate();

    useEffect(() => {
        localStorage.removeItem('access_token');
        setAuth(false);
        navigate('/');
    }, [navigate])

    return (
        <MainLayout>
            Logout
        </MainLayout>
    )
}

export default React.memo(LogoutPage)
