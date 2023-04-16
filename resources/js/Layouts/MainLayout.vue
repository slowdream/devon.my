<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <main>
        <header>
            <Link :href="route('home')"> Home </Link>
            <Link href="/about"> About </Link>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
export default {
    name: 'MainLayout',
};
</script>

<style scoped></style>
