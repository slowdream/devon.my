<template layout>
    <!-- Breadcrumbs -->
    <div class="container">
        <div class="wrapper-breadcrumbs">
            <div id="breadcrumbs">
                <Link
                    :href="route('main')"
                >
                    Каталог
                </Link>
                <i class="icon ion-android-arrow-forward separator" />
                <span class="breadcrumb-last">{{ card.data.name }}</span>
            </div>
            <nav class="profile-nav-link">
                <a
                    class="previus"
                    href="#"
                >
                    <i class="icon ion-ios-arrow-thin-left" />
                </a>
                <a
                    class="next"
                    href="#"
                >
                    <i class="icon ion-ios-arrow-thin-right" />
                </a>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Model Profile -->
    <div class="profile-entry container mb-10">
        <div class="profile-photos">
            <div class="row-sm">
                <div class="col-lg-6 profile-photos-container">
                    <img
                        v-for="photo in card.data.photos"
                        :key="photo.id"
                        :src="photo.original_url"
                        alt=""
                        class="main-photo"
                    >
                </div>
                <div class="col-lg-6 thumbnail-photo">
                    <div class="row-sm justify-content-center">
                        <div
                            v-for="photo in card.data.photos"
                            :key="photo.id"
                            class="col-6 col-md-4"
                        >
                            <img
                                :src="photo.original_url"
                                alt=""
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="col-md-9">
                <div class="profile-info">
                    <header class="profile-header">
                        <h2 class="profile-title">
                            {{ card.data.name }}
                        </h2>
                        <!--                            <p class="rating">
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                    </p>-->
                    </header>
                    <div class="model-attr">
                        <p class="attr-item">
                            <span class="attr-name">Рост: </span>
                            <span class="attr-value">{{ card.data.height }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Вес: </span>
                            <span class="attr-value">{{ card.data.weight }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Грудь: </span>
                            <span class="attr-value">{{ card.data.chest }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Волосы: </span>
                            <span class="attr-value">{{ card.data.hair }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Фигура: </span>
                            <span class="attr-value">{{ card.data.figure }}</span>
                        </p>
                    </div>
                    <div class="model-description">
                        {{ card.data.description }}
                    </div>
                </div>
            </section>
            <aside class="col-md-3">
                <PhonePlace :phone="card.data.phone" />
            </aside>
        </div>
    </div>
    <!-- End Model Profile -->
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import PhonePlace from '../../components/PhonePlace.vue'

const { card } = defineProps(['card'])
</script>
