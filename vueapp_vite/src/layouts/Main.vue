<template>
    <v-layout>
      <alerts />
      <v-main
        class="main"
      >
        <router-view />
      </v-main>
    </v-layout>
</template>

<script setup lang="ts">
</script>

<style>
/* This ensures that the main layout fills the height and width of the viewport */
html, body, #app, .v-application--wrap {
  height: 100%;
  width: 100%;
  margin: 0;
  overflow: hidden !important;
}

.v-layout {
  height: 100%;
}
</style>