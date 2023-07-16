import { createI18n } from 'vue-i18n'
import zh_Hans_CH from './zh_Hans_CH'
import zh_Hant_HK from './zh_Hant_HK'


const
  messages = {
    en_US: {
      message: {
        hello: 'hello world'
      }
    },
    zh_Hant_HK: {
      ...zh_Hant_HK
      // message: {
      //   hello: '你好 - 世界！'
      // }
    },
    zh_Hans_CH:{
      ...zh_Hans_CH
    }
  }
const i18n = createI18n({
  // something vue-i18n options here ...
  locale: 'zh_Hant_HK', // set locale
  fallbackLocale: 'en_US',
  messages: messages

})

export default i18n