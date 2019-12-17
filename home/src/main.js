import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import Meta from 'vue-meta'
import VueLazyload from 'vue-lazyload'

Vue.use(Meta)
Vue.use(VueLazyload,{
    error:require('./assets/logo.png'),
    loading:require('./assets/loader.gif'),
    listenEvents: [ 'scroll' ]
})


Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
