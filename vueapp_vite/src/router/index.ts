import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";
import MainLayout from "../layouts/Main.vue";

const routes: RouteRecordRaw[] = [
  {
    path: "/",
    component: MainLayout,
    children: [
      {
        path: "example",
        name: "example route",
        component: () => import("../views/ExampleView.vue"),
        meta: {
          title: "example route"
        }
      },
      {
        path: "example/:id",
        name: "example route with id",
        component: () => import("../views/ExampleIdView.vue"),
        meta: {
          title: "example route with some id"
        }
      },
      {
        path: "example_api",
        name: "example api",
        component: () => import("../views/ExampleApiView.vue")
      },
      {
        path: "discord",
        name: "copy of discord layout",
        component: () => import("../views/DiscordView.vue")
      },
      {
        path: "/:pathMatch(.*)*",
        name: "NotFound",
        component: () => import("../views/NotFound.vue")
      }
    ]
  }
];

const router = createRouter({
  routes,
  history: createWebHistory(import.meta.env.BASE_URL),
  linkExactActiveClass: "nav-item active"
});

export default router;