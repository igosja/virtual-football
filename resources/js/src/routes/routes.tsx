import {Route, Routes} from 'react-router-dom';
import {PrivateRoute} from '../components/PrivateRoute';
import ErrorPage from "../pages/site/ErrorPage";
import LoginPage from "../pages/auth/LoginPage";
import LogoutPage from "../pages/auth/LogoutPage";
import HomePage from "../pages/site/HomePage";
import SignupPage from "../pages/auth/SignupPage";

const useRoutes = () => {
    return (
        <Routes>
            <Route element={<PrivateRoute/>}>
                <Route index element={<HomePage/>}/>
                <Route path="/" element={<HomePage/>}/>
                <Route path="/logout" element={<LogoutPage/>}/>
            </Route>

            <Route path="/login" element={<LoginPage/>}/>
            <Route path="/signup" element={<SignupPage/>}/>
            <Route path='*' element={<ErrorPage/>}/>
        </Routes>
    )
}

export default useRoutes
