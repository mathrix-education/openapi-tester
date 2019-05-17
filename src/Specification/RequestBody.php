<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class RequestBody.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#request-body-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class RequestBody extends BaseObject
{
    /**
     * @var string $description A brief description of the request body. This could contain examples of use. CommonMark
     *     syntax MAY be used for rich text representation.
     */
    public $description;
    /**
     * @var MediaType[] $content REQUIRED. The content of the request body. The key is a media type or media type
     *     range and the value describes it. For requests that match multiple keys, only the most specific key is
     *     applicable. e.g. text/plain overrides text/*
     */
    public $content;
    /** @var boolean Determines if the request body is required in the request. Defaults to false. */
    public $required = false;
}
