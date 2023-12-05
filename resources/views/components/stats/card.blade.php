<x-card {{ $attributes->merge(['id' => $getId()])->class([
    'w-full relative'
]) }}>
    <x-card.body class="space-y-1">
        <div class="text-xs text-muted font-semibold">{{ $getLabel() }}</div>
        <div class="text-3xl font-semibold tracking-tight">
            {{ $getValue() ?? $slot }}
            @if(($suffix ?? false) || ! is_null($getMax()))
                <span class="text-lg text-gray-700">
                    / {{ $suffix ?? $getMax() }}
                </span>
            @endif
        </div>
    </x-card.body>

    @if($footer ?? false)
        <x-card.footer>
            {{ $footer }}
        </x-card.footer>
    @endif

    @if($getChart())
        <div class="absolute bottom-0 inset-x-0 rounded-b overflow-hidden">
            <canvas id="{{ $getId().'-chart' }}" class="h-5 sm:h-6" wire:ignore>
                <span data-ref="primaryBackgroundColorElement" class="bg-brand-500 bg-opacity-100"></span>
                <span data-ref="secondaryBackgroundColorElement" class="bg-brand-500 bg-opacity-0"></span>
                <span data-ref="borderColorElement" class="text-brand-500"></span>
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
