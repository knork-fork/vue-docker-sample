<template>
  <div class="attach-file-button"></div>
</template>

<style scoped>
.attach-file-button {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 22px;
    width: 22px;
    background-color: #b4bac0;
    border-radius: 11px;
    position: relative;
}

.attach-file-button:hover {
    background-color: #dadee1;
}

.attach-file-button::before,
.attach-file-button::after {
    content: '';
    position: absolute;
    background-color: #373a40;
}

.attach-file-button::before {
    height: 12px;
    width: 2px;
}

.attach-file-button::after {
    width: 12px;
    height: 2px;
}
</style>