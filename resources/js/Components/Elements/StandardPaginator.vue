<template>
    <nav class="py-5">
        <ul class="list-style-none flex justify-center">
            <li>
                <Link :href="'/page=1'">1</Link>
            </li>
            <li>
                <Link :href="'/page=1'">2</Link>
            </li>
            <li>
                <Link :href="'/page=1'">3</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup lang="ts">
import { PropType } from 'vue';

import { Link } from '@inertiajs/vue3';

const paginator = defineProps({
    paginator: {
        type: Object as PropType<{
            links: {
                first: String;
                last: String;
                next: String;
                prev: String;
            };
            meta: {
                total: Number;
                current_page: Number;
                from: Number;
                last_page: Number;
                links: Array;
                path: String;
                per_page: Number;
                to: Number;
            };
            data: Array;
        }>,
        required: true,
    },
});
</script>
