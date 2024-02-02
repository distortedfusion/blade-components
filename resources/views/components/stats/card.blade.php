<x-card {{ $attributes->merge(['id' => $getId()])->class([
    'w-full relative'
]) }}>
    <x-card.body class="space-y-1">
        <div class="text-xs text-gray-700 dark:text-gray-300 font-semibold">{{ $getLabel() }}</div>
        <div class="text-3xl font-semibold tracking-tight text-black dark:text-white">
            {{ $getValue() ?? $slot }}
            @if(($suffix ?? false) || ! is_null($getMax()))
                <span class="text-lg text-gray-700 dark:text-gray-300">
                    / {{ $suffix ?? $getMax() }}
                </span>
            @endif
        </div>
        @if(! is_null($getDescription()))
            <div class="{{ implode(' ', array_filter([
                    'flex items-center space-x-1 text-xs tracking-tight',
                    $getStyle() === 'success' ? 'text-success' : null,
                    $getStyle() === 'info' ? 'text-info' : null,
                    $getStyle() === 'warning' ? 'text-warning' : null,
                    $getStyle() === 'danger' ? 'text-danger' : null,
                ])) }}">
                <span>{{ $getDescription() }}</span>
                @if(! is_null($getDescriptionIcon()))
                    <x-dynamic-component :component="$getDescriptionIcon()" class="w-4 h-4" />
                @endif
            </div>
        @endif
    </x-card.body>

    @if($footer ?? false)
        <x-card.footer>
            {{ $footer }}
        </x-card.footer>
    @endif

    @if($getChart())
        <div class="absolute bottom-0 inset-x-0 rounded-b overflow-hidden">
            <canvas id="{{ $getId().'-chart' }}" class="h-5 sm:h-6" wire:ignore>
                <span data-ref="primaryBackgroundColorElement" class="bg-black/75 dark:bg-white/74"></span>
                <span data-ref="secondaryBackgroundColorElement" class="bg-black/25 dark:bg-white/25"></span>
                <span data-ref="borderColorElement" class="text-black dark:text-white"></span>
            </canvas>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const element = document.getElementById('{{ $getId().'-chart' }}');
                let width, height, gradient;

                function getChartGradient(ctx, chartArea) {
                    const chartWidth = chartArea.right - chartArea.left;
                    const chartHeight = chartArea.bottom - chartArea.top;

                    if (gradient && width === chartWidth && height === chartHeight) {
                        return gradient;
                    }

                    width = chartWidth;
                    height = chartHeight;

                    gradient = ctx.createLinearGradient(0, chartArea.bottom, 0, chartArea.top);
                    gradient.addColorStop(0, getComputedStyle(
                        element.querySelector('[data-ref="secondaryBackgroundColorElement"]')
                    ).backgroundColor);
                    gradient.addColorStop(1, getComputedStyle(
                        element.querySelector('[data-ref="primaryBackgroundColorElement"]')
                    ).backgroundColor);

                    return gradient;
                }

                new Chart(element, {
                    type: 'line',
                    data: {
                        labels: {{ json_encode(array_keys($getChart())) }},
                        datasets: [{
                            data: {{ json_encode(array_values($getChart())) }},
                            backgroundColor: function(context) {
                                const chart = context.chart;
                                const {ctx, chartArea} = chart;

                                if (chartArea) {
                                    return getChartGradient(ctx, chartArea);
                                }
                            },
                            borderColor: getComputedStyle(
                                element.querySelector('[data-ref="borderColorElement"]')
                            ).color,
                            borderWidth: 2,
                            fill: 'start',
                        }],
                    },
                    options: {
                        elements: {
                            point: { radius: 0 },
                        },
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { display: false },
                        },
                        scales: {
                            x: { display: false },
                            y: { display: false },
                        },
                        tooltips: { enabled: false },
                    },
                });
            });
        </script>
    @endif
</x-card>
