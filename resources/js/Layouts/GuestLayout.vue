<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="text-center">
        <Link href="/">
            <img class="w-1/2 mx-auto" src='../../images/lms_logo-2.png' alt="..">
        </Link>
        <h1 class="mt-4 text-2xl font-bold text-gray-700">Library Manager Pro</h1>
    </div>

    <div
        class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-sm overflow-hidden sm:rounded-md"
    >
        <slot />
    </div>
</div>

</template>
