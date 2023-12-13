import React from "react";
import {Link} from "react-router-dom";
import ViewItem from "../view/ViewItem";

function EditIcon() {
    return (
        <svg aria-hidden="true"
             style={{
                 display: "inline-block",
                 fontSize: "inherit",
                 height: "1em",
                 overflow: "visible",
                 verticalAlign: "-.125em",
                 width: "1em"
             }}
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor"
                  d="M498 142l-46 46c-5 5-13 5-17 0L324 77c-5-5-5-12 0-17l46-46c19-19 49-19 68 0l60 60c19 19 19 49 0 68zm-214-42L22 362 0 484c-3 16 12 30 28 28l122-22 262-262c5-5 5-13 0-17L301 100c-4-5-12-5-17 0zM124 340c-5-6-5-14 0-20l154-154c6-5 14-5 20 0s5 14 0 20L144 340c-6 5-14 5-20 0zm-36 84h48v36l-64 12-32-31 12-65h36v48z"></path>
        </svg>
    );
}

export default React.memo(EditIcon);
