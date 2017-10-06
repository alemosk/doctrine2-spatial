<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STDistanceSphere
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STDistanceSphere extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Distance_Sphere';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
