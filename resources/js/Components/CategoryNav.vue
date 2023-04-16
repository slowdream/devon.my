<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav>
        <ul>
            <li><Link :href="route('home')">Home</Link></li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'CategoryNav',
};
</script>

<style scoped></style>
