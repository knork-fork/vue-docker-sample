<script setup lang="ts">
import { ref, onMounted } from 'vue';

const textareaDefaultHeight = '44px';
const textareaRef = ref<HTMLTextAreaElement | null>(null);

onMounted(() => {
    if (textareaRef.value) {
        textareaRef.value.style.height = textareaDefaultHeight;
    }
});

function resizeTextarea(): void {
    if (textareaRef.value) {
        textareaRef.value.style.height = textareaDefaultHeight;
        textareaRef.value.style.height = `${textareaRef.value.scrollHeight}px`;
    }
}
</script>

<template>
    <textarea
        ref="textareaRef"
        placeholder="Message #general"
        @input="resizeTextarea()"
    />
</template>

<style scoped>
textarea {
    border: none;
    outline: none;
    color: white;
    font-size: 16px;
    width: 100%;
    height: 100%;
    resize: none;
    padding-top: 10px;
    padding-bottom: 10px;
    max-height: 500px;
}

textarea::placeholder {
    color: #696b74;
}
</style>
