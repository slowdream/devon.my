<script lang="ts" setup>
import { PropType } from 'vue';
import ProfileCard from '@/Components/ProfileCard.vue';
import PremiumCarousel from '@/Components/PremiumCarousel.vue';
import Collection from '@/types/models/collection';

defineProps({
    collection: {
        type: Object as PropType<Collection>,
        required: true,
    },
});
</script>

<template>
    <PremiumCarousel />
    <ProfileCard v-for="(card, k) in collection.data" :key="k" :card="card" />
</template>
