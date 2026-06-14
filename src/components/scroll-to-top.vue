<template>
    <router-link to="#"  id="back-to-top" @click="scrollToTop" class="back-to-top rounded fs-5" :class="scroll ? 'd-block' : 'd-none'"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></router-link>
</template>

<script setup>

    import { onMounted, ref } from 'vue';

    const scroll = ref(false)

    const scrollToTop = () =>{
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    const handleScroll = () => {
        if (window.scrollY >= 50) {
            scroll.value = true
        } else {
            scroll.value = false
        }
    }

    onMounted(()=>{
		window.addEventListener('scroll', handleScroll);
	})
</script>
