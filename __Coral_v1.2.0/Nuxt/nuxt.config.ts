// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  css : [
    'bootstrap/dist/css/bootstrap.min.css',
    '~/assets/scss/style.scss',
    '@mdi/font/css/materialdesignicons.min.css'
  ],
   app:{
    head:{
      titleTemplate:'Coral - Nuxt Js Multipurpose Landing Template',

      script: [
        {
          src: 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
          tagPosition: 'bodyClose'
        }
      ],
      link: [
        {
          rel: 'stylesheet',
          href: 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css',
        },
      ],
    }
  },
})
