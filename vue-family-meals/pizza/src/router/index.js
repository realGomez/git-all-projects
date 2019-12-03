import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/Home.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    // component: Home
      components: {
         default:Home,
          'orderingGuide':() => import('../components/about/OrderingGuide.vue'),
          'history':() => import('../components/about/History.vue'),
          'delivery':() => import('../components/about/Delivery.vue')
      }
  },
  // {
  //     path: '/admin',
  //     name: 'admin',
  //     component: () => import(/* webpackChunkName: "about" */ '../components/Admin.vue')
  // },
    {
        path: '/admin',
        name: 'adminLink',
        component: () => import('../components/Admin.vue'),
        // beforeEnter:(to,from,next)=>{
         //路由独享
        //     alert('非登录状态不能访问');
        // }
    },
  {
      path: '/login',
      name: 'login',
      component: () => import('../components/Login.vue')
  },
  {
      path: '/menu',
      name: 'menuLink',
      component: () => import('../components/Menu.vue')
  },
  {
      path: '/register',
      name: 'register',
      component: () => import('../components/Register.vue')
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('../components/about/About.vue'),
    redirect:'/about/contact',
    children:[
        {
            path: '/about/contact',
            name: 'contactLink',
            component: () => import('../components/about/Contact.vue')
        },
        {
            path: '/about/delivery',
            name: 'deliveryLink',
            component: () => import('../components/about/Delivery.vue')
        },
        {
            path: '/about/history',
            name: 'historyLink',
            component: () => import('../components/about/History.vue')
        },
        {
            path: '/about/guide',
            name: 'orderingGuideLink',
            component: () => import('../components/about/OrderingGuide.vue')
        }
    ]
  },
    {
        path: '*',
        redirect:'/'
    }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
    // scrollBehavior(){
      // return {x:0,y:50};


      // return {selector:'.button'}
        // if(savePosition){
        //     return savePosition;
        // }else{
        //     return {x:0,y:200}
        // }

    // }


})

export default router
