<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Example.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#example-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Example extends BaseObject
{
    /** @var string $summary Short description for the example. */
    public $summary;
    /**
     * @var string $description Long description for the example. CommonMark syntax MAY be used for rich text
     *     representation.
     */
    public $description;
    /**
     * @var mixed $value Embedded literal example. The value field and externalValue field are mutually exclusive. To
     *     represent examples of media types that cannot naturally represented in JSON or YAML, use a string value to
     *     contain the example, escaping where necessary.
     */
    public $value;
    /**
     * @var string A URL that points to the literal example. This provides the capability to reference examples that
     *     cannot easily be included in JSON or YAML documents. The value field and externalValue field are mutually
     *     exclusive.
     */
    public $externalValue;
}
