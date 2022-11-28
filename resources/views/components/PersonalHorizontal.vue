<template>
    <article class="model-row">
        <div class="flex flex-col justify-between">
            <div class="">
                <a :href="route('show', card.id)" class="img-wr">
                    <img :src="card.photos[0].original_url" alt="">
                </a>
            </div>
            <div class="">
                <div class="row-model-info px-1">
                    <h3 class="title">
                        <Link :href="route('show', card.id)">
                            {{ card.name }}
                        </Link>
                    </h3>
                    <div class="model-attr">
                        <p class="attr-item py-1.5">
                            <span class="attr-name">Рост: </span>
                            <span class="attr-value">{{ card.height }}</span>
                        </p>
                        <p class="attr-item py-1.5">
                            <span class="attr-name">Вес: </span>
                            <span class="attr-value">{{ card.weight }}</span>
                        </p>
                        <p class="attr-item py-1.5">
                            <span class="attr-name">Грудь: </span>
                            <span class="attr-value">{{ card.chest }}</span>
                        </p>
                        <p class="attr-item py-1.5">
                            <span class="attr-name">Волосы: </span>
                            <span class="attr-value">{{ card.hair }}</span>
                        </p>
                        <p class="attr-item py-1.5">
                            <span class="attr-name">Фигура: </span>
                            <span class="attr-value">{{ card.figure }}</span>
                        </p>
                    </div>
                    <!--
                    <p class="rating">
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                    </p>
                    -->
                </div>
            </div>
            <div>
                <p class="soc-icons-wr">
                    <phone-place :phone=card.phone>

                    </phone-place>
                </p>
            </div>
        </div>
    </article>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import PhonePlace from './PhonePlace.vue'

const { card } = defineProps(['card'])
</script>
