import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
      menuItems:{}
  },
  getters:{
      //获取
  },
  mutations: {
      setMenuItems(state,data){
         state.menuItems = data;
      }
  },
  actions: {
  //应用mutations
  },
  modules: {

  }
})
