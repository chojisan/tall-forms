<?php


namespace Tanthammar\TallForms;


class Range extends BaseField
{
    public $type = 'range';
    public $step = 1;
    public $min = 1;
    public $max = 100;

    public function step(float $step): self
    {
        $this->step = $step;
        return $this;
    }

    public function min(float $min): self
    {
        $this->min = $min;
        return $this;
    }

    public function max(float $max): self
    {
        $this->max = $max;
        return $this;
    }

}
