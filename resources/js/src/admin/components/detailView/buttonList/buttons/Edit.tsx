import React from "react";
import {Link, useParams} from "react-router-dom";

function List({config}) {
    const params = useParams();
    const currentPath = window.location.pathname.replace('/' + params.id, '');

    if (!config.editButton) {
        return;
    }

    return (
        <li className="list-inline-item">
            <Link to={currentPath + '/edit/' + params.id} className="btn btn-default">
                Edit
            </Link>
        </li>
    );
}

export default React.memo(List);
