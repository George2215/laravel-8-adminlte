<template>
    <admin-layout>
        <template #header>
            <h5>Usuarios</h5>
        </template>
        <template #subitem>
                <inertia-link href="dashboard">Inicio</inertia-link>
        </template>
        <template #subitem-active>
            Usuarios
        </template>

    </admin-layout>
</template>
<script>
    import AdminLayout from '@/Layouts/AdminLayout'
    export default {
        components: {
            AdminLayout,
        },
        methods: {
        }
    }
</script>