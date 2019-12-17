<template>
    <div class="app-header">
        <router-link to="/" class="logo"><img src="./../assets/logo.png" alt="."></router-link>
        <app-menu></app-menu>
    </div>

</template>

<script>
    import menu from './Menu'

    export default {
        name: "Header",
        components: {
            'app-menu':menu,
        },
        data(){
          return{

          }
        },
        methods:{
            handleScroll:function () {
            }
        }
    }
</script>

<style scoped lang="less">

    .logo{
        display: inline-block;
        font-size: 0;
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

</style>