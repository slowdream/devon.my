<template>
    <footer class="site-footer">
        <div class="container">
            <div class="soc-icons-wrap">
                <a href="#" class="soc-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="soc-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="soc-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="soc-icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a>

            </div>
            <p class="copyright">&#169; 2021 Devon</p>
        </div>
    </footer>
</template>

<script>
import { defineComponent } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
    name: 'Footer',
    components: {
        Link,
    },
})
</script>

<style scoped>

</style>
