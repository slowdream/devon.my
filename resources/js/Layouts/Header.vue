<script setup>
import { Link } from '@inertiajs/inertia-vue3'</script>

<template>
    <header class="header transparent">
        <div class="container">
            <div class="header-inner">
                <a class="site-logo" href="01_Home.html">
                    <h1 class="site-logo-title">Devon</h1>
                    <h1 class="site-logo-text">model agency</h1>
                </a>
                <div class="navigation-wr">
                    <nav class="navigation">
                        <ul>
                            <li class="menu-item-has-children current-menu-parent">
                                <a href="#">Home</a>
                                <span class="sub-menu-toggle"></span>
                                <ul class="sub-menu">
                                    <li><a href="01_Home.html">Dark with carousel</a></li>
                                    <li class="current-menu-item"><a href="03_Home.html">Dark with find model</a></li>
                                    <li><a href="04_Home.html">White version</a></li>
                                    <li><a href="25_Search_By_Geo_Map.html">Geo maps regions</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Models</a>
                                <span class="sub-menu-toggle"></span>
                                <ul class="sub-menu">
                                    <li><a href="06_Models_Load_More.html">Side version (load more)</a></li>
                                    <li><a href="07_Models_Load_More_Alternative.html">Side version (load more) Alt</a>
                                    </li>
                                    <li><a href="09_Models_Map_View.html">Side version (pagination)</a></li>
                                    <li><a href="10_Models_Map_Big.html">Side version (pagination) Alt</a></li>
                                    <li><a href="08_Models_List.html">List version</a></li>
                                    <li><a href="23_Full_Screen_Map_Search.html">Map search</a></li>
                                    <li><a href="24_Alternative_Search_View.html">Map search Alt</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">About</a>
                                <span class="sub-menu-toggle"></span>
                                <ul class="sub-menu">
                                    <li><a href="19_About_Us.html">About us</a></li>
                                    <li><a href="15_Contact.html">Contact us</a></li>
                                    <li><a href="16_Contact.html">Contact us Alt</a></li>
                                    <li><a href="18_Pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <span class="sub-menu-toggle"></span>
                                <ul class="sub-menu">
                                    <li><a href="05_Model_Profile.html">Model Profiles</a></li>
                                    <li><a href="12_Blog_Grid.html">Blog Grid</a></li>
                                    <li><a href="13_Blog_Grid_Alternative.html">Blog Grid Alternative</a></li>
                                    <li><a href="12_Blog_Grid_Standart.html">Blog Grid Standart</a></li>
                                    <li><a href="12_Blog_Standart.html">Blog Standart</a></li>
                                    <li><a href="14_Blog_Open.html">Blog open</a></li>
                                    <li><a href="17_FAQ.html">FAQ</a></li>
                                    <li><a href="20_Log_In.html">Sign In</a></li>
                                    <li><a href="21_Sign_In.html">Register</a></li>
                                    <li><a href="26_Search_By_Geo_Map_Full_Screen.html">Geo map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="right-sec-nav d-flex align-items-center">
                        <form class="search-wr">
                            <input id="search" name="search" type="text">
                            <i class="icon ion-ios-search"></i>
                            <input class="submit" type="submit" value="">
                        </form>
                        <Link :href="route('login')" class="login d-flex align-items-center">
                            Log in <i class="icon ion-ios-person-outline"></i>
                        </Link>
                        <div class="lang-menu-wr">
                            <button class="btn lang-toggle">
                                <span>EN</span>
                                <i class="icon ion-ios-arrow-down"></i>
                            </button>
                            <ul class="lang-menu">
                                <li><a href="#">EN</a></li>
                                <li><a href="#">HR</a></li>
                                <li><a href="03_Home_rtl.html">AR</a></li>
                            </ul>
                        </div>
                    </div>
                    <i aria-hidden="true" class="fa fa-times"></i>
                </div>
                <i aria-hidden="true" class="fa fa-bars"></i>
            </div>
        </div>
    </header>
</template>

<style scoped>

</style>
