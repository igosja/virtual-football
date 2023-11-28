import React from "react";
import {Link} from "react-router-dom";
import useAuth from "../../../hooks/useAuth";

function LogoutLink() {
    const {isAuthenticated} = useAuth();
    if (true === isAuthenticated) {
        return (
            <Link to={'/admin/logout'} className="nav-link">Выход</Link>
        );
    }
}

export default React.memo(LogoutLink);
