<script setup lang="ts">
defineProps<{
    messageContent: string;
    messageAuthor: string;
    timestamp: string;
    showHeader: boolean;
}>();
</script>

<template>
    <div class="message-item">
        <div
            v-if="showHeader"
            class="message-header"
        >
            <span class="profile-picture" />
            <span class="author">{{ messageAuthor }}</span>
            <span class="header-timestamp">Today at {{ timestamp }}</span>
        </div>
        <span
            v-else
            class="message-timestamp"
            >{{ timestamp }}</span
        >
        <div class="message-body">
            {{ messageContent }}
        </div>
    </div>
</template>

<style scoped>
/*
gap between grouped messages: 2px
gap between ungrouped messages: 18px (2px + extra 16px from MessageSeparator)
*/

.message-item {
    display: flex;
    flex-direction: column;
    margin-bottom: 2px;
    margin-right: 16px;
}

.message-item:hover {
    background-color: #2e3035;
}

.message-header {
    display: flex;
    gap: 20px;
    justify-content: left;
    align-items: center;
}

.profile-picture {
    background-color: gray;
    width: 40px;
    min-width: 40px;
    height: 40px;
    min-height: 40px;
    border-radius: 20px;
    position: relative;
    margin-top: 0px;
    margin-left: 16px;
    margin-bottom: -25px;
    margin-right: -4px;
}

.author {
    font-weight: bold;
    color: white;
    font-size: 16px;
    padding-top: 5px;
}

.header-timestamp {
    color: #898a8b;
    font-size: 12px;
    padding-top: 4px;
}

.message-timestamp {
    position: relative;
    color: #9ea2a8;
    font-size: 10px;
    margin-top: 6px;
    margin-left: 32px;
    margin-bottom: -21px;
    display: none;
}

.message-item:hover .message-timestamp {
    display: block;
}

.message-body {
    font-size: 16px;
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 73px;
    color: white;
}
</style>
