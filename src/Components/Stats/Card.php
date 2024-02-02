<?php

namespace DistortedFusion\BladeComponents\Components\Stats;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Card extends Component implements Htmlable
{
    protected ?string $id = null;
    protected ?array $chart = null;
    protected string|Htmlable $label;
    protected $value;
    protected $max;
    protected string|null $descriptionIcon = null;
    protected string|Htmlable|null $description = null;
    protected string $style = 'default';

    public function __construct(string $label)
    {
        $this->label = $label;
    }

    public static function make(string $label): static
    {
        return new static($label);
    }

    public function id(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id ?? Str::slug($this->getLabel());
    }

    public function chart(array|null $chart): static
    {
        $this->chart = $chart;

        return $this;
    }

    public function getChart(): ?array
    {
        return $this->chart;
    }

    public function label(string|Htmlable $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string|Htmlable
    {
        return $this->label;
    }

    public function value($value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function max($max): static
    {
        $this->max = $max;

        return $this;
    }

    public function getMax()
    {
        return $this->max;
    }

    public function descriptionIcon(string $descriptionIcon): static
    {
        $this->descriptionIcon = $descriptionIcon;

        return $this;
    }

    public function getDescriptionIcon(): string|null
    {
        return $this->descriptionIcon;
    }

    public function description(string|Htmlable $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string|Htmlable|null
    {
        return $this->description;
    }

    public function style(string $style): static
    {
        $this->style = $style;

        return $this;
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render(): Renderable
    {
        return view('blade-components::components.stats.card', $this->data());
    }
}
