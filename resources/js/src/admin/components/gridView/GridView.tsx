import React from "react";

function GridView({config}) {
    const initConfig = {
        apiUrl: 'users',
        test: true,
    };
    const realConfig = {...initConfig, ...config};
    console.log(realConfig);
    return (
        <div className='row'>
            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                <div className="summary">
                    Showed <b>1-10</b> from <b>150</b>
                </div>
                <table className="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>
                                <a>
                                    Column
                                </a>
                            </th>
                        </tr>
                        <tr className="filters">
                            <td>
                                <input
                                    id='filter'
                                    type='text'
                                    className="form-control"
                                    name='filters'
                                    value=''
                                />
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr key='1'>
                            <td>Item</td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <ul className="pagination">
                        <li className='page-item' key='1'>
                            <a className="page-link">
                                1
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    );
}

export default React.memo(GridView);
