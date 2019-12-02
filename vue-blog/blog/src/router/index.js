import Vue from 'vue'
import VueRouter from 'vue-router'
// import addBlog from '../components/addBlog.vue'
import blogList from '../components/blogList.vue'


Vue.use(VueRouter)

const routes = [
  {
      path: '/',
      name: 'list',
      component:blogList
  },
  {
    path: '/add',
    name: 'add',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../components/addBlog.vue')
  },
    {
        path: '/blog/:id',
        name: 'blog',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () => import(/* webpackChunkName: "about" */ '../components/blogDetail.vue')
    }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
