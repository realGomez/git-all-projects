<template>
  <div id="app">
    <!--<div id="nav">-->
      <!--<router-link to="/">Home</router-link> |-->
      <!--<router-link to="/about">About</router-link>-->
    <!--</div>-->


    <header>
      <app-header></app-header>
      <app-menu></app-menu>
    </header>
    <main>
      <router-view/>

    </main>

    <footer>
      <app-footer></app-footer>

    </footer>

  </div>
</template>

<script>
    import header from './views/Header'
    import menu from  './views/Menu'
    import footer from './views/Footer'
    export default {
        name: 'home',
        components: {
          'app-header':header,
          'app-menu':menu,
          'app-footer':footer,

        }
    }
</script>

<style lang="less">
  body{
    margin: 0;
  }

  #app{
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  main{
    margin-left: 100px;
  }
  footer{
    margin-top: auto;
    margin-left: 100px;
    background: #f6f6f6;
    padding: 30px 10px;
    box-sizing: border-box;
    font-size: 12px;
    line-height: 2;
    color: #8590a6;
    text-align: center;
  }

</style>
