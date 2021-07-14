<template>
    <div class="wrapper">

        <!-- Preloader 
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" :src="'/storage/images/AdminLTELogo.png'" alt="AdminLTELogo" height="60" width="60">
        </div>-->

        <!-- Navbar -->
        <nav-bar/>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <side-bar/>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <slot name="header"></slot>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <slot name="subitem"></slot>
                                </li>
                                <li class="breadcrumb-item active">
                                    <slot name="subitem-active"></slot>
                                </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
                <slot></slot>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <Footer/>
    </div>
</template>
<script>
    import Footer from '../Components/Footer'
    import NavBar from '../Components/Navbar'
    import SideBar from '../Components/Sidebar'
    export default {
        components: {
            Footer,
            NavBar,
            SideBar,
        },
        mounted() {
            this.init()
        },
        methods: {
            init() {
                let SELECTOR_LOADER = '.loader'
                setTimeout(() => {
                    let $loader = $(SELECTOR_LOADER)
                    if($loader) {
                        $loader.css('height', 0)
                        setTimeout(() => {
                            $loader.children().hide()
                        }, 2000)
                    }
                }, 2000)
            }
        }
    }
</script>