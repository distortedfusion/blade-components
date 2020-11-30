<?php

namespace DistortedFusion\Tailwind\Components\Table;

use Illuminate\View\Component;

class Cell extends Component
{
    /**
     * The cell text alignment.
     *
     * @var string
     */
    public string $align;

    /**
     * The cell colspan.
     *
     * @var int|null
     */
    public ?int $colspan;

    /**
     * The cell rowspan.
     *
     * @var int|null
     */
    public ?int $rowspan;

    /**
     * The loop variable.
     *
     * @var mixed
     */
    public $loop;

    /**
     * Create the component instance.
     *
     * @param string   $align
     * @param int|null $colspan
     * @param int|null $rowspan
     * @param mixed    $loop
     */
    public function __construct(string $align = 'left', int $colspan = null, int $rowspan = null, $loop = null)
    {
        $this->align = $align;
        $this->colspan = $colspan;
        $this->rowspan = $rowspan;
        $this->loop = $loop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tailwind-layout::components.table.cell');
    }

    /**
     * Determine if this is the first cell in the loop.
     *
     * @return bool
     */
    public function isFirst(): bool
    {
        return $this->loop && $this->loop->first;
    }

    /**
     * Determine if this is the last cell in the loop.
     *
     * @return bool
     */
    public function isLast(): bool
    {
        return $this->loop && $this->loop->last;
    }

    /**
     * Determine if this cell is in an even row in the loop.
     *
     * @return bool
     */
    public function isEvenRow(): bool
    {
        return $this->loop && $this->loop->parent && $this->loop->parent->even;
    }
}
