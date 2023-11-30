import React from "react";
import {Link} from "react-router-dom";
import useAuth from "../../../hooks/useAuth";

function SignupLink() {
    const {isAuthenticated} = useAuth();
    if (true !== isAuthenticated) {
        return (
            <Link to={'/signup'} className="nav-link">Signup</Link>
        );
    }
}

export default React.memo(SignupLink);
