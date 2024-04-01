<script setup>
    import { useForm } from '@inertiajs/vue3'
    import TextInput from '@/Components/TextInput.vue'
    import InputLabel from '@/Components/InputLabel.vue'
    import InputError from '@/Components/InputError.vue'

    const props = defineProps({
        team: Object,
    })

    const form = useForm({
        name: '',
        team_id: props.team.id,
    })
</script>

<template>
    <InputLabel for="name" value="Room Name" class="mx-2 my-2" />

    <TextInput v-model="form.name" name="name" />

    <InputError :message="form.errors.name" />
</template>
