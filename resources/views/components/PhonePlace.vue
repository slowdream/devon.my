<template>
    <p class="py-5">
        {{ hiddenPhone }}
    </p>
</template>

<script setup>
const { phone } = defineProps(['phone'])
const hiddenPhone = phone.slice(0, -4) + '####'
</script>
