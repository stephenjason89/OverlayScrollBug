import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./pages/app').default,
        children: [
        /*
            {
                path: '/',
                component: require('./pages/child1').default,
            },
            {
                path: '/home',
                component: require('./pages/home').default,
            }*/
        ]
    },
];

export default new VueRouter({
    routes
});
