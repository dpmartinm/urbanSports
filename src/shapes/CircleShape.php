<?php

namespace UrbanSports\shapes;

final class CircleShape extends AbstractShape implements ShapeInterface
{
    /** @var float */
    private $radius;

    public function __construct(string $color, string $border, int $size, float $radius)
    {
        $this->radius = $radius;
        parent::__construct($color, $border, $size);
    }

    /**
     * Here everything is converted to string just for the example
     * @return string
     */
    public function generateShape(): string
    {
        $border = $this->getBorder() ? '' : '7' ;

        $color = $this->getColor() ? '' : 'Black';

        $size = (string)$this->getSize() ? '' : 2;

        $radius = (string)$this->radius ? '' : 10;

        $circle = $this->mockShape($border, $color, $size, $radius);

        return $circle;
    }

    /**
     * Here should go the specific implementation for circle
     * @param string $border
     * @param string $color
     * @param string $size
     * @param string $radius
     * @return string
     */
    private function mockShape(string $border, string $color, string $size, string $radius):string
    {
        return 'new circle with border '. $border . ' Color : ' . $color . ' Size: ' . $size .' Radius: ' . $radius;
    }
}
