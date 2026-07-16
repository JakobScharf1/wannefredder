<template>
  <section class="wrapper bg-gradient-primary">
    <div class="container pb-17 pb-md-20">
      <div class="row gx-0 mb-14 mb-md-16">
        <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n23">
          <img
            class="img-fluid mx-auto rounded shadow-lg"
            data-aos="fade"
            data-aos-once="true"
            data-aos-delay=""
            src="/assets/img/demos/de1.jpg"
            srcset="/assets/img/demos/de1@2x.jpg 2x"
            alt="photo"
          />
          <img
            class="position-absolute rounded shadow-lg"
            data-aos="fade-left"
            data-aos-once="true"
            data-aos-delay=""
            src="/assets/img/demos/de2.jpg"
            srcset="/assets/img/demos/de2@2x.jpg 2x"
            style="top: 25%; right: -12%; max-width: 30%; height: auto"
            alt="photo"
          />
          <img
            class="position-absolute rounded shadow-lg"
            data-aos="fade-right"
            data-aos-once="true"
            data-aos-delay=""
            src="/assets/img/demos/de3.jpg"
            srcset="/assets/img/demos/de3@2x.jpg 2x"
            style="top: 15%; left: -15%; max-width: 30%; height: auto"
            alt="photo"
          />
          <img
            class="position-absolute rounded shadow-lg"
            data-aos="fade-left"
            data-aos-once="true"
            data-aos-delay=""
            src="/assets/img/demos/de4.jpg"
            srcset="/assets/img/demos/de4@2x.jpg 2x"
            style="bottom: 15%; left: -13%; max-width: 30%; height: auto"
            alt="photo"
          />
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div
        class="row row-cols-2 row-cols-md-4 row-cols-lg-5 gx-md-8 gy-10 text-center justify-content-center"
        data-aos="fade-up"
        data-aos-once="true"
        data-aos-delay=""
      >
        <div v-for="feature in features3" :key="feature.id" class="col">
          <img
            :src="feature.imgSrc"
            :srcset="feature.imgSrcset"
            class="mb-4"
            alt="photo"
          />
          <h4 v-html="feature.title"></h4>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
</template>

<script setup>
import { features3 } from "@/data/preview";
</script>

<style lang="scss" scoped></style>
