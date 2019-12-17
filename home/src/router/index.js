import Vue from 'vue'
import VueRouter from 'vue-router'
// import Home from '../views/Home.vue'
import qilou from '../components/haikou/Qilou'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'qilou',
    component: qilou
  },
  {
    path: '/contact',
    name: 'contact',
    component: () => import(/* webpackChunkName: "about" */ '../components/contact/Contact.vue')
  },
  {
      path: '/thai',
      name: 'thai',
      component: () => import(/* webpackChunkName: "about" */ '../components/thailand/Thailand.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})


export default router
