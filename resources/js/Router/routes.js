const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../Pages/Home.vue'),
    },
    {
        path: '/register',
        name: 'register',
        component: () => import('../Pages/Register.vue'),
    },
];

export default routes;