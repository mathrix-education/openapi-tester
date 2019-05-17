<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class ExternalDocumentation.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#external-documentation-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class ExternalDocumentation extends BaseObject
{
    /**
     * @var string $description A short description of the target documentation. CommonMark syntax MAY be used for
     *     rich text representation.
     */
    public $description;
    /** @var string $url REQUIRED. The URL for the target documentation. Value MUST be in the format of a URL. */
    public $url;
}
