<script setup lang="ts">
import AttachFileButton from '@/components/discord/buttons/AttachFileButton.vue';
import EmojiButton from '@/components/discord/buttons/EmojiButton.vue';
import MessageInputTextarea from '@/components/discord/inputs/MessageInputTextarea.vue';
</script>

<template>
    <div class="message-input-ribbon">
        <div class="message-input">
            <div class="input-file">
                <AttachFileButton />
            </div>
            <div class="input-text">
                <MessageInputTextarea />
            </div>
            <div class="input-emoji">
                <EmojiButton />
            </div>
        </div>
    </div>
</template>

<style scoped>
.message-input-ribbon {
    display: flex;
    align-items: top;
    justify-content: center;
    min-height: 66px;
    flex-shrink: 0;
}

.message-input {
    display: flex;
    align-items: top;
    justify-content: center;
    background-color: #373a40;
    min-height: 44px;
    width: 100%;
    margin-left: 16px;
    margin-right: 16px;
    margin-bottom: 24px;
    border-radius: 8px;
}

.input-file {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    min-width: 56px;
    height: 44px;
}

.input-text {
    display: flex;
    align-items: top;
    justify-content: left;
    flex-grow: 1;
    min-height: 44px;
}

.input-emoji {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    min-width: 56px;
    height: 44px;
}
</style>
