<template>
    <div id="add-blog">
        <h1>添加博客</h1>
        <form v-if="!submited">
            <div class="field">
                <label>标题</label>
                <input type="text" v-model="blog.title">
            </div>

            <div class="field content">
                <label>博客内容</label>
                <textarea v-model="blog.content"></textarea>
            </div>

            <div class="field choice">
                <label>vue</label><input type="checkbox" value="vue" v-model="blog.categories">
                <label>node</label><input type="checkbox" value="node" v-model="blog.categories">
                <label>reat</label><input type="checkbox" value="reat" v-model="blog.categories">
                <label>angular</label><input type="checkbox" value="angular" v-model="blog.categories">
            </div>

            <div class="field">
                <label>作者</label>
                <select v-model="blog.author">
                    <option v-for="author in blog.authors" v-bind:key="author">
                        {{author}}
                    </option>
                </select>
            </div>

            <button v-on:click.prevent="post">提交</button>
        </form>


        <div class="preview">
            <h1>博客预览</h1>
            <div class="field">
                <label>标题</label>
                <div>{{blog.title}}</div>
            </div>

            <div class="field">
                <label>博客内容</label>
                <div>{{blog.content}}</div>
            </div>

            <div class="field classify">
                <label>分类</label>
                <ul>
                    <li v-for="category in blog.categories" v-bind:key="category">
                        {{category}}
                    </li>
                </ul>
            </div>

            <div class="field">
                <label>作者</label>
                <span>{{blog.author}}</span>
            </div>
        </div>

        <div class="submited-success" v-if="submited">
            <h1>博客添加成功</h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: "addBlog",
        data() {
            return {
                blog:{
                    title:'',
                    content:'',
                    categories:[],
                    author:'',
                    authors:['尤雨溪','戈麦斯'],
                },
                submited:false

            }
        },
        methods:{
            post:function () {

                this.$http.post("https://jsonplaceholder.typicode.com/posts",{
                    title:this.blog.title,
                    body:this.blog.content,
                    userId:1
                }).then(function (data) {
                    console.log(data);
                    this.submited = true;
                })
            }
        }
    }
</script>

<style scoped>

    #add-blog{
        max-width: 600px;
        margin: 0 auto;
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