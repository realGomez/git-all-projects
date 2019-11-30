<template>
    <div id="add-blog" v-theme:border="'gomez'">
        <h1>博客列表</h1>
         <div class="item" v-for="blog in blogs" v-bind:key="blog.index">
             <h1 v-rainbow>{{blog.title | to-uppercase}}</h1>
              <div>{{blog.body | snippet}}</div>
         </div>
    </div>
</template>

<script>
    export default {
        name: "addBlog",
        data() {
            return {
                blogs:[]
            }
        },
        created(){

            // this.$http.get("https://jsonplaceholder.typicode.com/posts").then(function (data) {
            //     console.log(data);
            //     this.blogs = data.body.slice(0,20);
            //     console.log(this.blogs);
            //
            // })


            //本地数据

            // this.$http.get("../assets/posts.json").then(function (data) {
            //     console.log(data);
            //     this.blogs = data.body.slice(0,20);
            //     console.log(this.blogs);
            //
            // })

            this.$http.get("./posts.json").then(function (data) {
                console.log(data);
                this.blogs = data.body.slice(0,20);
                console.log(this.blogs);

            })

        }
    }
</script>

<style scoped>

    #add-blog{
        max-width: 600px;
        margin: 0 auto;
        padding: 10px;
    }

    .field{
        margin-bottom: 20px;
    }
    label{
        display: block;
        margin-bottom: 5px;
    }


    input[type='text'],select,textarea{
        display: block;
        width: 100%;
    }

    input[type='text'],select{
        height: 32px;
    }

    textarea{
        min-height: 120px;
    }

    .field.choice label {
        display: inline-block;
    }

    .field.content{
        margin-bottom: 0;
    }

    input[type='checkbox']{
        display: inline-block;
        margin-right: 10px;
    }

    .classify ul{
        margin: 0;
        padding: 0;
    }
    .classify li{
        display: inline-block;
        margin-right: 10px;
    }

</style>


