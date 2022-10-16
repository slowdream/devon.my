<script setup>
import AppLayout from '../Layouts/AppLayout.vue'</script>

<template>
    <AppLayout>
        <!-- Hero -->
        <section class="hero over-header"
                 style="background-image: url('resources/assets/img/placeholder/placeholder_1920x1200.jpg')">
            <div class="container">
                <div class="over-header-inner">
                    <h1 class="title">Find Perfect Model</h1>
                    <form class="searh-model">
						<span class="select-item">
							<select id="height" class="selectpicker" name="height">
								<option value="0">Height</option>
								<option value="150">150</option>
								<option value="155">155</option>
								<option value="160">160</option>
							</select>
						</span>
                        <span class="select-item">
							<select id="waist" class="selectpicker" name="waist">
								<option value="0">Waist</option>
								<option value="50">50</option>
								<option value="55">55</option>
								<option value="60">60</option>
							</select>
						</span>
                        <span class="select-item">
							<select id="bust" class="selectpicker" name="bust">
								<option value="0">Bust</option>
								<option value="45">45</option>
								<option value="50">50</option>
								<option value="55">55</option>
							</select>
						</span>
                        <span class="select-item">
							<select id="age" class="selectpicker" name="age">
								<option value="0">Age</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</span>
                        <span class="select-item">
							<select id="hair" class="selectpicker" name="hair">
								<option value="hair">Hair</option>
								<option value="blonde">Blonde</option>
								<option value="black">Black</option>
								<option value="brown">Brown</option>
							</select>
						</span>
                        <span class="select-item">
							<select id="eyes" class="selectpicker" name="age">
								<option value="0">Eyes</option>
								<option value="blue">Blue</option>
								<option value="green">Green</option>
								<option value="brown">Brown</option>
							</select>
						</span>
                        <input class="submit" type="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
        <!-- End Hero -->
        <!-- Categories List -->
        <section class="container categories bigger">
            <h2 class="section-title lines">Categories</h2>
            <div class="row categories-wr">
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a class="category-models-item" href="07_Models_Load_More_Alternative.html"
                       style="background-image: url('assets/img/placeholder/placeholder_400x350.jpg')">
                        <footer class="categories-item-footer">
                            <p class="category">Woman</p>
                            <p class="models-count">5 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a class="category-models-item" href="07_Models_Load_More_Alternative.html"
                       style="background-image: url('assets/img/placeholder/placeholder_400x350.jpg')">
                        <footer class="categories-item-footer">
                            <p class="category">Trending</p>
                            <p class="models-count">11 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a class="category-models-item" href="07_Models_Load_More_Alternative.html"
                       style="background-image: url('assets/img/placeholder/placeholder_400x350.jpg')">
                        <footer class="categories-item-footer">
                            <p class="category">With Video</p>
                            <p class="models-count">4 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a class="category-models-item" href="07_Models_Load_More_Alternative.html"
                       style="background-image: url('assets/img/placeholder/placeholder_400x350.jpg')">
                        <footer class="categories-item-footer">
                            <p class="category">Blue Eyes</p>
                            <p class="models-count">7 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a class="category-models-item" href="07_Models_Load_More_Alternative.html"
                       style="background-image: url('assets/img/placeholder/placeholder_400x350.jpg')">
                        <footer class="categories-item-footer">
                            <p class="category">Blonde</p>
                            <p class="models-count">9 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a class="category-models-item" href="07_Models_Load_More_Alternative.html"
                       style="background-image: url('assets/img/placeholder/placeholder_400x350.jpg')">
                        <footer class="categories-item-footer">
                            <p class="category">European</p>
                            <p class="models-count">14 models</p>
                        </footer>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Categories List -->
        <!-- Review -->
        <div class="container-fluid full-screen-quote">
            <div class="row">
                <div class="col-md-6">
                    <div class="full-screen-quote-text">
                        <p class="quotes">“</p>
                        <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean
                            sollicitudin, lorem quis bibendum auctor, nisi elit conse quat ipsum, nec sagittis sem nibh
                            id elit duis sed.
                        </p>
                        <address class="author">Jena Stain</address>
                    </div>
                </div>
                <div class="col-md-6 author-img-wr">
                    <img alt="" class="author-img" src="assets/img/placeholder/placeholder_900x500.jpg">
                </div>
            </div>
        </div>
        <!-- End Review -->
        <!-- Popular Models List -->
        <section class="container popular-models model-row-wrap">
            <h2 class="section-title lines">Popular Models</h2>
            <article class="model-row">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-2 offset-xl-0">
                        <a class="img-wr" href="05_Model_Profile.html">
                            <img alt="" src="assets/img/placeholder/placeholder_400x350.jpg">
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <div class="row-model-info">
                            <h3 class="title">
                                <a href="05_Model_Profile.html">Alexis Rane</a>
                            </h3>
                            <div class="model-attr">
                                <p class="attr-item">
                                    <span class="attr-name">Height:</span>
                                    <span class="attr-value">185</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Bust:</span>
                                    <span class="attr-value">85</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Waist:</span>
                                    <span class="attr-value">60</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Age:</span>
                                    <span class="attr-value">17</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Heir:</span>
                                    <span class="attr-value">Red</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Eyes:</span>
                                    <span class="attr-value">Blue</span>
                                </p>
                            </div>
                            <p class="rating">
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr">
                            <a class="soc-icon" href="#"><i aria-hidden="true" class="fa fa-instagram"></i></a>
                            <a class="soc-icon" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                        </p>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr big">
                            <a class="soc-icon" href="#"><i class="icon ion-android-favorite"></i></a>
                            <a class="soc-icon" href="#"><i class="icon ion-ios-email-outline"></i></a>
                        </p>
                    </div>
                </div>
            </article>
            <article class="model-row">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-2 offset-xl-0">
                        <a class="img-wr" href="05_Model_Profile.html">
                            <img alt="" src="assets/img/placeholder/placeholder_400x350.jpg">
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <div class="row-model-info">
                            <h3 class="title">
                                <a href="05_Model_Profile.html">Alexis Rane</a>
                            </h3>
                            <div class="model-attr">
                                <p class="attr-item">
                                    <span class="attr-name">Height:</span>
                                    <span class="attr-value">185</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Bust:</span>
                                    <span class="attr-value">85</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Waist:</span>
                                    <span class="attr-value">60</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Age:</span>
                                    <span class="attr-value">17</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Heir:</span>
                                    <span class="attr-value">Red</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Eyes:</span>
                                    <span class="attr-value">Blue</span>
                                </p>
                            </div>
                            <p class="rating">
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr">
                            <a class="soc-icon" href="#"><i aria-hidden="true" class="fa fa-instagram"></i></a>
                            <a class="soc-icon" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                            <a class="soc-icon" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                        </p>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr big">
                            <a class="soc-icon" href="#"><i class="icon ion-android-favorite"></i></a>
                            <a class="soc-icon" href="#"><i class="icon ion-ios-email-outline"></i></a>
                        </p>
                    </div>
                </div>
            </article>
            <article class="model-row">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-2 offset-xl-0">
                        <a class="img-wr" href="05_Model_Profile.html">
                            <img alt="" src="assets/img/placeholder/placeholder_400x350.jpg">
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <div class="row-model-info">
                            <h3 class="title">
                                <a href="05_Model_Profile.html">Alexis Rane</a>
                            </h3>
                            <div class="model-attr">
                                <p class="attr-item">
                                    <span class="attr-name">Height:</span>
                                    <span class="attr-value">185</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Bust:</span>
                                    <span class="attr-value">85</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Waist:</span>
                                    <span class="attr-value">60</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Age:</span>
                                    <span class="attr-value">17</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Heir:</span>
                                    <span class="attr-value">Red</span>
                                </p>
                                <p class="attr-item">
                                    <span class="attr-name">Eyes:</span>
                                    <span class="attr-value">Blue</span>
                                </p>
                            </div>
                            <p class="rating">
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                                <i aria-hidden="true" class="fa fa-star active"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr">
                            <a class="soc-icon" href="#"><i aria-hidden="true" class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr big">
                            <a class="soc-icon" href="#"><i class="icon ion-android-favorite"></i></a>
                            <a class="soc-icon" href="#"><i class="icon ion-ios-email-outline"></i></a>
                        </p>
                    </div>
                </div>
            </article>
        </section>
        <!-- End Popular Models List -->
        <!-- Last Post List -->
        <section class="container last-posts small">
            <h2 class="section-title lines">Journal</h2>
            <div class="row justify-content-center">
                <article class="col-md-6 col-lg-4 last-post-wr">
                    <a class="post-item no-decoration" href="13_Blog_Open_Widget.html">
                        <figure class="post-image"
                                style="background-image: url('assets/img/placeholder/placeholder_700x600.jpg')">
                            <div class="info">
                                <p class="post-btn">View post</p>
                                <p class="post-publish">
                                    <span class="publish-date">Dec 25, 2017</span>
                                    <span class="separator">·</span>
                                    <span class="publish-time">1 Minute</span>
                                </p>
                            </div>
                        </figure>
                        <footer class="post-footer">
                            <p class="post-category">Agency</p>
                            <h3 class="post-title">Perfect Fashion Show</h3>
                        </footer>
                    </a>
                </article>
                <article class="col-md-6 col-lg-4 last-post-wr">
                    <a class="post-item no-decoration" href="13_Blog_Open_Widget.html">
                        <figure class="post-image"
                                style="background-image: url('assets/img/placeholder/placeholder_700x600.jpg')">
                            <div class="info">
                                <p class="post-btn">View post</p>
                                <p class="post-publish">
                                    <span class="publish-date">Dec 25, 2017</span>
                                    <span class="separator">·</span>
                                    <span class="publish-time">1 Minute</span>
                                </p>
                            </div>
                        </figure>
                        <footer class="post-footer">
                            <p class="post-category">Ashion</p>
                            <h3 class="post-title">Changing Style WIth Makeup</h3>
                        </footer>
                    </a>
                </article>
                <article class="col-md-6 col-lg-4 last-post-wr">
                    <a class="post-item no-decoration" href="13_Blog_Open_Widget.html">
                        <figure class="post-image"
                                style="background-image: url('assets/img/placeholder/placeholder_700x600.jpg')">
                            <div class="info">
                                <p class="post-btn">View post</p>
                                <p class="post-publish">
                                    <span class="publish-date">Dec 25, 2017</span>
                                    <span class="separator">·</span>
                                    <span class="publish-time">1 Minute</span>
                                </p>
                            </div>
                        </figure>
                        <footer class="post-footer">
                            <p class="post-category">Agency</p>
                            <h3 class="post-title">Perfect Fashion Show</h3>
                        </footer>
                    </a>
                </article>
            </div>
        </section>
        <!-- End Last Post List -->
    </AppLayout>
</template>
