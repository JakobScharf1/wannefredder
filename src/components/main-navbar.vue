<template>
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <router-link class="logo" to="/">
                <span class="logo-light-mode">
                    <img :src="logoDark" class="l-dark" alt=""/>
                    <img :src="logoLight" class="l-light" alt=""/>
                </span>
                <img :src="logoLight" class="logo-dark-mode" alt=""/>
            </router-link>

            <div class="menu-extras">
                <div class="menu-item">
                    <router-link to="#" class="navbar-toggle" :class="toggle ? 'open' : ''" id="isToggle" @click="toggle = !toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </router-link>
                </div>
            </div>

            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item ps-1 mb-0">
                    <a href="https://wannefredder.sumupstore.com/" class="btn btn-sm btn-primary" target="_blank">Shop</a>
                </li>
            </ul>
    
            <div id="navigation" :style="{display : toggle ? 'block' : 'none'}">
                <ul class="navigation-menu nav-right nav-light">
                    <li :class="current === '/' ? 'active' : ''"><router-link to="/" class="sub-menu-item">Start</router-link></li>
            
                    <li :class="current === '/veranstaltungen' ? 'active' : ''"><router-link to="/veranstaltungen" class="sub-menu-item">Veranstaltungen</router-link></li>

                    <li :class="current === '/gewinnspiel' ? 'active' : ''"><router-link to="/gewinnspiel" class="sub-menu-item">Gewinnspiel</router-link></li>

                    <li :class="current === '/kontakt' ? 'active' : ''"><router-link to="/kontakt" class="sub-menu-item">Kontakt</router-link></li>

                    <li class="has-submenu parent-parent-menu-item" :class="['/galerie', '/radio', '/ausgaben', '/werbung', '/kleinanzeigen', 'abonnement', '/adventskalender'].includes(current) ? 'active' : ''">
                        <router-link to="#">Mehr</router-link><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/galerie', '/radio', '/ausgaben', '/werbung', '/kleinanzeigen', 'abonnement', '/adventskalender'].includes(submenu) ? 'open' : ''">
                            <li :class="current === '/galerie' ? 'active' : ''"><router-link to="/galerie" class="sub-menu-item"> Galerie</router-link></li>
                            <li :class="current === '/radio' ? 'active' : ''"><router-link to="/radio" class="sub-menu-item"> Radio</router-link></li>
                            <li :class="current === '/ausgaben' ? 'active' : ''"><router-link to="/ausgaben" class="sub-menu-item"> Ausgaben</router-link></li>
                            <li :class="current === '/werbung' ? 'active' : ''"><router-link to="/werbung" class="sub-menu-item"> Werbung</router-link></li>
                            <li :class="current === '/kleinanzeigen' ? 'active' : ''"><router-link to="/kleinanzeigen" class="sub-menu-item"> Kleinanzeigen</router-link></li>
                            <li :class="current === '/abonnement' ? 'active' : ''"><router-link to="/abonnement" class="sub-menu-item"> Abonnement</router-link></li>
                            <li :class="current === '/adventskalender' ? 'active' : ''"><router-link to="/adventskalender" class="sub-menu-item"> Adventskalender</router-link></li>
                        </ul>
                    </li>
            
                </ul>
            </div>
        </div>
    </header>
</template>

<script setup>
    import { onMounted, onUnmounted, ref } from 'vue';
    import { useRoute } from 'vue-router';
    import feather from 'feather-icons';
    import logoDark from '@/assets/images/logo-dark.png'
    import logoLight from '@/assets/images/logo-light.png'

    onMounted(()=>{
        feather.replace();
        window.scrollTo(0,0)
        window.addEventListener('scroll', handleScroll);
    })

    onUnmounted(() => {
        window.removeEventListener('scroll', handleScroll);
    });

    let route = useRoute();
    let current = ref(route.path)
    let toggle = ref(false);
    let submenu = ref('');

    const handleScroll = () => {
        const navbar = document.getElementById("topnav");
        if (window.scrollY >= 50) {
            navbar.classList.add("nav-sticky");
        } else {
            navbar.classList.remove("nav-sticky");
    }
}

</script>

