<script setup lang="ts">
import HeaderMain from '@/Layouts/HeaderMain.vue';
</script>

<template>
    <HeaderMain />
    <main class="2xl container mx-auto">
        <article>
            <slot />
        </article>
    </main>
    <footer style="background-color: rgba(#f2274c, 0.2)"></footer>
</template>

<style scoped></style>
