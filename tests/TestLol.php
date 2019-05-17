<?php

namespace Mathrix\OpenAPI;

use Mathrix\OpenAPI\Specification\Header;
use Mathrix\OpenAPI\Specification\Responses;
use PHPUnit\Framework\TestCase;

/**
 * Class TestLol.
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since
 */
class TestLol extends TestCase
{
    /** @var Header[] */
    private  $headers = [
        "test"
    ];
    public function testStd()
    {
        $a = new \stdClass();
        $b = "300";
        $a->{$b} = "123";

        dump($a, $a->{"300"});
    }
}
