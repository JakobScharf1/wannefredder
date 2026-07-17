export const routes = [
  {
    path: "/",
    name: "Startseite",
    component: () => import("@/views/Startseite.vue"),
    meta: {
      title: "Startseite || PLACEHOLDER",
    }
  },
  {
    path: "/veranstaltungen",
    name: "Veranstaltungen",
    component: () => import("@/views/Veranstaltungen.vue"),
    meta: {
      title: "Veranstaltungen || PLACEHOLDER"
    }
  },
  {
    path: "/werbeanzeigen",
    name: "Werbeanzeigen",
    component: () => import("@/views/Werbeanzeigen.vue"),
    meta: {
      title: "Werbeanzeigen || PLACEHOLDER"
    }
  }
];
