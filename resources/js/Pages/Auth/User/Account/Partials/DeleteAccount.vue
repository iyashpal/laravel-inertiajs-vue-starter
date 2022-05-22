<template>
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Delete Account</h3>
                    <p class="mt-1 text-sm text-gray-500">Permanently delete your account.</p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div className="mt-3 max-w-xl text-sm text-gray-600">
                        <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                    </div>

                    <div className="flex items-center mt-5">

                        <Button>Log out other browser sessions</Button>

                    </div>
                </div>
            </div>
        </div>
        
    </div>

</template>
<script setup>
import Button from '@/Components/Button.vue'
import Input from '@/Components/Button.vue'
</script>
