<template>
    <div class="app-header">
        <router-link to="/" class="logo"><img src="./../assets/logo.png" alt="."></router-link>
    </div>
</template>

<script>
    export default {
        name: "Header"
    }
</script>

<style scoped>
    .app-header{
        /*text-align: center;*/
    }
    .logo{
        display: inline-block;
        font-size: 0;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

</style>