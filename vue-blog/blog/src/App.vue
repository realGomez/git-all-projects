<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">list</router-link>
      |
      <router-link to="/add">add</router-link>
    </div>
    <router-view/>
  </div>
</template>

<style lang="less">

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
