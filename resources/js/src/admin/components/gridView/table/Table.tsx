import React from "react";
import {Link} from "react-router-dom";
import Thead from "./thead/Thead";
import Tbody from "./tbody/Tbody";

function Table({config, items}) {
    return (
        <table className="table table-bordered table-hover">
            <Thead config={config}/>
            <Tbody config={config} items={items}/>
        </table>
    );
}

export default React.memo(Table);
