
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');


window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';

const routes = [
    {
        path: '/',
        components: {
            companiesIndex: CompaniesIndex
        }
    },
    {path: 'create', component: CompaniesCreate, name: 'createCompany'},
    {path: 'edit/:id', component: CompaniesEdit, name: 'editCompany'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')