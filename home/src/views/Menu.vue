<template>
    <div class="app-menu" v-bind:class="{active:menuActive}">
        <!--<div class="nav-serach"><i></i></div>-->
        <div class="nav-trigger" @click="triggerMenu"><i class="left-i"></i><i class="center-i"></i><i class="right-i"></i></div>
        <div class="nav-bg" v-if="bg"  @click="triggerMenu"></div>
        <div class="nav-wrapper" >
            <nav>
                <div class="nav-blocks" @click="clickA($event)">
                    <ul>
                        <li><strong>戈麦斯博客</strong></li>

                        <li><router-link to="/contact">联系我们</router-link></li>
                    </ul>

                    <ul>
                        <li><strong >旅行</strong></li>
                        <li><router-link to="/qilou" >海口骑楼老街</router-link></li>
                        <li><router-link to="/thai">泰国行</router-link></li>

                    </ul>
                </div>
            </nav>
            <div class="nav-bro"></div>
        </div>
    </div>
</template>

<script>
    import Bus from '../bus.js'
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
                Bus.$emit('menuFixed',this.menuActive)
            },
            clickA:function ($event) {
              var target =  $event.target;
                if(target.nodeName=='A'){
                    this.bg = false;
                    this.menuActive = false;
                    Bus.$emit('menuFixed',false)
                }
            }
        }
    }
</script>

<style scoped lang="less">
    .app-menu {
        top: 0;
        width: 100%;
        padding: 30px  15px;
        box-sizing: border-box;

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

       &.active{
           .nav-wrapper{
               left: 0;
           }


           .nav-trigger{
               .left-i{
                   top: 10px;
                   transform: rotate(45deg);
                   transition: top 300ms  ease 0ms,transform 300ms ease 400ms;

               }

               .center-i{
                   opacity: 0;
               }
               .right-i{
                   bottom: 9px;
                   transform: rotate(-45deg);
                   transition: bottom 300ms 0ms,transform 300ms 400ms;

               }

           }
       }
    }

   .nav-bg{
       position: fixed;
       width: 100%;
       height: 100vh;
       z-index: 99;
       background: rgba(0,0,0,0.5);
       top: 0;
   }


   .nav-bro {
       display: inline-block;
       height: 100vh;
       vertical-align: middle;
   }

   .nav-trigger{
       font-size: 0;
       display: inline-block;
       width: 30px;
       height: 20px;
       border: 0;
       position: relative;
       z-index: 999;
       text-align: center;
       cursor: pointer;

       i{
           width: 30px;
           height: 1px;
           background: #333;
           display: inline-block;
       }

       .left-i{
           position: absolute;
           top: 0;
           left: 0;
           transform: rotate(0deg);
           transition: top 300ms  ease 400ms,transform 300ms ease 0ms;
       }
       .center-i{
           opacity: 1;
           position: absolute;
           top: 10px;
           left: 0;
           transition: opacity 0ms 300ms;
       }
       .right-i{
           position: absolute;
           bottom: 0;
           left: 0;
           transform: rotate(0deg);
           transition: bottom 300ms ease 400ms,transform 300ms ease 0ms;
       }


   }
    nav{
        display: inline-block;
        vertical-align: middle;
        width: 100%;
    }

    .nav-blocks{

    }
    nav ul{
        padding: 0;
        margin: 0 20px 0 0;
        display: inline-block;
        vertical-align: middle;
    }

    nav li{
        list-style: none;
        margin: 0 0 10px;
    }

    nav a{
        color: #333;
        text-decoration: none;
    }




</style>