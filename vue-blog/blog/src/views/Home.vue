<template>
  <div class="home">
    <add-blog />
  </div>
</template>

<script>
// @ is an alias to /src
import addBlog from '@/components/addBlog.vue'

export default {
  name: 'home',
  components: {
    addBlog
  }
}
</script>
