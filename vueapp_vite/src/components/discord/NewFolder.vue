<script setup lang="ts">
</script>

<template>
    <div class="folder-new">
    </div>
</template>

<style scoped>
.folder-new {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 25px;
    transition: border-radius 0.2s;
    margin: 10px;
    margin-bottom: 5px;
    width: 50px;
    height: 50px;
    background-color: #303338;
    position: relative;
}

.folder-new::before,
.folder-new::after {
    content: '';
    position: absolute;
    background-color: #00a55f;
}

.folder-new::before {
    height: 16px; /* Height of the vertical bar */
    width: 2px; /* Width of the vertical bar */
}

.folder-new::after {
    width: 16px; /* Width of the horizontal bar */
    height: 2px; /* Height of the horizontal bar */
}

.folder-new:hover {
    background-color: #00a55f;
    border-radius: 18px;
    transition: border-radius 0.2s;
}

.folder-new:hover::before,
.folder-new:hover::after {
    background-color: white;
}

</style>
