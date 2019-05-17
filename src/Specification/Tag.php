<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Tag.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#tag-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Tag extends BaseObject
{
    /** @var string $name REQUIRED. The name of the tag. */
    public $name;
    /**
     * @var string $description A short description for the tag. CommonMark syntax MAY be used for rich text
     *     representation.
     */
    public $description;
    /** @var ExternalDocumentation $externalDocs Additional external documentation for this tag. */
    public $externalDocs;
}
