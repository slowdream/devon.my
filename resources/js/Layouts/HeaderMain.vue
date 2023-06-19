<template>
    <header class="flex flex-row">
        <div class="basis-3/4" style="height: 100%">height: 100</div>
        <div class="basis-1/4 flex flex-col justify-between" style="height: 100%">
            <div>1</div>
            <div>
                <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                <DropdownLink :href="route('logout')" method="post" as="button">
                    Log Out
                </DropdownLink>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts">
import DropdownLink from '@/Components/DropdownLink.vue';
</script>

<style lang="scss" scoped>
header {
    background: linear-gradient(0deg, rgba(242, 39, 76, 0.58), rgba(242, 39, 76, 0.58)), #d9d9d9;
    > div {
        min-height: 275px;
    }
}
</style>
