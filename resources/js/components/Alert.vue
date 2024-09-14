<script setup lang="ts">
import { Alert, AlertDescription, AlertTitle } from "@/components/ui/alert";
import { RocketIcon } from "@radix-icons/vue";
</script>

<template>
    <Alert>
        <RocketIcon class="h-4 w-4" />
        <AlertTitle>Bem-vindo ao SISTEP!</AlertTitle>
        <AlertDescription>
            Este é o seu painel administrativo.
        </AlertDescription>
    </Alert>
</template>
