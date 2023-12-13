import React from "react";

function ViewIcon() {
    return (
        <svg aria-hidden="true"
             style={{
                 display: "inline-block",
                 fontSize: "inherit",
                 height: "1em",
                 overflow: "visible",
                 verticalAlign: "-.125em",
                 width: "1.125em"
             }}
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path fill="currentColor"
                  d="M573 241C518 136 411 64 288 64S58 136 3 241a32 32 0 000 30c55 105 162 177 285 177s230-72 285-177a32 32 0 000-30zM288 400a144 144 0 11144-144 144 144 0 01-144 144zm0-240a95 95 0 00-25 4 48 48 0 01-67 67 96 96 0 1092-71z"></path>
        </svg>
    );
}

export default React.memo(ViewIcon);
