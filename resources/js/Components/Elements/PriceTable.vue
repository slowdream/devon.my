<template>
    <table class="w-full text-center">
        <thead>
            <tr>
                <th v-for="(priceTableOne, k) in priceTable" :key="k" class="p-3">
                    {{ priceTableOne.name }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td v-for="(priceTableOne, k) in priceTable" :key="k" class="p-3">
                    {{ priceTableOne.price }}
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script setup lang="ts">
import { defineProps, PropType } from 'vue';

defineProps({
    priceTable: { type: Object as PropType<[{ name: String; price: Number }]>, required: true },
});
</script>

<style scoped></style>
