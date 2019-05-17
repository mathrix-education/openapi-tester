<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Components.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#components-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Components extends BaseObject
{
    /** @var Schema[] $schemas An object to hold reusable Schema Objects. */
    public $schemas;
    /** @var Response[] $responses An object to hold reusable Response Objects. */
    public $responses;
    /** @var Parameter[] $parameters An object to hold reusable Parameter Objects. */
    public $parameters;
    /** @var Example[] $examples An object to hold reusable Example Objects. */
    public $examples;
    /** @var RequestBody[] $requestBodies An object to hold reusable Request Body Objects. */
    public $requestBodies;
    /** @var Header[] $headers An object to hold reusable Header Objects. */
    public $headers;
    /** @var SecurityScheme $securitySchemes An object to hold reusable Security Scheme Objects. */
    public $securitySchemes;
}
