<script>
    import { faqData } from "../data/data";

    let activeTab = 1

    const setActiveTab = (index) => {
        activeTab = index
    }

</script>


<div class="accordion mt-4 pt-2" id="buyingquestion">
    {#each faqData as item}
        <div class="accordion-item rounded shadow mt-2">
            <h2 class="accordion-header" id="headingOne">
                <button class={`accordion-button border-0 bg-white shadow ${activeTab === item.id ? '' : 'collapsed'}`} type="button" on:click={() => setActiveTab(item.id)}>
                    {item.title}
                </button>
            </h2>
            <div id="collapseOne" class={`accordion-collapse border-0 collapse ${activeTab === item.id ? 'show' : ''}`}>
                <div class="accordion-body text-muted">
                    {item.desc}
                </div>
            </div>
        </div>
    {/each}
</div>