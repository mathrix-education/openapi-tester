<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class License.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#license-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class License extends BaseObject
{
    /** @var string $name REQUIRED. The license name used for the API. */
    public $name;
    /** @var string $uri A URL to the license used for the API. MUST be in the format of a URL. */
    public $uri;
}
