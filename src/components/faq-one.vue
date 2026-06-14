<template>
    <div class="accordion mt-4 pt-2" id="buyingquestion">
        <div v-for="(item, index) in faqData" :key="index" class="accordion-item rounded shadow mt-2">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button border-0 bg-white shadow" :class="activeTab === item.id ? '' : 'collapsed'" type="button" @click="activeTab = activeTab === item.id ? '' : item.id">
                    {{item.title}}
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse border-0 collapse " :class="activeTab === item.id ? 'show' : ''" >
                <div class="accordion-body text-muted">
                    {{item.desc}}
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { faqData } from '@/data/data';
    import { ref } from 'vue';

    let activeTab = ref(1)
</script>

<style lang="scss" scoped>

</style>