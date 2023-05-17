<template>
    <section class="h-full">
        <aside id="default-sidebar" class="w-full h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
               <app_nav/>
            </div>
        </aside>
    </section>
</template>

<script>
   import app_nav from '@/components/app_nav.vue';

   export default {
      components:{
         app_nav
      },
      setup(){

         return {  }
      }
   }
</script>