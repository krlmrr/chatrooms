<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import PrimaryButton from '@/Components/PrimaryButton.vue'
</script>

<template>
    <AppLayout title="Chat Rooms">
        <div class="mx-8 mt-8 flex justify-end">
            <PrimaryButton to="/rooms/create"> Create Room </PrimaryButton>
        </div>
    </AppLayout>
</template>
