<template>
    <form @submit.prevent="post">
        <h3 class="text-muted my-5">添加新pizza</h3>
        <div class="form-group row">
            <label  class="col-sm-1">品种</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" v-model="newPizza.name">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-1">描述</label>
            <div class="col-sm-11">
                <textarea  rows="5" class="form-control" v-model="newPizza.description"></textarea>
            </div>
        </div>
        <p>选项</p>
        <div class="form-group row">
            <label  class="col-sm-1">尺寸</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" v-model="newPizza.option.size">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-1">价格</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" v-model="newPizza.option.price">
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-success btn-block">添加</button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "NewPizza",
        data(){
            return {
                newPizza:{
                    name:'',
                    description:'',
                    option:{
                        size:0,
                        price:0
                    }
                },
            }
        },
        methods:{
           post () {
               fetch("https://pizza-1a216.firebaseio.com/menu.json",{
                   method:'POST',
                   headers:{
                       "Content-Type":"application/json"
                   },
                   body:JSON.stringify(this.newPizza)
               })
               .then(res=>res.json())
               .then(()=>{
                   this.$router.push({name:'menuLink'});
               });
           }
        }
    }
</script>

<style scoped>

</style>