<template>
    <nav class="pagination">
        <template v-for="(link, k) in meta.links" :key="k">
            <Link v-if="link.url !== null" :class="{ 'current': link.active }" :href="link.url"
                  class="page-numbers" v-html="link.label"/>
        </template>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

const { meta } = defineProps(['meta'])
</script>
