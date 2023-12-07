import axiosBase from 'axios';

const axios = axiosBase.create({
    baseURL: '/api/',
    headers: {
        'Content-Type': 'application/json',
    },
});

axios.interceptors.request.use(function (config) {
    const token = localStorage.getItem('admin_access_token');
    if (token) {
        config.headers.Authorization = `Bearer ${token}`;
    }

    return config;
});

axios.interceptors.response.use(function (response) {
    return response;
}, function (error) {
    if (401 == error.response.status) {
        localStorage.removeItem('admin_access_token');
        window.location.href = '/admin';
    }
    return Promise.reject(error);
});

export default axios;
