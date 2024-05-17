<script setup lang="ts">
defineProps<{
    date: string;
}>();
</script>

<template>
    <div class="day-separator">
        <div class="separator-line"></div>
        <div class="separator-date">{{ date }}</div>
        <div class="separator-line"></div>
    </div>
</template>

<style scoped>
.day-separator {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 16px;
    cursor: default;
}

.separator-line {
    display: flex;
    flex: 1;
    background-color: #3f4147;
    height: 1px;
    margin-left: 16px;
    margin-right: 16px;
}

.separator-date {
    color: #b0b4bb;
    font-size: 12px;
    font-weight: bold;
    margin-left: -10px;
    margin-right: -10px;
}
</style>
