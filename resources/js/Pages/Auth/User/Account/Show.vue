<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import PersonalInformation from './Partials/PersonalInformation.vue'
import AccountPassword from './Partials/AccountPassword.vue'
import BrowserSessions from './Partials/BrowserSessions.vue'
import DeleteAccount from './Partials/DeleteAccount.vue'
</script>

<template>

  <Head title="Dashboard" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        My Account
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="space-y-6">

            <PersonalInformation />

            <AccountPassword />

            <BrowserSessions />

            <DeleteAccount />

          
        </div>
      </div>
    </div>


  </BreezeAuthenticatedLayout>
</template>
