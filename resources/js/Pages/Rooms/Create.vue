<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import PrimaryButton from '@/Components/PrimaryButton.vue'
    import RoomForm from './partials/RoomForm.vue'

    const props = defineProps({
        team: Object,
    })
</script>

<template>
    <AppLayout title="Chat Rooms">
        <RoomForm :team="team" />
    </AppLayout>
</template>
