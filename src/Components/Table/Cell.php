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
     * Determines if the cell is in an even row of the loop.
     *
     * @var mixed
     */
    public $isEven;

    /**
     * Determines if the cell is the first in the loop.
     *
     * @var mixed
     */
    public $isFirst;

    /**
     * Determines if the cell is the last in the loop.
     *
     * @var mixed
     */
    public $isLast;

    /**
     * Create the component instance.
     *
     * @param string   $align
     * @param int|null $colspan
     * @param int|null $rowspan
     * @param bool     $isEven
     * @param bool     $isFirst
     * @param bool     $isLast
     */
    public function __construct(string $align = 'left', int $colspan = null, int $rowspan = null, bool $isEven = false, bool $isFirst = false, bool $isLast = false)
    {
        $this->align = $align;
        $this->colspan = $colspan;
        $this->rowspan = $rowspan;

        $this->isEven = $isEven;
        $this->isFirst = $isFirst;
        $this->isLast = $isLast;
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
}
