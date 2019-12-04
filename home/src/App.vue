<template>
  <div id="app">
    <!--<div id="nav">-->
      <!--<router-link to="/">Home</router-link> |-->
      <!--<router-link to="/about">About</router-link>-->
    <!--</div>-->

    <!--<router-view/>-->

    <header>
      <app-header></app-header>
      <app-menu></app-menu>
    </header>
    <main>

    </main>
    <app-footer></app-footer>

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

</style>
