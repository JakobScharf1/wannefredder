<template>
  <!-- Social media links using map -->
  <a
    v-for="(socialMedia, index) in socialMediaLinks"
    :key="index"
    :href="socialMedia.href"
  >
    <i :class="socialMedia.iconClass"></i>
  </a>
</template>

<script setup>
const socialMediaLinks = [
  { id: 2, href: "#", iconClass: "uil uil-facebook-f" },
  { id: 4, href: "#", iconClass: "uil uil-instagram" },
];
</script>

<style scoped>
/* Add any additional styling here */
</style>
