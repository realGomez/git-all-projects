<template>
    <div class="row mt-3">
        <div class="col-md-3 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <img src="" alt="">
                    <form @submit.prevent="post">
                        <div class="form-group">
                            <label for="email">邮箱</label>
                            <input type="email"
                                   class="form-control"
                                   v-model="email"
                            >
                        </div>
                        <div class="form-group">
                            <label for="password">密码</label>
                            <input type="password"
                                   class="form-control"
                                   v-model="password"
                            >
                        </div>

                        <button type="submit" class="btn btn-block btn-success">登录</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "Register",
        data(){
            return {
                email:'',
                password:'',
            }
        },
        methods:{
            post:function () {
                axios.get('/user.json')
                    .then((res)=>{
                        // console.log(res);
                        const data = res.data;
                        const users = [];
                        for(let key in data){
                           users.push(data[key]);
                        }

                        console.log(this.email,this.password);

                        let result =  users.filter((user)=>{
                           return user.email == this.email && user.password == this.password
                        });


                        if(result!=null && result.length>0){
                            console.log(result);
                           this.$router.push('/home')
                        }
                    })

            }
        }
    }
</script>

<style scoped>

</style>