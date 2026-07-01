import { computed } from 'vue';
import { useAppearance } from '@/composables/useAppearance';

export function useChartTheme() {
    const { resolvedAppearance } = useAppearance();

    const isDark = computed(() => resolvedAppearance.value === 'dark');
    const foreColor = computed(() => (isDark.value ? '#FAFAF7' : '#0B2036'));
    const mutedColor = computed(() => (isDark.value ? '#9FB1C2' : '#5F6B7A'));
    const gridColor = computed(() => (isDark.value ? '#123B5F' : '#DDE5EE'));

    return { isDark, foreColor, mutedColor, gridColor };
}
