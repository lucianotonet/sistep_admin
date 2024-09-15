<!-- Start of Selection -->
<template>
    <Alert v-if="isVisible" :variant="alertType" class="rounded-md px-6 py-4" :class="{
        'alert-primary text-green-800': alertType === 'primary',
        'alert-destructive text-red-800': alertType === 'destructive',
        'alert-ghost text-yellow-800': alertType === 'ghost'
    }">
        <!-- <ExclamationTriangleIcon class="h-4 w-4" v-if="alertType === 'destructive'" /> -->
        <!-- <CheckIcon class="h-4 w-4 fill-green-800 text-green-800" v-if="alertType === 'primary'" /> -->
        <!-- <InfoCircledIcon class="h-4 w-4 fill-blue-800 text-blue-800"  v-else /> -->
        <button @click="hideAlert" class="close-button" aria-label="Fechar alerta">✕</button>
        <AlertTitle>
            <slot name="title"></slot>
        </AlertTitle>
        <AlertDescription>
            <slot></slot>
        </AlertDescription>
    </Alert>
</template>

<script setup>
import { Alert, AlertDescription, AlertTitle } from "@/components/ui/alert";
import { ExclamationTriangleIcon, CheckIcon, InfoCircledIcon } from "@radix-icons/vue";
import { ref } from 'vue';

const props = defineProps({
    alertType: {
        type: String,
        default: 'primary'
    }
});

const isVisible = ref(true);

const hideAlert = () => {
    isVisible.value = false;
};
</script>

<style scoped>
.alert-primary {
    background-color: #d4edda;
    color: #155724;
}

.alert-destructive {
    background-color: #f8d7da;
    color: #721c24;
}

.alert-ghost {
    background-color: #fff3cd;
    color: #856404;
}

.close-button {
    background: none;
    border: none;
    cursor: pointer;
    float: right;
}
</style>
<!-- End of Selection -->