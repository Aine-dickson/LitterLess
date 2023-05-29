<template>
    <section class="full">
        <ol class="pt-4">                  
            <li class="w-[45%] ml-[50%] relative">
                <span class="absolute flex items-center justify-center overflow-hidden w-6 h-6 bg-blue-100 rounded-full ring-8 -left-3 ring-white dark:ring-gray-700 dark:bg-blue-900">
                    <img class="rounded-full shadow-lg" :src="messages[1].avatar" :alt="messages[1].owner"/>
                </span>
                <div class="p-4 bg-white border-l border-l-gray-200 rounded-r-lg shadow-sm dark:bg-gray-700 dark:border-l-gray-600">
                    <div class="items-center justify-between mb-3 sm:flex">
                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ messages[1].time }}</time>
                        <div class="text-sm flex font-semibold text-gray-900 dark:text-white hover:underline">{{ messages[1].owner }}</div>
                    </div>
                    <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{ messages[1].body }}</div>
                </div>
            </li>
            <li class="w-[45%] ml-[5%] relative">
                <span class="absolute flex items-center justify-center overflow-hidden w-6 h-6 bg-blue-100 rounded-full -right-3 ring-8 ring-white dark:ring-gray-700 dark:bg-blue-900">
                    <img class="rounded-full shadow-lg" :src="messages[1].avatar" :alt="messages[1].owner"/>
                </span>
                <div class="p-4 bg-white border-r border-r-gray-200 rounded-l-lg shadow-sm dark:bg-gray-700 dark:border-r-gray-600">
                    <div class="items-center justify-between mb-3 sm:flex flex-row-reverse">
                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ messages[1].time }}</time>
                        <div class="text-sm flex font-semibold text-gray-900 dark:text-white hover:underline">{{ messages[1].owner }}</div>
                    </div>
                    <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{ messages[1].body }}</div>
                </div>
            </li>
            <li class="w-[45%] ml-[5%] relative">
                <span class="absolute flex items-center justify-center overflow-hidden w-6 h-6 bg-blue-100 rounded-full -right-3 ring-8 ring-white dark:ring-gray-700 dark:bg-blue-900">
                    <img class="rounded-full shadow-lg" :src="messages[1].avatar" :alt="messages[1].owner"/>
                </span>
                <div class="p-4 bg-white border-r border-r-gray-200 rounded-l-lg shadow-sm dark:bg-gray-700 dark:border-r-gray-600">
                    <div class="items-center justify-between mb-3 sm:flex flex-row-reverse">
                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ messages[1].time }}</time>
                        <div class="text-sm flex font-semibold text-gray-900 dark:text-white hover:underline">{{ messages[1].owner }}</div>
                    </div>
                    <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{ messages[1].body }}</div>
                </div>
            </li>
            <li class="w-[45%] ml-[5%] relative">
                <span class="absolute flex items-center justify-center overflow-hidden w-6 h-6 bg-blue-100 rounded-full -right-3 ring-8 ring-white dark:ring-gray-700 dark:bg-blue-900">
                    <img class="rounded-full shadow-lg" :src="messages[1].avatar" :alt="messages[1].owner"/>
                </span>
                <div class="p-4 bg-white border-r border-r-gray-200 rounded-l-lg shadow-sm dark:bg-gray-700 dark:border-r-gray-600">
                    <div class="items-center justify-between mb-3 sm:flex flex-row-reverse">
                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ messages[1].time }}</time>
                        <div class="text-sm flex font-semibold text-gray-900 dark:text-white hover:underline">{{ messages[1].owner }}</div>
                    </div>
                    <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{ messages[1].body }}</div>
                </div>
            </li>
            <li class="w-[45%] ml-[50%] relative">
                <span class="absolute flex items-center justify-center overflow-hidden w-6 h-6 bg-blue-100 rounded-full ring-8 -left-3 ring-white dark:ring-gray-700 dark:bg-blue-900">
                    <img class="rounded-full shadow-lg" :src="messages[1].avatar" :alt="messages[1].owner"/>
                </span>
                <div class="p-4 bg-white border-l border-l-gray-200 rounded-r-lg shadow-sm dark:bg-gray-700 dark:border-l-gray-600">
                    <div class="items-center justify-between mb-3 sm:flex">
                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ messages[1].time }}</time>
                        <div class="text-sm flex font-semibold text-gray-900 dark:text-white hover:underline">{{ messages[1].owner }}</div>
                    </div>
                    <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{ messages[1].body }}</div>
                </div>
            </li>
            <li class="w-[45%] ml-[5%] relative">
                <span class="absolute flex items-center justify-center overflow-hidden w-6 h-6 bg-blue-100 rounded-full -right-3 ring-8 ring-white dark:ring-gray-700 dark:bg-blue-900">
                    <img class="rounded-full shadow-lg" :src="messages[1].avatar" :alt="messages[1].owner"/>
                </span>
                <div class="p-4 bg-white border-r border-r-gray-200 rounded-l-lg shadow-sm dark:bg-gray-700 dark:border-r-gray-600">
                    <div class="items-center justify-between mb-3 sm:flex flex-row-reverse">
                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ messages[1].time }}</time>
                        <div class="text-sm flex font-semibold text-gray-900 dark:text-white hover:underline">{{ messages[1].owner }}</div>
                    </div>
                    <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{ messages[1].body }}</div>
                </div>
            </li>
            <li class="w-[45%] ml-[50%] relative">
                <span class="absolute flex items-center justify-center overflow-hidden w-6 h-6 bg-blue-100 rounded-full ring-8 -left-3 ring-white dark:ring-gray-700 dark:bg-blue-900">
                    <img class="rounded-full shadow-lg" :src="messages[1].avatar" :alt="messages[1].owner"/>
                </span>
                <div class="p-4 bg-white border-l border-l-gray-200 rounded-r-lg shadow-sm dark:bg-gray-700 dark:border-l-gray-600">
                    <div class="items-center justify-between mb-3 sm:flex">
                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ messages[1].time }}</time>
                        <div class="text-sm flex font-semibold text-gray-900 dark:text-white hover:underline">{{ messages[1].owner }}</div>
                    </div>
                    <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{ messages[1].body }}</div>
                </div>
            </li>
        </ol>
    </section>
</template>

<script>
    import { ref } from 'vue';

    export default {
        setup(){
            const messages = ref([
                {
                    owner: 'Aine Dixon',
                    body: "Hi ya'll! I wanted to share a webinar zeroheight is having regarding how to best measure your design system! This is the second session of our new webinar series on #DesignSystems discussions where we'll be speaking about Measurement.",
                    time: '21:30',
                    avatar: `dixon.jpg`
                },
                {
                    owner: 'Aine Developer',
                    body: "Hey there, i just collected the dust",
                    time: '21:30',
                    avatar: `dixon.jpg`
                },
                {
                    owner: 'Di Octopus',
                    body: "I was planning to reschedule the time for collecting rubish",
                    time: '21:30',
                    avatar: `dixon.jpg`
                },
                {
                    owner: 'Code Addict',
                    body: "Hi ya'll! I wanted to share a webinar zeroheight is having regarding how to best measure your design system! This is the second session of our new webinar series on #DesignSystems discussions where we'll be speaking about Measurement.",
                    time: '21:30',
                    avatar: `dixon.jpg`
                },
            ]) 

            return { messages }
        }
    }
</script>