<script setup>
import KinstaLayout from "../../Layouts/KinstaLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from '@inertiajs/inertia-vue3'

const props = defineProps({
    ratings: {
        type: Object,
        default: () => ({}),
    },
});
const form = useForm();

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('ratings.destroy', id));
    }
}
</script>

<template>
    <KinstaLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <a :href="route('ratings.create')" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                Add Rating
                            </a>
                        </div>
                        <div class="overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">#</th>
                                        <th scope="col" class="px-6 py-3">Title</th>
                                        <th scope="col" class="px-6 py-3">Slug</th>
                                        <th scope="col" class="px-6 py-3">Edit</th>
                                        <th scope="col" class="px-6 py-3">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(rating, index) in ratings" :key="rating.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">{{ index + 1 }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">{{ rating.title }}</td>
                                        <td class="px-6 py-4">{{ rating.slug }}</td>
                                        <td class="px-6 py-4">
                                            <a :href="route('ratings.edit', rating.id)" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button class="bg-red-700 text-white px-4 py-2 rounded-lg hover:bg-red-800" @click="destroy(rating.id)">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </KinstaLayout>
</template>
