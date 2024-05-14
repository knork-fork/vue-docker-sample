<script setup lang="ts">
import { ref } from 'vue';

const emojiCount = 77;
const emojisPerRow = 20;
const emojiPixelOffset = 24;
const emojiHoverPixelOffset = 28;

const defaultPosition = ref('0px 0px');
const hoverPosition = ref('0px 0px');

changeEmoji();

const backgroundPositionRef = ref(defaultPosition.value);

function changeEmoji(): void {
    const randomIndex = Math.floor(Math.random() * emojiCount);
    const row = Math.floor(randomIndex / emojisPerRow);
    const column = randomIndex % emojisPerRow;

    defaultPosition.value = `-${column * emojiPixelOffset}px -${row * emojiPixelOffset}px`;
    hoverPosition.value = `-${column * emojiHoverPixelOffset}px -${row * emojiHoverPixelOffset}px`;
}
</script>

<template>
    <div
        class="emoji-button"
        :style="{ backgroundPosition: backgroundPositionRef }"
        @mouseover="backgroundPositionRef = hoverPosition"
        @mouseleave="
            changeEmoji();
            backgroundPositionRef = defaultPosition;
        "
    ></div>
</template>

<style scoped>
.emoji-button {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 24px;
    width: 24px;
    filter: brightness(2);
    background-image: url('@/assets/emoji_atlas_greyscale.png');
    background-size: 480px 96px; /* scaled down from 960x192 */
    background-repeat: no-repeat;
}

.emoji-button:hover {
    filter: grayscale(0) brightness(1);
    background-image: url('@/assets/emoji_atlas.png');
    height: 28px;
    width: 28px;
    background-size: 560px 112px; /* scaled down from 960x192 */
}
</style>
