<?php

namespace UrbanSports\shapes;

final class RectangleShape extends AbstractShape implements ShapeInterface
{
    /** @var string */
    private  $angle;

    public function __construct(string $color, string $border, int $size, string $angle)
    {
        $this->angle = $angle;
        parent::__construct($color, $border, $size);
    }

    public function generateShape(): string
    {
        $border = $this->getBorder() ? '' : '22';

        $color = $this->getColor() ? '' : 'White';

        $size = (string)$this->getSize() ? '' : 2;

        $angle = $this->angle ? '' : '20';

        $circle = $this->mockShape($border, $color, $size, $angle);

        return $circle;
    }

    /**
     * Here should go the specific implementation for Rectangle
     * @param $border
     * @param $color
     * @param $size
     * @param string $angle
     * @return string
     */
    private function mockShape(string $border, string $color, string $size, string $angle):string
    {
        return 'new rectangle with border '. $border . ' Color ' . $color . ' Size ' . $size . ' angle ' . $angle;
    }
}
