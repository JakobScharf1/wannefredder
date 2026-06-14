<template>
    <section class="bg-home d-flex align-items-center" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
        <div class="bg-overlay bg-linear-gradient-2"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                        <div class="text-center">
                            <img :src="user" class="avatar avatar-md-md rounded-pill mb-3 shadow" alt="">
                            <h6 class="text-uppercase fw-semibold mb-0">Calvin Carlo</h6>
                        </div>
                        <form class="mt-4">
                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="loginpass">Password</label>
                                <input type="password" class="form-control" id="loginpass" placeholder="Password">
                            </div>
                        
                            <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-label form-check-label text-muted" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <span class="forgot-pass text-muted small mb-0"><router-link to="/reset-password" class="text-muted">Forgot password ?</router-link></span>
                            </div>
            
                            <button class="btn btn-primary w-100" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
    import bg from '@/assets/images/hero/auth.jpg'
    import user from '@/assets/images/team/1.jpg'
</script>

<style lang="scss" scoped>

</style>