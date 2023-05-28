<template>
    <section>
        <RouterView/>
    </section>
</template>

<script>
    import { useRouter } from 'vue-router';
    import { onMounted } from 'vue';

    export default{
        setup(){
            const router = useRouter();
            onMounted(() => {
                router.push('login')
            })
        }
    }
</script>