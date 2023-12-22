import {Route, Routes} from 'react-router-dom';
import {PrivateRoute} from '../public/components/PrivateRoute';
import {AdminPrivateRoute} from '../admin/components/routes/PrivateRoute';
import AdminHomePage from "../admin/pages/site/HomePage";
import AdminCityCreatePage from "../admin/pages/city/CreatePage";
import AdminCityEditPage from "../admin/pages/city/EditPage";
import AdminCityIndexPage from "../admin/pages/city/IndexPage";
import AdminCityViewPage from "../admin/pages/city/ViewPage";
import AdminCountryCreatePage from "../admin/pages/country/CreatePage";
import AdminCountryEditPage from "../admin/pages/country/EditPage";
import AdminCountryIndexPage from "../admin/pages/country/IndexPage";
import AdminCountryViewPage from "../admin/pages/country/ViewPage";
import AdminLoginPage from "../admin/pages/auth/LoginPage";
import AdminLogoutPage from "../admin/pages/auth/LogoutPage";
import AdminStadiumCreatePage from "../admin/pages/stadium/CreatePage";
import AdminStadiumEditPage from "../admin/pages/stadium/EditPage";
import AdminStadiumIndexPage from "../admin/pages/stadium/IndexPage";
import AdminStadiumViewPage from "../admin/pages/stadium/ViewPage";
import AdminUserIndexPage from "../admin/pages/user/IndexPage";
import AdminUserViewPage from "../admin/pages/user/ViewPage";
import ErrorPage from "../public/pages/site/ErrorPage";
import LoginPage from "../public/pages/auth/LoginPage";
import LogoutPage from "../public/pages/auth/LogoutPage";
import HomePage from "../public/pages/site/HomePage";
import SignupPage from "../public/pages/auth/SignupPage";

const useRoutes = () => {
    return (
        <Routes>
            <Route element={<PrivateRoute/>}>
                <Route path="/logout" element={<LogoutPage/>}/>
            </Route>

            <Route index element={<HomePage/>}/>
            <Route path="/" element={<HomePage/>}/>
            <Route path="/login" element={<LoginPage/>}/>
            <Route path="/signup" element={<SignupPage/>}/>

            <Route element={<AdminPrivateRoute/>}>
                <Route path="/admin" element={<AdminHomePage/>}/>
                <Route path="/admin/cities" element={<AdminCityIndexPage/>}/>
                <Route path="/admin/cities/:id" element={<AdminCityViewPage/>}/>
                <Route path="/admin/cities/create" element={<AdminCityCreatePage/>}/>
                <Route path="/admin/cities/edit/:id" element={<AdminCityEditPage/>}/>
                <Route path="/admin/countries" element={<AdminCountryIndexPage/>}/>
                <Route path="/admin/countries/:id" element={<AdminCountryViewPage/>}/>
                <Route path="/admin/countries/create" element={<AdminCountryCreatePage/>}/>
                <Route path="/admin/countries/edit/:id" element={<AdminCountryEditPage/>}/>
                <Route path="/admin/logout" element={<AdminLogoutPage/>}/>
                <Route path="/admin/stadiums" element={<AdminStadiumIndexPage/>}/>
                <Route path="/admin/stadiums/:id" element={<AdminStadiumViewPage/>}/>
                <Route path="/admin/stadiums/create" element={<AdminStadiumCreatePage/>}/>
                <Route path="/admin/stadiums/edit/:id" element={<AdminStadiumEditPage/>}/>
                <Route path="/admin/users" element={<AdminUserIndexPage/>}/>
                <Route path="/admin/users/:id" element={<AdminUserViewPage/>}/>
            </Route>

            <Route path="/admin/login" element={<AdminLoginPage/>}/>

            <Route path='*' element={<ErrorPage/>}/>
        </Routes>
    )
}

export default useRoutes
