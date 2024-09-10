<template>
    <div :class="`w-full p-4 rounded-md ${alertClass}`">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'Alert',
    props: {
        type: {
            type: String,
            default: 'success', // valor padrão
            validator: value => {
                return ['success', 'warning', 'error', 'info'].includes(value);
            }
        }
    },
    computed: {
        alertClass() {
            switch (this.type) {
                case 'success':
                    return 'bg-green-100 text-green-800';
                case 'warning':
                    return 'bg-yellow-100 text-yellow-800';
                case 'error':
                    return 'bg-red-100 text-red-800';
                case 'info':
                    return 'bg-blue-100 text-blue-800';
                default:
                    return 'bg-gray-100 text-black';
            }
        }
    }
}
</script>