<template>
    <div class="app-menu">

        <div class="nav-trigger" @click="triggerMenu"></div>
        <div class="nav-bg" v-if="bg"></div>
        <div class="nav-wrapper" v-bind:class="{active:menuActive}">
            <nav>
                <ul>
                    <li><router-link to="/">Home</router-link></li>
                    <li><router-link to="/about">About</router-link></li>
                </ul>
            </nav>
            <div class="nav-bro"></div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Menu",
        data(){
            return{
                bg:false,
                menuActive:false
            }
        },
        methods:{
            triggerMenu(){
                this.bg = !this.bg;
                this.menuActive = !this.menuActive;
            }
        }
    }
</script>

<style scoped>
    .app-menu {
        position: fixed;
        top: 0;
        width: 100px;
        height: 100vh;
        background: #fff;
        border-right: 1px solid #333;
    }

   .nav-bg{
       position: fixed;
       width: 100%;
       height: 100vh;
       z-index: 99;
       background: rgba(0,0,0,0.5);
       /*display: none;*/
   }

   .nav-wrapper {
       background: #fff;
       position: fixed;
       top: 0;
       left: -100%;
       width: 70%;
       height: 100vh;
       z-index: 99;
       padding-left: 10%;
       box-sizing: border-box;
       overflow-y: auto;
       -webkit-overflow-scrolling:touch;
       transition: left 300ms;
   }

   .nav-wrapper.active{
       left: 0;
   }
   .nav-bro {
       display: inline-block;
       height: 100vh;
       vertical-align: middle;
   }

   .nav-trigger{
       font-size: 0;
       display: inline-block;
       width: 25px;
       height: 48px;
       background: url(../assets/home-icon.png) -38px -118px no-repeat;
       border: 0;
       position: absolute;
       left: 17px;
       top: 50%;
       transform: translateY(-24px);
       z-index: 999;
   }
    nav{
        display: inline-block;
        vertical-align: middle;
    }

    nav ul{
        padding: 0;
        margin: 0;
    }

    nav li{
        list-style: none;
        margin: 0;
    }

    nav a{
        color: #333;
        text-decoration: none;
    }
</style>