<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
  setup() {
    const items = ref([
      { title: 'Click Me' },
      { title: 'Click Me' },
      { title: 'Click Me' },
      { title: 'Click Me 2' },
    ]);

    return { items };
  }
});
</script>


<template>
    <div class="menu-button">
        <!--
        TO-DO
        <v-menu>
          <template v-slot:activator="{ props }">
            <v-btn
              width="200px"
              color="secondary"
              v-bind="props"
              rounded="0"
            >
              MENU (to-do)
            </v-btn>
          </template>
          <v-list>
            <v-list-item
              v-for="(item, index) in items"
              :key="index"
              :value="index"
            >
              <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>
        -->
    </div>
</template>

<style scoped>
.menu-button {
    height:53px;
    min-height: 53px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>