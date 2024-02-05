<template>
  <Head title="Skills Index" />
  <BreezeAuthenticatedLayout>
      <template #header>
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">Projects</h2>
      </template>

      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">Table</div>
      </div>
  </BreezeAuthenticatedLayout>
</template>

<script setup>
  import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
  import { Head } from '@inertiajs/inertia-vue3';
</script>