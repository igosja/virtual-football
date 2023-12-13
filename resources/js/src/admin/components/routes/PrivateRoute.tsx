import {Navigate, Outlet, useLocation} from "react-router-dom";
import useAuth from "../../hooks/useAuth";

export const AdminPrivateRoute = () => {
    const {isAuthenticated} = useAuth();

    const location = useLocation();

    if (true === isAuthenticated) {
        return (
            <Outlet/>
        );
    } else {
        return (
            <Navigate to="/admin/login" state={{from: location}} replace/>
        )
    }
};
