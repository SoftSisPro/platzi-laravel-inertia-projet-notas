
<template>
    <AppLayout title="Crear Notas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modulo de Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Contenido -->
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg text-gray-900">Crear una nota</h3>
                            <p class="text-sm text-gray-600">Luego de crear la podras editar</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <form @submit.prevent="submit">
                                <label class="text-sm block font-medium text-gray-700">Resumen:</label>
                                <textarea autofocus
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.excerpt"
                                ></textarea>
                                <label class="text-sm block font-medium text-gray-700">Contenido:</label>
                                <textarea
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.content"
                                    rows="8"
                                ></textarea>
                                <div class=" flex justify-between items-center">
                                    <Link :href="route('notes.index')" class="text-blue-500">
                                        Volver
                                    </Link>
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                        Crear
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link, useForm } from '@inertiajs/vue3';

    const form = useForm({
        excerpt: '',
        content: '',
    })

    const submit = () => {
        form.post(route('notes.store'), form);
    }

</script>
