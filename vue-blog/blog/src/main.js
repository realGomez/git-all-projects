import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import VueResource from 'vue-resource'

Vue.use(VueResource)
Vue.config.productionTip = false

// 自定义指令
// Vue.directive("rainbow",{
//    bind(el,binding,vnode){
//       el.style.color = "#" + Math.random().toString(16).slice(2,8);
//    }
// })

Vue.directive("rainbow",{
    bind(el){
        el.style.color = "#" + Math.random().toString(16).slice(2,8);
    }
})

Vue.directive("theme",{
    bind(el,binding){
      if(binding.value=='gomez'){
        el.style.backgroundColor = "rgb(241, 241, 241)";
      }

      if(binding.arg == 'border'){
          el.style.borderWidth = '2px';
          el.style.borderStyle = 'dotted';
          el.style.borderColor = 'red';
      }
    }
})


Vue.filter("to-uppercase",function (value) {
   return value.toUpperCase();
})


Vue.filter("snippet",function (value) {
    return value.slice(0,100) + '...';
})
new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
