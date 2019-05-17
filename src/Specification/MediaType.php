<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class MediaType.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#media-type-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class MediaType extends BaseObject
{
    /** @var Schema $schema The schema defining the content of the request, response, or parameter. */
    public $schema;
    /**
     * @var mixed $example Example of the media type. The example object SHOULD be in the correct format as specified
     *     by the media type. The example field is mutually exclusive of the examples field. Furthermore, if
     *     referencing a schema which contains an example, the example value SHALL override the example provided by the
     *     schema.
     */
    public $example;
    /**
     * @var Examples[] $examples Examples of the media type. Each example object SHOULD match the media type and
     *     specified schema if present. The examples field is mutually exclusive of the example field. Furthermore, if
     *     referencing a schema which contains an example, the examples value SHALL override the example provided by
     *     the schema.
     */
    public $examples;
    /**
     * @var Encodings[] $encoding A map between a property name and its encoding information. The key, being the
     *     property name, MUST exist in the schema as a property. The encoding object SHALL only apply to requestBody
     *     objects when the media type is multipart or application/x-www-form-urlencoded.
     */
    public $encoding;
}
