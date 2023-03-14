<template>
    <div>
        <ListingAddress :listing="listing" />
    </div>
</template>

<script setup>
    import ListingAddress from '@/Components/LIstingAddress.vue';
    defineProps({
        listing: Object,
    })
</script>