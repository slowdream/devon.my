<script setup>
import PersonalHorizontal from '@/views/components/PersonalHorizontal.vue'
import Pagination from '@/views/components/Pagination.vue'

const { items } = defineProps(['items'])
</script>

<template layout>
    <!-- Models List -->
    <div class="container-fluid sort-models-wrapper models-list columns columns-list">
        <div class="row">
            <div class="col-lg-12 col-xl-12 models-list-inner content-wrapper">
                <div class="sort-models-header">
                    <header>
                        <div class="filters">
                            <a class="filter-item" href="#">Top rated</a>
                            <a class="filter-item" href="#">Most View</a>
                            <a class="filter-item" href="#">Newest</a>
                        </div>
                        <p class="filter-label">Filters<i aria-hidden="true" class="fa fa-filter"></i></p>
                    </header>
                    <form id="filter-models">
                        <div class="filter-models-inner">
                            <div class="sort-column">
                                <p class="title">Height</p>
                                <div class="sort-properties">
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="height[]" type="checkbox" value="up to 170">
                                            <span>Up to 170 cm</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="height[]" type="checkbox" value="171-180">
                                            <span>171 - 180 cm</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="height[]" type="checkbox" value="181-190">
                                            <span>181 - 190 cm</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="height[]" type="checkbox" value="above 191">
                                            <span>Above 191 cm</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="sort-column">
                                <p class="title">Waist</p>
                                <div class="sort-properties">
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="waist[]" type="checkbox" value="up to 60">
                                            <span>Up to 60 cm</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="waist[]" type="checkbox" value="61-65">
                                            <span>61 - 65 cm</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="waist[]" type="checkbox" value="66-70">
                                            <span>66 - 70 cm</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="waist[]" type="checkbox" value="above 71">
                                            <span>Above 71 cm</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="sort-column">
                                <p class="title">Bust</p>
                                <div class="sort-properties">
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="bust" type="checkbox" value="a">
                                            <span>A</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="bust" type="checkbox" value="b">
                                            <span>B</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="bust" type="checkbox" value="c">
                                            <span>C</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="bust" type="checkbox" value="d">
                                            <span>D</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="sort-column">
                                <p class="title">Age</p>
                                <div class="sort-properties">
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="age[]" type="checkbox" value="under 18">
                                            <span>Under 18 years</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="age[]" type="checkbox" value="18-20">
                                            <span>18 - 20 years old</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="age[]" type="checkbox" value="21-24">
                                            <span>21 - 24 years old</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="age[]" type="checkbox" value="over 25">
                                            <span>25 years and over</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="sort-column">
                                <p class="title">Hair</p>
                                <div class="sort-properties">
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="hair" type="checkbox" value="blonde">
                                            <span>Blonde</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="hair" type="checkbox" value="brunette">
                                            <span>Brunette</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="hair" type="checkbox" value="brown-haired">
                                            <span>Brown-haired</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="hair" type="checkbox" value="natural">
                                            <span>Natural</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="sort-column">
                                <p class="title">Eyes</p>
                                <div class="sort-properties">
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="eyes" type="checkbox" value="green">
                                            <span>Green</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="eyes" type="checkbox" value="blue">
                                            <span>Blue</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="eyes" type="checkbox" value="brown">
                                            <span>Brown</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="eyes" type="checkbox" value="other">
                                            <span>Other</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="sort-column">
                                <p class="title">Rating</p>
                                <div class="sort-properties rating">
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="rating" type="checkbox" value="2">
                                            <span>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star"></i>
													<i aria-hidden="true" class="fa fa-star"></i>
													<i aria-hidden="true" class="fa fa-star"></i>
												</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="rating" type="checkbox" value="3">
                                            <span>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star"></i>
													<i aria-hidden="true" class="fa fa-star"></i>
												</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="rating" type="checkbox" value="4">
                                            <span>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star"></i>
												</span>
                                        </label>
                                    </p>
                                    <p class="sort-property-item-wr">
                                        <label class="sort-property-item">
                                            <input name="rating" type="checkbox" value="5">
                                            <span>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
													<i aria-hidden="true" class="fa fa-star active"></i>
												</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="model-row-wrap flex flex-wrap flex-start">
                    <div
                        v-for="card in items.data"
                        :key="card.id"
                        class="basis-1/4 py-5 px-5"
                        style=""
                    >
                        <PersonalHorizontal :card="card"/>
                    </div>
                </div>
                <Pagination :meta="items.meta"/>
            </div>
            <!--            <div class="col-lg-6 col-xl-4 map-wrapper">-->
            <!--                <div id="map" class="models-load-map"></div>-->
            <!--            </div>-->
        </div>
    </div>
    <!-- End Models List -->
</template>
