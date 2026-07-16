<template>
  <li v-for="(item, index) in navigationItems" :key="index">
    <router-link :to="item.link">{{ item.label }}</router-link>
  </li>
  <CommonScrolltop />
</template>

<script setup>
import CommonScrolltop from "@/components/common/Scrolltop.vue";
import { ref } from "vue";
const navigationItems = ref([
  { label: "Our Story", link: "/blog" },
  { label: "Projects", link: "/projects" },
  { label: "Pricing", link: "/pricing" },
  { label: "Features", link: "/about" },
]);
</script>
