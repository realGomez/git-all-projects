<template>
  <div class="home" >
   斤斤计较

  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  metaInfo:{
      title:'海南戈麦斯网络',
      meta:[
          { name: 'discription',content:'海南网页开发，海南网站搭建' },
          { name: 'keywords', content: '海南，网页开发,网站搭建' }
      ]
  },
    mounted(){

      // console.log(this.$root);

    }

}
</script>


<style scoped>
  canvas{
    display: block;
    width: 100%;
  }
</style>