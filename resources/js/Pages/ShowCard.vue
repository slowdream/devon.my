<script lang="ts" setup>
import { PropType } from 'vue';
import ProfileCard from '@/Components/ProfileCard.vue';
import Card from '@/types/models/card';

defineProps({ card: { type: Object as PropType<Card>, required: true } });
</script>
<template>
    <ProfileCard :card="card"></ProfileCard>
</template>
<style scoped></style>
