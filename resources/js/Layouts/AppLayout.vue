<template>
    <Header/>

    <main>
        <slot/>
    </main>

    <Footer/>
</template>

<script>
import Header from './Header'
import Footer from './Footer'
import { defineComponent } from 'vue'

export default defineComponent({
    name: 'AppLayout',
    components: {
        Footer,
        Header,
    },
})
</script>

<style scoped>

</style>
