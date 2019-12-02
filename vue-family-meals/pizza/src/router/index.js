import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/Home.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  // {
  //     path: '/admin',
  //     name: 'admin',
  //     component: () => import(/* webpackChunkName: "about" */ '../components/Admin.vue')
  // },
    {
        path: '/admin',
        name: 'adminLink',
        component: () => import(/* webpackChunkName: "about" */ '../components/Admin.vue')
    },
  {
      path: '/login',
      name: 'login',
      component: () => import(/* webpackChunkName: "about" */ '../components/Login.vue')
  },
  {
      path: '/menu',
      name: 'menu',
      component: () => import(/* webpackChunkName: "about" */ '../components/Menu.vue')
  },
  {
      path: '/register',
      name: 'register',
      component: () => import(/* webpackChunkName: "about" */ '../components/Register.vue')
  },
  {
    path: '/about',
    name: 'about',
    component: () => import(/* webpackChunkName: "about" */ '../components/about/About.vue')
  },
    {
        path: '*',
        redirect:'/'
    }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
