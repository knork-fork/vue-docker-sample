<script setup lang="ts">
defineProps<{ 
    folderName: string,
    selected: boolean
}>()
</script>

<template>
  <div :class="['folder-item', { 'folder-item-selected': selected }]">
    {{ folderName }}
  </div>
</template>

<style scoped>
.folder-item {
    cursor: pointer;
    display: flex;
    border-radius: 25px;
    transition: border-radius 0.2s;
    margin: auto;
    margin-bottom: 10px;
    width: 50px;
    height: 50px;
    background-color: #313338;
    /* remove this after adding the icon ? */
    color: gainsboro;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: bold;

}

.folder-item-selected {
    background-color: #5267eb;
    border-radius: 18px;
}

.folder-item:hover {
    background-color: #5267eb;
    border-radius: 18px;
    transition: border-radius 0.2s;
}
</style>