import { createRouter, createWebHistory } from 'vue-router'
import 'bootstrap/dist/css/bootstrap.min.css'
import '@/assets/scss/style.scss'
import '@mdi/font/css/materialdesignicons.min.css';
import HomePage from '@/pages/home-page.vue';
import Aboutus from '@/pages/inner-page/about-us.vue';
import ServicesPage from '@/pages/inner-page/services-page.vue';
import ServiceDetail from '@/pages/inner-page/service-detail.vue';
import PricingPage from '@/pages/inner-page/pricing-page.vue';
import TeamPage from '@/pages/inner-page/team-page.vue';
import TestimonialPage from '@/pages/inner-page/testimonial-page.vue';
import FaqsPage from '@/pages/inner-page/faqs-page.vue';
import LoginPage from '@/pages/auth/login-page.vue';
import SignupPage from '@/pages/auth/signup-page.vue';
import ResetPassword from '@/pages/auth/reset-password.vue';
import LockScreen from '@/pages/auth/lock-screen.vue';
import TermsPage from '@/pages/utility/terms-page.vue';
import PrivacyPage from '@/pages/utility/privacy-page.vue';
import ComingsoonPage from '@/pages/special/comingsoon-page.vue';
import MaintenancePage from '@/pages/special/maintenance-page.vue';
import ErrorPage from '@/pages/special/error-page.vue';
import ContactUs from '@/pages/inner-page/contact-us.vue';

const routes = [
  { path: '/', name: 'home', component: HomePage},
  { path: '/veranstaltungen', name: 'veranstaltungen', component: () => import('@/pages/veranstaltungen.vue')},
  { path: '/adventskalender', name: 'adventskalender', component: () => import('@/pages/adventskalender.vue') },
  { path: '/ausgaben', name: 'ausgaben', component: () => import('@/pages/ausgaben.vue') },
  { path: '/kontakt', name: 'kontakt', component: () => import('@/pages/kontakt.vue') },
  { path: '/galerie', name: 'galerie', component: () => import('@/pages/galerie.vue') },
  { path: '/radio', name: 'radio', component: () => import('@/pages/radio.vue') },
  { path: '/werbung', name: 'werbung', component: () => import('@/pages/werbung.vue') },
  { path: '/kleinanzeigen', name: 'kleinanzeigen', component: () => import('@/pages/kleinanzeigen.vue') },
  { path: '/abonnement', name: 'abonnement', component: () => import('@/pages/abonnement.vue') },

  { path: '/aboutus', name: 'aboutus', component:Aboutus},
  { path: '/services', name: 'services', component:ServicesPage},
  { path: '/service-detail', name: 'service-detail', component:ServiceDetail},
  { path: '/pricing', name: 'pricing', component:PricingPage},
  { path: '/team', name: 'team', component:TeamPage},
  { path: '/testimonial', name: 'testimonial', component:TestimonialPage},
  { path: '/faqs', name: 'faqs', component:FaqsPage},
  { path: '/login', name: 'login', component:LoginPage},
  { path: '/signup', name: 'signup', component:SignupPage},
  { path: '/reset-password', name: 'reset-password', component:ResetPassword},
  { path: '/lock-screen', name: 'lock-screen', component:LockScreen},
  { path: '/terms', name: 'terms', component:TermsPage},
  { path: '/privacy', name: 'privacy', component:PrivacyPage},
  { path: '/comingsoon', name: 'comingsoon', component:ComingsoonPage},
  { path: '/maintenance', name: 'maintenance', component:MaintenancePage},
  { path: '/error', name: 'error', component:ErrorPage},
  { path: '/contactus', name: 'contactus', component:ContactUs},
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
