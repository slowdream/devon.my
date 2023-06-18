<script setup lang="ts"></script>

<template>
    <button type="submit" class="py-2 px-4 text-white rounded-md">
        <slot />
    </button>
</template>

<style scoped>
button {
    background: #f2274c;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 3px;
}
</style>
