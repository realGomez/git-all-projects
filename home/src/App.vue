<template>
  <div id="app" v-bind:class="{ 'menu-fixed':menuFixed,'header-fixed':headerFixed,inited:init,loading:loading }">

    <header>
      <app-header></app-header>
    </header>
    <main ref="main">
      <router-view/>

    </main>

    <footer>
      <app-footer></app-footer>

    </footer>

  </div>
</template>

<script>
    import header from './views/Header'
    import footer from './views/Footer'
    import Bus from './bus.js'

    export default {
        name: 'app',
        components: {
          'app-header':header,
          'app-footer':footer,

        },
        mounted () {

            var scrollT = document.documentElement.scrollTop;
            var caculating = false;
            var _this = this;

            document.addEventListener('scroll', function () {
                _this.init = true;
                if(caculating){
                    return;
                }else{
                    caculating = true;
                    setTimeout(()=> {
                        var newScrollT = document.documentElement.scrollTop;
                        var d = newScrollT - scrollT;

                        if(d>0){
                            _this.headerFixed = false;
                        }else{
                            _this.headerFixed = true;

                        }

                        scrollT = newScrollT;
                        caculating = false;
                    },300)

                }
            });

            Bus.$on('menuFixed', (data) => {
                this.menuFixed = data;
            });

            Bus.$on('loading', (data) => {
               this.loading =data;
            });
        },
        data(){
            return {
                headerFixed:false,
                init:false,
                menuFixed:false,
                loading:false
            }
        },
        methods:{

        }

    }
</script>

<style lang="less">
  body{
    margin: 0;
  }

  #app{
    &.menu-fixed{
      position: fixed;
    }
    &.loading:before{
      display: block;
      content: "";
      height: 100vh;
      width: 100%;
      position: fixed;
      background: url("./assets/loader.gif") center center no-repeat;
      background-color: #fff;

    }
  }

  header{
    position: fixed;
    top: 0;
    width: 100%;
    background: #fff;
    transition: top  300ms;
    box-shadow: 0 0 0 1px #dacfd6;

  }

  .inited header{
    top: -100px;

  }

  .header-fixed {
    &.inited header{
        top: 0;
    }
  }

  main{
    min-height: 100vh;
    padding: 10px 15px;
    margin-top: 74px;
  }

  #app{
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }


  footer{
    margin-top: auto;
    /*margin-left: 100px;*/
    background: #f6f6f6;
    padding: 30px 10px;
    box-sizing: border-box;
    font-size: 12px;
    line-height: 2;
    color: #8590a6;
    text-align: center;
  }

  img{
    max-width: 100%;
  }


  h1{
    text-align: center;
    margin: 20px 0 40px;
  }

</style>
