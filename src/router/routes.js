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
  },
  {
    path: "/abo",
    name: "Abonnement",
    component: () => import("@/views/Abonnement.vue"),
    meta: {
      title: "Abonnement || PLACEHOLDER"
    }
  },
  {
    path: "/unterstuetzen",
    name: "Unterstützen",
    component: () => import("@/views/Unterstuetzen.vue"),
    meta: {
      title: "Unterstützen || PLACEHOLDER"
    }
  },
  {
    path: "/mitmachen",
    name: "Mitmachen",
    component: () => import("@/views/Mitmachen.vue"),
    meta: {
      title: "Mitmachen || PLACEHOLDER"
    }
  },
  {
    path: "/foerdern",
    name: "Fördern",
    component: () => import("@/views/Foerdern.vue"),
    meta: {
      title: "Fördern || PLACEHOLDER"
    }
  }
];
