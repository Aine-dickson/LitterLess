<template>
    <section class="app-container grid h-screen">
        <div class="header h-full">
            <app_header/>
        </div>
        <div class="aside h-full hidden sm:block bg-red-500">
            <app_aside/>
        </div>
        <div class="relative main h-full border-r border-gray-200 dark:text-white text-gray-900 dark:bg-gray-700 dark:border-gray-700">
            <div class="absolute top-0 bottom-0 right-0 left-0 sm:hidden bg-gray-600 bg-opacity-10">
                <nav class="bg-white dark:bg-gray-900 h-full w-[70%]">
                    <app_nav/>
                </nav>
            </div>
            <app_main/>
        </div>
        <div class="footer h-full dark:bg-gray-700 sm:hidden">
            <app_footer/>
        </div>
    </section>
</template>

<script>
    import { onMounted } from 'vue';
    import { useRouter } from 'vue-router';

    import app_header from './includes/app_header.vue'
    import app_main from './includes/app_main.vue'
    import app_footer from './includes/app_footer.vue'
    import app_aside from './includes/app_aside.vue'
    import app_nav from '../components/app_nav.vue';

    export default {
        components: {
            app_aside,
            app_footer,
            app_header,
            app_main,
            app_nav
        },
        setup(){
            const router = useRouter()
            onMounted(() => {
                router.push('home')
            })            
        }
    }

</script>

<style>
.footer{
    grid-area: footer;
}
.header{
    grid-area: header;
}
.main{
    grid-area: main;
}
.aside{
    grid-area: aside;
}
.app-container{
    grid-template-columns:  100%;
    grid-template-rows: 10% 82% 8%;
    grid-template-areas: "header" "main" "footer" ;
}

@media screen and (min-width: 640px) {
    .app-container{
        grid-template-columns: 20% 80%;
        grid-template-rows: 12% 88%;
        grid-template-areas: "header header" "aside main";
    }
}

</style>