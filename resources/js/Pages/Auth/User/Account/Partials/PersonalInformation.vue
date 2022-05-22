<template>
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form class="space-y-6" action="#" method="POST">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6"><label class="block font-medium text-sm text-gray-700 mb-3">Profile Photo</label>
                                <div class="mt-1 flex space-x-4 items-center">
                                    <div><img src="https://unavatar.io/iyashpal.dev@gmail.com?fallback=https://ui-avatars.com/api?name=Yash Pal&amp;color=7F9CF4&amp;background=EBF4FF&amp;format=svg" class="w-20 h-20 rounded-full"></div>
                                    <div class="text-sm text-gray-600">
                                        <p>For profile photo we are using <a href="https://en.gravatar.com/" target="_blank" class="text-blue-500 underline">Gravatar</a> service behind the scene.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-6"><label for="name" class="block font-medium text-sm text-gray-700 undefined">Full Name</label>
                                <div class="flex flex-col items-start"><input id="name" type="text" name="name" autocomplete="given-name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed w-full mt-1" value="Yash Pal" spellcheck="false" data-ms-editor="true"></div>
                            </div>
                            <div class="col-span-6"><label for="email-address" class="block font-medium text-sm text-gray-700 undefined">Email address</label>
                                <div class="flex flex-col items-start"><input id="email-address" type="email" disabled="" autocomplete="email" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed w-full mt-1 text-gray-500" value="iyashpal.dev@gmail.com"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-4 sm:px-6">
            <div class="flex items-center justify-end">
                <Button>Update</Button>
            </div>
        </div>
    </div>

</template>
<script setup>
import Button from '@/Components/Button.vue'
import Input from '@/Components/Button.vue'
</script>
