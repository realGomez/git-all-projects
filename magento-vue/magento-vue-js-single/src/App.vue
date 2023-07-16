<script>
export default {
  // data() 返回的属性将会成为响应式的状态
  // 并且暴露在 `this` 上
  data() {
    return {
      count: 0
    }
  },

  // methods 是一些用来更改状态与触发更新的函数
  // 它们可以在模板中作为事件处理器绑定
  methods: {
    increment() {
      this.count++;
      console.log(this.$store);
    },
    handleSetLanguage(lang) {
      // 设置i18n，以便后面通过$t('settings.title')使用
      this.$i18n.locale = 'zh_Hans_CH'
      // 向vuex提交修改后的国际化，以便后面获取
      this.$store.dispatch('setLanguage', 'zh_Hans_CH')
      // this.$message({
      //   message: 'Switch Language Success',
      //   type: 'success'
      // })
    }
  },

  // 生命周期钩子会在组件生命周期的各个不同阶段被调用
  // 例如这个函数就会在组件挂载完成后被调用
  mounted() {
    console.log(`The initial count is ${this.count}.`)
  }
}
</script>

<template>
  <button @click="increment">Count is: {{ count }}</button>
  <button @click="handleSetLanguage">handleSetLanguage</button>

  {{ $t("message.hello") }}
</template>