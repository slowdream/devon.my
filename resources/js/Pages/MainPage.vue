<script lang="ts" setup>
import { PropType } from 'vue';
import CardCollection from '@/types/models/collection';
import ProfileCard from '@/Components/ProfileCard.vue';
import PremiumCarousel from '@/Components/PremiumCarousel.vue';
import FilterAside from '@/Components/FilterAside.vue';
import StandardPaginator from '@/Components/Elements/StandardPaginator.vue';
import CategoryNav from '@/Components/CategoryNav.vue';

defineProps({
    collection: {
        type: Object as PropType<CardCollection>,
        required: true,
    },
});
</script>

<template>
    <CategoryNav />
    <PremiumCarousel />
    <div class="flex">
        <div class="w-1/4 p-8">
            <FilterAside />
        </div>
        <div class="w-3/4 p-8">
            <ProfileCard v-for="(card, k) in collection.data" :key="k" :card="card" />
            <StandardPaginator :paginator="collection" />
        </div>
    </div>
</template>
