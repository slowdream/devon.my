<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header>
        <Link :href="route('home')"> Home </Link>
        <Link href="/about"> About </Link>
    </header>
    <main class="grid justify-items-center">
        <article class="max-w-7xl">
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
