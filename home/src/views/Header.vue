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

<style scoped lang="less">
    .app-header{
        margin-left: 100px;
        position: relative;
    }
    .logo{
        display: inline-block;
        font-size: 0;
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

</style>