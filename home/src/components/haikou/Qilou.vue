<template>
    <div id="qilou">

        <h1>海口骑楼老街</h1>
        <p>初冬的海口，微风不燥，阳光正好！</p>
        <p>正好回海南工作两个月，约上三五个老同学，去解放西逛街。金棕榈广场非常热闹。这几天天气稍微有点凉，大家开始买冬装。</p>
        <p>金棕榈小吃街尝了几个好多年没有吃过的海南小吃，然后和同学去骑楼老街压马路...</p>
        <div class="container">
            <img src="../../assets/Haikou/qilou/IMG_2539.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2541.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2542.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2544.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2545.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2546.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2547.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2549.JPG" alt="海口骑楼老街" v-theme>
            <img src="../../assets/Haikou/qilou/IMG_2550.JPG" alt="海口骑楼老街" v-theme>
        </div>

        <p style="text-align: right">2019.12.7</p>
    </div>
</template>

<script>

    export default {
        name: "qilou",
        metaInfo:{
            title:'骑楼老街',
            meta:[
                { name: 'discription',content:'海口骑楼老街 ，海南旅游' },
                { name: 'keywords', content: '骑楼,海口，骑楼老街,海南旅游' }
            ]
        },
        directives:{
            theme:{
                bind(el){
                        el.style.backgroundColor = "#" + Math.random().toString(16).slice(2,8);
                }
            }
        }
    }
</script>

<style lang="less" scoped>


    img{
        margin-bottom: 20px;
    }

    @media only screen and (min-width: 1025px) {

        .container{
            margin-left: -20px;
            font-size: 0;
        }
        img{
            box-sizing: border-box;
            width: calc((100% - 60px) / 3);
            margin-left: 20px;

        }

    }
</style>