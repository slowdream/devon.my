<template>
    <nav class="my-4">
        <ul class="flex flex-row">
            <li v-for="(routeEl, i) in routes" :key="i">
                <Link class="mx-2 py-2 px-4 rounded-full" :href="route('home')">{{ routeEl }}</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const routes = [
    'Все анкеты',
    'Индивидуалки',
    'Массажистки',
    'Агентства',
    'Работа девушкам',
    'Парни',
    'Трансы',
];
</script>

<style lang="scss" scoped>
li > a {
    color: white;
    background-color: rgba(242, 39, 76, 0.8);
}
</style>
