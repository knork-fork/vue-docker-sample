<script setup lang="ts">
defineProps<{ folderName: string }>();
</script>

<template>
  <div class="folder-title">
    {{ folderName }}
  </div>
</template>

<style scoped>
.folder-title {
    cursor: default;
    display: flex;
    align-items: center;
    justify-content: left;
    padding-left: 15px;
    font-size: 14px;
    font-weight: bold;
    color: white;
    height:48px;
    box-shadow: 0px 1.5px 0px rgba(0, 0, 0, 0.25);
    margin-bottom: 10px;
}
</style>
