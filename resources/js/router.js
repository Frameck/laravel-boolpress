import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../js/pages/Home.vue'
import Contacts from '../js/pages/Contacts.vue'
import About from '../js/pages/About.vue'
import PostShow from '../js/pages/Posts/Show.vue'
import CategoryShow from '../js/pages/Categories/Show.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path:'/',
            name: 'home',
            component: Home
        },

        {
            path:'/contacts',
            name: 'contacts',
            component: Contacts
        },

        {
            path:'/about',
            name: 'about',
            component: About
        },

        {
            path:'/posts/:slug',
            name: 'posts.show',
            component: PostShow
        },

        {
            path:'/category/:category',
            name: 'category.show',
            component: CategoryShow
        }
    ]
})

export default router