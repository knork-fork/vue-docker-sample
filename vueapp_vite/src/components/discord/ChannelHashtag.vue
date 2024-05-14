<script setup lang="ts">
</script>

<template>
  <div class="gg-hashtag" />
</template>

<style scoped>
.gg-hashtag {
    box-sizing: border-box;
    position: relative;
    display: block;
    transform: scale(var(--ggs,1)) skew(-10deg, 0deg);
    width: 8px;
    height: 16px;
    border-left: 2px solid;
    border-right: 2px solid;
    color: #7f848d;
}
.gg-hashtag::before {
    content: "";
    display: block;
    box-sizing: border-box;
    position: absolute;
    width: 16px;
    height: 8px;
    border-top: 2px solid;
    border-bottom: 2px solid;
    left: -6px;
    top: 4px;
}
</style>