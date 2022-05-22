<template>
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Browser Sessions</h3>
                    <p class="mt-1 text-sm text-gray-500">Manage and log out your active sessions on other browsers and devices.</p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div className="mt-3 max-w-xl text-sm text-gray-600">
                        <p>If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.</p>
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
