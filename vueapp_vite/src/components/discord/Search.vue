<template>
    <!--
        TO-DO
    <v-card
        width="200px"
    >
      <v-card-text>
        <v-text-field
          :loading="loading"
          append-inner-icon="mdi-magnify"
          density="compact"
          label="Search"
          variant="solo"
          hide-details
          single-line
          @click:append-inner="onClick"
        ></v-text-field>
      </v-card-text>
    </v-card>-->
  </template>
  <script>
    export default {
      data: () => ({
        loaded: false,
        loading: false,
      }),
  
      methods: {
        onClick () {
          this.loading = true
  
          setTimeout(() => {
            this.loading = false
            this.loaded = true
          }, 2000)
        },
      },
    }
  </script>