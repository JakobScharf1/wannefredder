<template>
  <NavBar/>
  <router-view/>
  <FooterOne />
  <ScrollToTop/>
</template>

<script setup>
import NavBar from '@/components/main-navbar.vue';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';
</script>
