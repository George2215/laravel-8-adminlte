<template>
    <footer class="main-footer text-sm text-center">
        <strong>Copyright © 2014-{{ currentDate.getFullYear() }} 
            <inertia-link href="https://adminlte.io">Softjent</inertia-link>.
        </strong>
            All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0
        </div>
    </footer>
</template>
<script>
export default {
    data() {
        return {
            currentDate: new Date,
        }
    }
}
</script>