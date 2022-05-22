<template>
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Update Password</h3>
                    <p class="mt-1 text-sm text-gray-500">Ensure your account is using a long, random password to stay secure.</p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form class="space-y-6" action="#" method="POST">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6"><label for="current-password" class="block font-medium text-sm text-gray-700 undefined">Current password</label>
                                <div class="flex flex-col items-start"><input id="current-password" type="password" autocomplete="current-password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed w-full mt-1" value=""></div>
                            </div>
                            <div class="col-span-6 sm:col-span-3"><label for="new-password" class="block font-medium text-sm text-gray-700 undefined">Password</label>
                                <div class="flex flex-col items-start"><input id="new-password" type="password" autocomplete="new-password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed w-full mt-1" value="" aria-autocomplete="list"></div>
                            </div>
                            <div class="col-span-6 sm:col-span-3"><label for="confirm-password" class="block font-medium text-sm text-gray-700 undefined">Confirm password</label>
                                <div class="flex flex-col items-start"><input id="confirm-password" type="password" autocomplete="confirm-password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed w-full mt-1" value=""></div>
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
