<script setup lang="ts">
import { cn } from '@/lib/utils';

const props = withDefaults(
    defineProps<{
        class?: string;
    }>(),
    {},
);
</script>

<template>
    <img
        src="/images/logoLetras.png"
        alt="Buzón MR Lana"
        :class="
            cn(
                'h-10 w-auto object-contain transition-transform duration-300 hover:scale-105',
                props.class,
            )
        "
    />
</template>
