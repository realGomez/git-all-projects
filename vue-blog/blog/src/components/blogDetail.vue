<template>
    <div id="blog-detail">
        <h1>{{blog.title}}</h1>
        <div>{{blog.content}}</div>
        <p>作者：{{blog.author}}</p>
        <p>分类:</p>
        <ul>
            <li v-for="category in blog.categories" v-bind:key="category">
                {{category}}
            </li>
        </ul>


        <button @click="deleteCurrent">删除</button>
        <router-link :to="'/edit/'+id">编辑</router-link>

    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "blogDetail",
        data() {
            return {
                blog:'',
                id:this.$route.params.id
            }
        },
        created(){

            // this.$http.get("https://jsonplaceholder.typicode.com/posts/"+this.id).then(function (data) {
            //     console.log(data);
            //     this.blog = data.body;
            //     console.log(this.blog);
            //
            // })

            // this.$http.get("https://vue-blog-f137d.firebaseio.com/blogs/"+this.id+'.json').then(function (data) {
            //     this.blog = data.body;
            //
            // })

            // axios.get("https://vue-blog-f137d.firebaseio.com/blogs/"+this.id+'.json').
            axios.get("/blogs/"+this.id+'.json').then( (data) =>{
                this.blog = data.data;

            })

        },
        methods:{
            // deleteCurrent:function () {
            //     this.$http.delete("https://vue-blog-f137d.firebaseio.com/blogs/"+this.id+'.json').then(function () {
            //
            //        this.$router.push({path:'/'})
            //     })
            // }

            deleteCurrent:function () {
                axios.delete("/blogs/"+this.id+'.json').then( ()=>{

                    this.$router.push({path:'/'})
                })
            }
        }
    }
</script>

<style scoped>

   #blog-detail{
       max-width: 1200px;
       padding: 10px;
       background: #f3f3f3;
   }

</style>


