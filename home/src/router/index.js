import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import qilou from '../components/haikou/Qilou'
import Bus from '../bus.js'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/contact',
    name: 'contact',
    component: () => import(/* webpackChunkName: "about" */ '../components/contact/Contact.vue')
  },
  {
      path: '/qilou',
      name: 'qilou',
      component: () => import(/* webpackChunkName: "about" */ '../components/haikou/Qilou.vue')
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


router.beforeEach((to, from, next) => {
    Bus.$emit('loading',true);
    console.log('ppp');
    next();

})

router.afterEach(() => {
    setTimeout(function () {
        Bus.$emit('loading',false);
       console.log('www');
    },1200)
})



export default router
