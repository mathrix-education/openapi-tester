<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Parameter.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#parameter-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Parameter extends Header
{
    /**
     * @var string $name REQUIRED. The name of the parameter. Parameter names are case sensitive.
     *     - If in is "path", the name field MUST correspond to the associated path segment from the path field in the
     *       Paths Object. See Path Templating for further information.
     *     - If in is "header" and the name field is "Accept", "Content-Type" or "Authorization", the parameter
     *       definition SHALL be ignored.
     *     - For all other cases, the name corresponds to the parameter name used by the in property.
     */
    public $name;
    /**
     * @var string REQUIRED. The location of the parameter. Possible values are "query", "header", "path" or "cookie".
     */
    public $in;
}
