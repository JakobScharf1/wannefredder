<script>
    import { onMount } from "svelte";

     let scroll = false

     onMount(()=>{
        window.addEventListener('scroll', handleScroll);
    })

    const handleScroll = () =>{
        if (
            document.body.scrollTop >= 400 ||
            document.documentElement.scrollTop >= 400
        ) {
            scroll = true
        } else {
            scroll = false
        }
    }

    const topFunction = () =>{
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    }
</script>

<a href="#!" on:click={()=>topFunction()} aria-label='link' class={`back-to-top rounded text-center ${scroll ? 'd-block' : 'd-none'}`} id="back-to-top"> <i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>