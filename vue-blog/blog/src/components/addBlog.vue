<template>
  <div class="add-blog">
    <h1>写博客</h1>
    <form>
        <label>主题</label>
       <input type="text">

        <label>内容</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>

        <label>分类</label>
       <input type="checkbox" value="Vue.js">
       <input type="checkbox" value="Node.js">
       <input type="checkbox" value="Angular.js">
       <input type="checkbox" value="React.js">

    </form> 
   
  </div>
</template>

<script>
export default {
  name: 'add-blog',
  data:function(){
      return{

      }
  }
}
</script>

<style scoped>

</style>

