<template>
    <div v-for="(notiGroup, index) in noti_groups" :key="index" class="p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
        <time class="text-lg font-semibold text-gray-900 dark:text-white">{{ notiGroup.date }}</time>
        <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
            <li @click="review(noti.id)" v-for="(noti, index) in notiGroup.notis" :key="index">
                <article class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" :src="noti.avatar" :alt="noti.source"/>
                    <div class="text-gray-600 dark:text-gray-400">
                        <div class="text-base font-normal"><span class="font-medium text-gray-900 dark:text-white">{{ noti.source }}</span> {{ noti.action }}</div>
                        <div class="text-sm font-normal">{{ noti.sample }}</div>
                        <span v-if="noti.public" class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                            <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                            Public
                        </span>
                        <span v-else class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                            <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path></svg>
                            Private
                        </span>
                    </div>
                </article>
            </li>
        </ol>
    </div>
</template>

<script>
    import { ref } from 'vue';
    import { useRouter } from 'vue-router';

    export default {
        setup(){
            const router = useRouter()

            const noti_groups = ref([
                {
                    date: 'January 12th, 2023',
                    notis: [
                        {
                            id: 0,
                            public: true,
                            source: "Aine Dixon",
                            action: "Approved your request",
                            sample: "How old are you?",
                            avatar: '/assets/images/aine.jpg'
                        },
                        {
                            id: 1,
                            public: false,
                            source: "Di Octopus",
                            action: "Liked to your survey",
                            sample: "Which school did you attend first?",
                            avatar: '/assets/images/2.jpg'
                        }
                    ]
                },
                {
                    date: "January 13th, 2023",
                    notis: [
                        {
                            id: 2,
                            public: true,
                            source: "developerAine",
                            action: "Poked you on your survey",
                            sample: "What causes deforestation",
                            avatar: '/assets/images/1.jpg'
                        }
                    ]
                }
            ])

            const review = (id) => {
                router.push({name: 'noti-preview', params: {id: id}})
            } 

            return { noti_groups, review }
        }
    }
</script>