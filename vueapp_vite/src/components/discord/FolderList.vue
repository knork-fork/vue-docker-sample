<script setup lang="ts">
import Folder from '@/components/discord/Folder.vue';
import NewFolder from '@/components/discord/NewFolder.vue';
</script>

<template>
  <div>
    <!-- TODO: this should be a new component, not just a folder -->
    <Folder folder-name="🤠" style="margin-top:10px;font-size:24px;" :selected="false" />
    <hr class="folder-list-hr" />
    <Folder folder-name="fld1" :selected="true" />
    <Folder folder-name="fld2" :selected="false" />
    <Folder folder-name="fld3" :selected="false" />
    <hr class="folder-list-hr" />
    <NewFolder />
    <!-- TODO: this should be a new component, not just a folder -->
    <Folder folder-name="🌎" style="font-size:24px;" :selected="false" />
  </div>
</template>

<style scoped>
.folder-list-hr {
    border: 1px solid #313338;
    margin: 10px;
}
</style>
