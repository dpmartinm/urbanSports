<?php

namespace UrbanSports;

use UrbanSports\shapes\CircleShape;
use UrbanSports\shapes\RectangleShape;

final class GraphicEditor
{
    public function drawGeometricShape(array $shapes): string
    {
        $listOfShapes = [];
        foreach ($shapes as $shape){
            if(!isset($shape['type']) && !isset($shape['params'])) {
                return "Please input an array in form of {\"shapes\" : [{\"type\":\"circle\", \"params\" : {...}}]}";
            }

            switch ($shape['type'])
            {
                case 'circle':
                    $circle = new CircleShape(
                        $shape['params']['color'] ?? '',
                        $shape['params']['border'] ?? '',
                        $shape['params']['shape'] ?? 0,
                        $shape['params']['radius']?? 0);

                    $listOfShapes['circle'] = $circle->generateShape();
                    break;
                case 'rectangle':
                    $rectangle = new RectangleShape(
                        $shape['params']['color'] ?? '',
                        $shape['params']['border'] ?? '',
                        $shape['params']['shape'] ?? 0,
                        $shape['params']['shape']['angle'] ?? ''
                    );
                    $listOfShapes['rectangle'] = $rectangle->generateShape();
                    break;
                default:
                    return 'shape not supported';

            }
        }
        return json_encode($listOfShapes);
    }
}
