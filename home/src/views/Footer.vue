<template>
    <div class="app-footer">
        <div class="social-media">
            <ul>
                <li class="twitter"><i></i></li>
                <li class="facebook"><i></i></li>
            </ul>
        </div>
      <span class="copyright">Copyright © 2019 戈麦斯个人博客</span>
        <div class="beian" style="">
            <!--<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=46010802000539" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">-->
                <!--<img src="../assets/beian/beian-icon.png" style="float:left;"/>-->
                <!--<span style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#8590a6;;">琼公网安备 46010802000539号</span>-->
            <!--</a>-->

            <a target="_blank" href="javascript:void(0)" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;pointer-events: none">
            <img src="../assets/beian/beian-icon.png" style="float:left;"/>
            <span style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#8590a6;;">琼公网安备 46010802000539号</span>
            </a>
            <span>琼ICP备19004979号</span>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Footer"
    }
</script>

<style scoped lang="less">
    .copyright{
        margin-right: 20px;
    }

    .social-media{
        /*position: absolute;*/
        bottom: 0;
        left: 40px;
        padding-bottom: 20px;
        ul{
            margin: 0;
            padding: 0;
            font-size: 0;

            li{
                list-style: none;
                display: inline-block;
                margin-left: 10px;

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

    .beian{
        width:360px;margin:0 auto; padding:10px 0;

        a,span{
            display: inline-block;
            vertical-align: middle;
        }

        a{
            margin-right: 15px;
        }
    }


</style>