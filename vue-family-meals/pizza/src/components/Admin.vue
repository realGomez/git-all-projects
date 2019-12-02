<template>
    <div id="admin">
     admin
    </div>
</template>

<script>
    export default {
        name: "Admin",
        data(){
            return {
                name:'k'
            }
        },
        beforeRouteEnter:(to,from,next)=>{

       },beforeRouteLeave:()=>{

            if(conform('leave')==true){

            }else{
                next(false);
            }
        }

    }
</script>

<style scoped>

</style>