<script lang="ts" setup>
import { defineProps, PropType } from 'vue';
import Card from '@/types/models/card';
import AddressBtn from '@/Components/Elements/AddressBtn.vue';
import CardCheckLogo from '@/Components/Elements/CardCheckLogo.vue';
import PriceTable from '@/Components/Elements/PriceTable.vue';

defineProps({ card: { type: Object as PropType<Card>, required: true } });
</script>

<template>
    <div class="px-5">
        <div class="grid grid-cols-2 gap-4 justify-items-stretch">
            <div class="flex justify-between">
                <h3>{{ card.name }}</h3>
                <AddressBtn />
                <span>MiniLogos</span>
                <span>CardCheck</span>
            </div>

            <div class="flex justify-end">
                <CardCheckLogo />
            </div>
        </div>
        <section class="grid grid-cols-2 gap-4 justify-items-stretch">
            <section class="grid grid-cols-2 gap-4">
                <div class="bg-gray-100">01</div>
                <div class="grid grid-rows-2 gap-4">
                    <section class="grid grid-cols-1 gap-4">
                        <div class="bg-yellow-500">02</div>
                        <div class="bg-gray-500">03</div>
                    </section>
                    <section class="grid grid-cols-2 gap-4">
                        <div class="bg-yellow-500">04</div>
                        <div class="bg-gray-500">05</div>
                    </section>
                </div>
            </section>
            <div class="bg-red-700 grid">
                <div class="text-right p-3">{{ card.description }}</div>
                <div>
                    <span>18</span>
                    <span>лет</span>
                    <span>49</span>
                    <span>кг</span>
                    <span>3</span>
                    <span>бюст</span>
                    <span>165</span>
                    <span>рост</span>
                </div>
                <div>Categories</div>
                <div class="flex justify-center">
                    <PriceTable />
                </div>
            </div>
        </section>
    </div>
</template>

<style scoped></style>
