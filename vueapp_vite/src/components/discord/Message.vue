<script setup lang="ts">
defineProps<{ 
    messageContent: string,
    messageAuthor: string,
    timestamp: string,
    showHeader: boolean
}>();
</script>

<template>
    <div class="message-item">
        <div v-if="showHeader" class="message-header">
            <span class="profile-picture"></span>
            <span class="author">{{ messageAuthor }}</span>
            <span class="header-timestamp">Today at {{ timestamp }}</span>
        </div>
        <span v-else class="message-timestamp">{{ timestamp }}</span>
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
    margin-right:16px;
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
    height: 40px;
    border-radius: 20px;
    position:absolute;
    margin-top: 25px;
    margin-left: 16px;
}

.author {
    font-weight: bold; /* Bold for author name */
    padding-left: 73px;
    color: white;
    font-size: 16px;
}

.header-timestamp {
    opacity: 0.75; /* Slightly faded for less emphasis */
    color: #9ea2a8;
    font-size: 12px;
}

.message-timestamp {
    position:absolute;
    color: #9ea2a8;
    font-size: 10px;
    margin-top: 6px;
    margin-left: 32px;
    display: none;
}

.message-item:hover .message-timestamp {
    display: block;
}

.message-body {
    font-size: 16px; /* Larger font size for message content */
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 73px;
    color: white;
}
</style>
