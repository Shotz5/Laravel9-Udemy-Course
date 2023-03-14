<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/show">Show Page</Link>
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <div>
        {{ y }}
    </div>
    <slot>Default</slot>
</template>

<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { computed, ref } from 'vue'

    const x = ref(0);
    const y = computed(() => { return x.value * 2 })

    const page = usePage()
    const flashSuccess = computed(() => { 
        return page.props.flash.success 
    })
</script>

<style scoped>
    .success {
        background-color: green;
        color: white;
    }
</style>