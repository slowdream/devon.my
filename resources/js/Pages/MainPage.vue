<script lang="ts" setup>
import { PropType } from 'vue';
import ProfileCard from '@/Components/ProfileCard.vue';
import PremiumCarousel from '@/Components/PremiumCarousel.vue';
import CardCollection from '@/types/models/collection';

defineProps({
    collection: {
        type: Object as PropType<CardCollection>,
        required: true,
    },
});
</script>

<template>
    <PremiumCarousel />
    <ProfileCard v-for="(card, k) in collection.data" :key="k" :card="card" />
</template>
