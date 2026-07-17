<template>
  <footer class="bg-navy text-inverse">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img
              class="mb-4"
              src="/assets/img/logo-light.png"
              srcset="/assets/img/logo-light@2x.png 2x"
              alt="photo"
            />
            <p class="mb-4">
              © {{ new Date().getFullYear() }} Brombeerland gUG.
              <br class="d-none d-lg-block" />Alle Rechte vorbehalten.
            </p>
            <nav class="nav social social-white">
                <a
                    v-for="(socialMedia, index) in socialMediaLinks"
                    :key="index"
                    :href="socialMedia.href"
                >
                    <i :class="socialMedia.iconClass"></i>
                </a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Kontakt</h4>
            <address class="pe-xl-15 pe-xxl-17">
              ADRESSE
            </address>
            <a href="mailto:email">EMAIL</a><br />
            TELNR
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Mehr erfahren</h4>
            <ul class="list-unstyled mb-0">
              <li><router-link class="d-block mb-2" to="/ueber">Über uns</router-link></li>
              <li><router-link class="d-block mb-2" to="/leitbild">Leitbild</router-link></li>
              <li><router-link class="d-block mb-2" to="/datenschutz">Datenschutz</router-link></li>
              <li><router-link class="d-block" to="/impressum">Impressum</router-link></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Unser Newsletter</h4>
            <div class="newsletter-wrapper">
              <form class="validate dark-fields" @submit.prevent="submitNewsletter">
                <div class="input-group form-floating mb-3">
                  <input
                    type="text"
                    v-model="firstName"
                    name="firstName"
                    class="required form-control"
                    placeholder="Vorname"
                  />
                  <label>Vor- und Nachname*</label>
                </div>
                <div class="input-group form-floating mb-4">
                  <input
                    type="email"
                    v-model="email"
                    name="email"
                    class="required email form-control"
                    placeholder="Email Address"
                  />
                  <label>Email*</label>
                </div>
                <button type="submit" class="btn btn-soft-green w-100">
                  Newsletter abonnieren
                </button>
              </form>
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>

  <CommonScrolltop />
</template>

<script setup>
import CommonScrolltop from "@/common/Scrolltop.vue";

const socialMediaLinks = [
  { id: 1, href: "#", iconClass: "uil uil-facebook-f" },
  { id: 2, href: "#", iconClass: "uil uil-instagram" },
];

function submitNewsletter() {}
</script>

<style lang="scss" scoped></style>
