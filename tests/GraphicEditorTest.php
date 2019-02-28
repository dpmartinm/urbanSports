<?php

namespace UrbanSports\Tests;

use PHPUnit\Framework\TestCase;
use UrbanSports\GraphicEditor;

final class GraphicEditorTest extends TestCase
{


    /** @test */
    public function can_create_circle_with_empty_parameters()
    {
        $drawCircle = '{"shapes" : [{"type":"circle", "params" : ""}]}';

        $graphicEditor = new GraphicEditor();

        $result = $graphicEditor->drawGeometricShape($drawCircle);

        $this->assertEquals(
            "new circle with border 7 Color Black Size 2 radius 10",
            $result
        );
    }

    /** @test */
    public function can_create_circle_with_parameters()
    {

        $drawCircle = '{"shapes" : [{"type":"circle", "params" : {"border": "15", "color": "Pink", "size": 10, "radius": 2}}]}';

        $graphicEditor = new GraphicEditor();

        $result = $graphicEditor->drawGeometricShape($drawCircle);

        $this->assertEquals(
            "new circle with border 15 Color Pink Size 10 radius 2",
            $result
        );
    }

    /** @test */
    public function create_rectangle_returns_rectangle_string()
    {

        $drawRectangle = '{"shapes" : [{"type":"rectangle", "params" : {"border": "15"}}]}';

        $graphicEditor = new GraphicEditor();

        $result = $graphicEditor->drawGeometricShape($drawRectangle);

        $this->assertEquals(
            "new rectangle with border 15 Color White Size 2 angle 20",
            $result
        );
    }

}
