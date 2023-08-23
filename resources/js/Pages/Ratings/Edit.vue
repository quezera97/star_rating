<script setup>
import KinstaLayout from "../../Layouts/KinstaLayout.vue";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    rating: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    id: props.rating.id,
    title: props.rating.title,
    slug: props.rating.slug,
    content: props.rating.content,
});


const submit = () => {
    form.put(route("ratings.update", props.rating.id));
};
</script>

<template>
    <KinstaLayout>

        <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <form @submit.prevent="submit">
                            <div class="mb-6">
                                <label
                                    for="Title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    >Title</label
                                >
                                <input
                                    type="text"
                                    v-model="form.title"
                                    name="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.title"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.title }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="Slug"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    >Slug</label
                                >
                                <input
                                    type="text"
                                    v-model="form.slug"
                                    name="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.slug"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.slug }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="slug"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    >Content</label
                                >
                                <textarea
                                    type="text"
                                    v-model="form.content"
                                    name="content"
                                    id=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                ></textarea>

                                <div
                                    v-if="form.errors.content"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.content }}
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="text-white bg-blue-700  focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
                                :disabled="form.processing"
                                :class="{ 'opacity-25': form.processing }"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </KinstaLayout>
</template>
