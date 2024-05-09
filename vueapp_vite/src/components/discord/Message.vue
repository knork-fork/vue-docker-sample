<script setup lang="ts">
defineProps<{ messageContent: string }>();
</script>

<template>
    <div class="message-item">
        <div class="message-header">
            <span class="author">User123</span>
            <span class="timestamp">12:00 PM</span>
        </div>
        <div class="message-body">
            {{ messageContent }}
        </div>
    </div>
</template>

<style scoped>
.message-item {
    display: flex;
    flex-direction: column;
    margin-bottom: 5px; /* Spacing between messages */
    /*background-color: #f4f4f8;*/ /* Light background for the message */
    padding: 8px; /* Padding around the content */
}

.message-header {
    display: flex;
    justify-content: space-between;
    font-size: 12px; /* Smaller font size for metadata */
    color: #666; /* Grey color for metadata */
    margin-bottom: 5px; /* Space between header and body */
}

.author {
    font-weight: bold; /* Bold for author name */
}

.timestamp {
    opacity: 0.75; /* Slightly faded for less emphasis */
}

.message-body {
    font-size: 14px; /* Larger font size for message content */
}
</style>
