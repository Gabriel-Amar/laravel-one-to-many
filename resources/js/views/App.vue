<template>
    <div>
        <app-main/>
        <a href="admin/posts">Vai ai post</a>
    </div>
</template>

<script>
import AppMain from '../components/AppMain.vue'
export default {
    name: "App",
    components: {
        AppMain
        
    }
}
</script>