import React from "react";
import {Link} from "react-router-dom";
import useAuth from "../../../hooks/useAuth";

function LoginLink() {
    const {isAuthenticated} = useAuth();
    if (true !== isAuthenticated) {
        return (
            <Link to={'/login'} className="nav-link">Login</Link>
        );
    }
}

export default React.memo(LoginLink);
