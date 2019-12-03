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
                        <div class="form-group">
                            <label for="confirm-password">确认密码</label>
                            <input type="password"
                                   class="form-control"
                                   v-model="confirmPassword"
                            >
                        </div>

                        <button type="submit" class="btn btn-block btn-success">注册</button>
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
                confirmPassword:''
            }
        },
        methods:{
            post:function () {

                if(this.password == this.confirmPassword){
                    const formData = {
                        email:this.email,
                        password:this.password,
                        confirmPassword:this.confirmPassword
                    }

                    axios.post('/user.json',formData)
                        .then((response)=>{
                        console.log(response);
                        this.$router.push({name:'login'});
                    })
                }else{
                    alert("两次密码不一致");
                }
            }
       }
    }
</script>

<style scoped>

</style>