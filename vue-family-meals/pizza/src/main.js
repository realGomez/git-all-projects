import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

Vue.config.productionTip = false

//全局守卫
// router.beforeEach((to,from,next)=>{
//    if(to.path == '/login' || to.path == '/register'){
//      next();
//    }else{
//     alert("您还没有登录");
//     next('/login');
//    }
// })


// router.afterEach((to,from)=>{
//
// })

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
