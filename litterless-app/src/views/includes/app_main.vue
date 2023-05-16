<template>
    <main class="h-full">
        <RouterView/>
    </main>
</template>

<script>
    import { onMounted } from 'vue'
    import { useRouter } from 'vue-router'

    export default{
        setup(){
            const router = useRouter()

            onMounted({
                // router.push('/home')
            })

        }
    }
</script>