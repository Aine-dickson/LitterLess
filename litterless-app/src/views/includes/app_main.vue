<template>
    <main class="h-full overflow-y-auto">
        <RouterView/>
    </main>
</template>

<script>
    import { onMounted } from 'vue'
    import { useRouter } from 'vue-router';

    export default{
        setup(){
            const router = useRouter()
            onMounted(() => console.log("Mounted"))

        }
    }
</script>