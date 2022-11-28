<template>
    <p class="my-5 btn-classic">
        {{ hiddenPhone }}
    </p>
</template>

<script setup>
const { phone } = defineProps(['phone'])
const hiddenPhone = phone.slice(0, -4) + '####'
</script>
