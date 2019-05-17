<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Response.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#response-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Response extends BaseObject
{
    /**
     * @var string $description REQUIRED. A short description of the response. CommonMark syntax MAY be used for rich
     *     text representation.
     */
    public $description;
    /**
     * @var Header[] $headers Maps a header name to its definition. RFC7230 states header names are case insensitive.
     *     If a response header is defined with the name "Content-Type", it SHALL be ignored.
     */
    public $headers;
    /**
     * @var MediaType[] $content A map containing descriptions of potential response payloads. The key is a media type
     *     or media type range and the value describes it. For responses that match multiple keys, only the most
     *     specific key is applicable. e.g. text/plain overrides text/*
     */
    public $content;
    // links are ignored for now
}
