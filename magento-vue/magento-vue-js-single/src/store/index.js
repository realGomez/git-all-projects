import { createStore } from 'vuex'
import getters from './getters'

const store = createStore({
    state () {
      return {
        count: 0
      }
    },
    getters,
    mutations: {
      increment (state) {
        state.count++
      },
      setLanguage (state, language) {
        // 修改state并将其保存在Cookies中，这样用户下次打开仍然是上次选择的国际化状态
        state.language = language
        // Cookies.set('language', language)
      },
    },
    actions: {
      setLanguage ({ commit },language) {
        commit('setLanguage',language)
      }
    }
  })


  export default store;