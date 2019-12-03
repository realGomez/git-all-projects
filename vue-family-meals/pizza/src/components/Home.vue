<template>
  <div class="home">
   <h2>home</h2>

      <button class="button" @click="goToMenu">点餐</button>
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  methods:{
      goToMenu:function(){
          //上一次浏览页面
          // this.$router.go(-1)
          // this.$router.replace('/menu');

      //    指定路由名称下
      //     this.$router.replace({name:'menuLink'});


          // this.$router.push({name:'menuLink'});
          this.$router.push('/menu');


      }
  }
}
</script>


<style scoped>
    /*.home{*/
        /*height: 300vh;*/
    /*}*/
</style>
