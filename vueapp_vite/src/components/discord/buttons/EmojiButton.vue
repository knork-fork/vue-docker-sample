<script lang="ts">
import { defineComponent, ref } from 'vue';
import { emojiList } from '@/preloadEmojis';

export default defineComponent({
    setup() {
        const currentEmoji = ref<string>(Object.keys(emojiList)[0]);

        function changeEmoji() {
            let randomIndex;
            let newEmoji;
            const keys = Object.keys(emojiList);

            do {
                randomIndex = Math.floor(Math.random() * keys.length);
                newEmoji = keys[randomIndex];
            } while (newEmoji === currentEmoji.value);

            currentEmoji.value = newEmoji;
        }

        return {
            currentEmoji,
            changeEmoji
        };
  }
});
</script>

<template>
  <div class="emoji-button" @mouseover="changeEmoji">
    <i :class="['em', currentEmoji]" aria-role="presentation" :aria-label="currentEmoji.toUpperCase()" />
  </div>
</template>

<style scoped>
.emoji-button {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 22px;
    width: 22px;
    font-size: 22px;
    /*background-color: #b4bac0;*/
    border-radius: 11px;
    filter:grayscale(1);
}

.emoji-button:hover {
    /*background-color: #dadee1;*/
    filter:grayscale(0);
    font-size: 26px;
    height: 26px;
    width: 26px;
    transition: height 0.2s, width 0.2s, font-size 0.2s;
}
</style>