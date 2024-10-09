

<template>
    <AppLayout title="Editar Notas">
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
                            <h3 class="text-lg text-gray-900">Editar una nota</h3>
                            <p class="text-sm text-gray-600">Si editas no puedes volver al estado anterior</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <form @submit.prevent="submit">
                                <label class="text-sm block font-medium text-gray-700">Resumen:</label>
                                <textarea
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.excerpt"
                                ></textarea>
                                <label class="text-sm block font-medium text-gray-700">Contenido:</label>
                                <textarea
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.content"
                                    rows="8"
                                ></textarea>
                                <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                        Guardar Cambios
                                </button>
                            </form>
                            <div class="pt-4 mt-4 border-t flex justify-between items-center">
                                <Link :href="route('notes.index')" class="text-blue-500 hover:text-blue-800">
                                    Volver
                                </Link>
                                <a href="#" @click.prevent="destroy" class="text-red-500 hover:text-red-900">
                                    Eliminar
                                </a>
                            </div>

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
    const props = defineProps({
        note: Object,
    })

    const form = useForm({
        excerpt: props.note.excerpt,
        content: props.note.content,
    })

    const submit = () => {
        form.put(route('notes.update',props.note.id), form);
    }

    const destroy = () => {
        if (confirm('¿Estas seguro de eliminar esta nota?')) {
            form.delete(route('notes.destroy', props.note.id));
        }
    }

</script>
