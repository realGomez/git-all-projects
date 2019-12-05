<template>
    <div class="app-menu">
        <div class="nav-serach"><i></i></div>
        <div class="nav-trigger" @click="triggerMenu"></div>
        <div class="nav-bg" v-if="bg"  @click="triggerMenu"></div>
        <div class="nav-wrapper" v-bind:class="{active:menuActive}">
            <nav>
                <ul>
                    <li><router-link to="/">博客首页</router-link></li>
                    <li><router-link to="/about">我的旅行</router-link></li>
                    <li><router-link to="/about">联系我们</router-link></li>
                    <li><router-link to="/about">百度地图开发</router-link></li>
                    <li><router-link to="/about">谷歌地图开发</router-link></li>
                    <li><router-link to="/about">magento2开发</router-link></li>
                </ul>
            </nav>
            <div class="nav-bro"></div>
        </div>

        <div class="social-media">
            <ul>
                <li class="twitter"><i></i></li>
                <li class="facebook"><i></i></li>
            </ul>
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

<style scoped lang="less">
    .app-menu {
        position: fixed;
        top: 0;
        width: 100px;
        height: 100vh;
        background: #fff;
        border-right: 1px solid #333;
        padding: 20px 40px;
        box-sizing: border-box;
    }

   .nav-bg{
       position: fixed;
       width: 100%;
       height: 100vh;
       z-index: 99;
       background: rgba(0,0,0,0.5);
       top: 0;
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
       left: 35px;
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
        margin: 0 0 10px;
    }

    nav a{
        color: #333;
        text-decoration: none;
    }

    .nav-serach{
        i{
            display: inline-block;
            width: 24px;
            height: 26px;
            background: url(../assets/home-icon.png) -40px 2px  no-repeat;

        }
    }

    .social-media{
        position: absolute;
        bottom: 0;
        left: 40px;
        padding-bottom: 20px;
        ul{
            margin: 0;
            padding: 0;
            font-size: 0;

            li{
                list-style: none;
                margin-top: 10px;

                i{
                    display: inline-block;
                    width: 18px;
                    height: 22px;
                    background: url(../assets/home-icon.png) -38px -118px no-repeat;

                }

                &.twitter i{
                    background-position: 0px -68px;
                }

                &.facebook i{
                    background-position: 0px -24px;
                }
            }
        }
    }

</style>