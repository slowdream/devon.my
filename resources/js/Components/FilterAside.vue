<template>
    <div class="absolute left-0">
        <div class="relative">
            <svg width="145" height="115" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    filter="drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25))"
                    d="M143.6 102.9C144.8
                105.622 144.536 108.208 142.808 110.658C141.086 113.108 138.575 114.333 135.275
                114.333L5 114.333C0.0499983 114.333 -4.189 112.733 -7.717 109.531C-11.239 106.335
                -13 102.492 -13 98L-13 16.3333C-13 11.8417 -11.239 7.99517 -7.71701 4.79384C-4.18901
                1.59795 0.0499933 7.05896e-06 4.99999 6.84259e-06L135.275 1.14809e-06C138.575
                1.00384e-06 141.086 1.22501 142.808 3.675C144.536 6.12501 144.8 8.71111 143.6
                11.4333L122 57.1667L143.6 102.9Z"
                    fill="#F4526F"
                />
            </svg>
            <span class="absolute text-white pl-4 text-lg tracking-wide" style="top: 30px">
                Скрыть<br />фильтр
            </span>
        </div>
    </div>
    <div class="">
        <form class="space-y-4">
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="age" class="block"> Возраст </label>
                    <Slider v-model="age" :min="18" :max="65" name="age" class="mt-10" />
                </div>
                <div>
                    <label for="height" class="block"> Рост </label>
                    <Slider v-model="height" :min="140" :max="200" name="height" class="mt-10" />
                </div>
                <div>
                    <label for="weight" class="block"> Вес </label>
                    <Slider v-model="weight" :min="40" :max="150" name="weight" class="mt-10" />
                </div>
                <div>
                    <label for="bust" class="block"> Бюст </label>
                    <Slider v-model="bust" :min="1" :max="7" name="bust" class="mt-10" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="appearance" class="block"> Внешность </label>
                    <Select
                        v-model="appearance"
                        :options="appearanceOptions"
                        :placeholder="'Все'"
                        name="appearance"
                        class="mt-1"
                    />
                </div>
                <div>
                    <label for="figure" class="block"> Фигура </label>
                    <Select
                        v-model="figure"
                        :options="figureOptions"
                        :placeholder="'Все'"
                        name="figure"
                        class="mt-1"
                    />
                </div>
                <div>
                    <label for="hairColor" class="block"> Цвет волос </label>
                    <Select
                        v-model="hairColor"
                        :options="hairColorOptions"
                        :placeholder="'Все'"
                        name="hairColor"
                        class="mt-1"
                    />
                </div>
                <div>
                    <label for="meetingPlace" class="block"> Место встречи </label>
                    <Select
                        v-model="meetingPlace"
                        :options="meetingPlaceOptions"
                        :placeholder="'Любое'"
                        name="meetingPlace"
                        class="mt-1"
                    />
                </div>
            </div>
            <div>
                <label for="metroStation" class="block"> Станция метро </label>
                <Input
                    v-model="metroStation"
                    :placeholder="'Любая'"
                    type="text"
                    name="metroStation"
                    class="mt-1"
                />
            </div>
            <div class="flex justify-center">
                <StandardBtn>Применить фильтр</StandardBtn>
            </div>
        </form>
    </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue';
import StandardBtn from '@/Components/Elements/StandardBtn.vue';

const age = ref([18, 65]);
const height = ref([100, 180]);
const weight = ref([40, 60]);
const bust = ref(4);
const appearance = ref('');

const figure = ref('');
const hairColor = ref('');
const meetingPlace = ref('');
const metroStation = ref('');
const appearanceOptions = [
    { value: 'european', label: 'Европейская' },
    { value: 'asian', label: 'Азиатская' },
    { value: 'african', label: 'Африканская' },
];
const figureOptions = [
    { value: 'slim', label: 'Стройная' },
    { value: 'average', label: 'Средняя' },
    { value: 'curvy', label: 'Полная' },
];
const hairColorOptions = [
    { value: 'blonde', label: 'Блондинка' },
    { value: 'brunette', label: 'Брюнетка' },
    { value: 'redhead', label: 'Рыжая' },
];
const meetingPlaceOptions = [
    { value: 'apartment', label: 'Квартира' },
    { value: 'hotel', label: 'Гостиница' },
    { value: 'outdoors', label: 'Улица' },
];
</script>
