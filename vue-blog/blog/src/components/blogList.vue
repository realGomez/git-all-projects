<template>
    <div id="add-blog" v-theme:border="'gomez'">
        <h1>博客列表</h1>

        <input type="text" v-model="search">

         <div class="item" v-for="blog in filterBlogs" v-bind:key="blog.index">
             <router-link v-bind:to="'/blog/'+blog.id">
                 <h1 v-rainbow>{{blog.title | to-uppercase}}</h1>
             </router-link>
              <!--<div>{{blog.body | snippet}}</div>-->
             <div>{{blog.content | snippet}}</div>
         </div>
    </div>
</template>

<script>
    export default {
        name: "addBlog",
        data() {
            return {
                blogs:[],
                search:''
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

            // this.$http.get("./posts.json").then(function (data) {
            //     console.log(data);
            //     this.blogs = data.body.slice(0,20);
            //     console.log(this.blogs);
            //
            // })

            this.$http.get("https://vue-blog-f137d.firebaseio.com/blogs.json").then(function (data) {
                  return data.json();
            }).then(function (data) {
                var blogsArr = [];
                for(let key in data){
                    data[key].id = key;
                    blogsArr.push(data[key]);
                }
                this.blogs = blogsArr;

            });

        },
        computed:{
            filterBlogs:function () {
                return this.blogs.filter((blog) =>{
                    return blog.title.match(this.search)
                })
            }
        },
        filters:{
            // "to-uppercase":function (value) {
            //    return value.toUpperCase();
            // }
            toUppercase(value) {
                return value.toUpperCase();
            },
            snippet (value) {
                return value.slice(0,100) + '...';
            }
        },
        directives:{
            rainbow:{
                bind(el){
                    el.style.color = "#" + Math.random().toString(16).slice(2,8);
                }
            },
        theme:{
                bind(el,binding){
                  if(binding.value=='gomez'){
                    el.style.backgroundColor = "rgb(241, 241, 241)";
                  }

                  if(binding.arg == 'border'){
                      el.style.borderWidth = '2px';
                      el.style.borderStyle = 'dotted';
                      el.style.borderColor = 'red';
                  }
                }
            }
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

    .item a{
        color: #333;
        text-decoration: none;
    }

</style>


