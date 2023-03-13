<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/show">Show Page</Link>
    <div>The page with time {{ timer }}</div>
    <slot>Default</slot>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
    import {ref} from 'vue'

    const timer = ref(0)
    // Built in JS function, can be defined here apparently
    setInterval(() => timer.value++, 1000)
</script>