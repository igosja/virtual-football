import {Route, Routes} from 'react-router-dom';
import {PrivateRoute} from '../public/components/PrivateRoute';
import {AdminPrivateRoute} from '../admin/components/PrivateRoute';
import AdminHomePage from "../admin/pages/site/HomePage";
import AdminLoginPage from "../admin/pages/auth/LoginPage";
import AdminLogoutPage from "../admin/pages/auth/LogoutPage";
import ErrorPage from "../public/pages/site/ErrorPage";
import LoginPage from "../public/pages/auth/LoginPage";
import LogoutPage from "../public/pages/auth/LogoutPage";
import HomePage from "../public/pages/site/HomePage";
import SignupPage from "../public/pages/auth/SignupPage";

const useRoutes = () => {
    return (
        <Routes>
            <Route element={<AdminPrivateRoute/>}>
                <Route path="/admin" element={<AdminHomePage/>}/>
                <Route path="/admin/logout" element={<AdminLogoutPage/>}/>
            </Route>
            <Route path="/admin/login" element={<AdminLoginPage/>}/>

            <Route element={<PrivateRoute/>}>
                <Route path="/logout" element={<LogoutPage/>}/>
            </Route>

            <Route index element={<HomePage/>}/>
            <Route path="/" element={<HomePage/>}/>
            <Route path="/login" element={<LoginPage/>}/>
            <Route path="/signup" element={<SignupPage/>}/>
            <Route path='*' element={<ErrorPage/>}/>
        </Routes>
    )
}

export default useRoutes
