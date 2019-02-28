<?php

namespace UrbanSports\shapes;

abstract class AbstractShape
{
    /** @var string */
    private $color;

    /** @var string */
    private $border;

    /** @var int */
    private $size;

    public function __construct(string $color, string $border, int $size)
    {
        $this->color = $color;
        $this->border = $border;
        $this->size = $size;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getBorder(): string
    {
        return $this->border;
    }

    public function setBorder($border): void
    {
        $this->border = $border;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize($size): void
    {
        $this->size = $size;
    }


}
