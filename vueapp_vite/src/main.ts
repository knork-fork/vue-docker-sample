import { createApp } from 'vue';
import './style.css';
import App from './App.vue';
import vuetify from "./plugins/vuetify";
import 'vuetify/styles';

const app = createApp(App);

app.use(vuetify);

app.mount("#app");