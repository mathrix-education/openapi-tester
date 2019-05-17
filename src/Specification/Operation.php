<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Operation.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#operation-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Operation extends BaseObject
{
    /**
     * @var string[] $tags A list of tags for API documentation control. Tags can be used for logical grouping of
     *     operations by resources or any other qualifier.
     */
    public $tags;
    /** @var string $summary A short summary of what the operation does. */
    public $summary;
    /**
     * @var string $description A verbose explanation of the operation behavior. CommonMark syntax MAY be used for rich
     *     text representation.
     */
    public $description;
    /** @var ExternalDocumentation $externalDocs Additional external documentation for this operation. */
    public $externalDocs;
    /**
     * @var string $operationId Unique string used to identify the operation. The id MUST be unique among all
     *     operations described in the API. The operationId value is case-sensitive. Tools and libraries MAY use the
     *     operationId to uniquely identify an operation, therefore, it is RECOMMENDED to follow common programming
     *     naming conventions.
     */
    public $operationId;
    /**
     * @var Parameter[] $parameters A list of parameters that are applicable for this operation. If a parameter is
     *     already defined at the Path Item, the new definition will override it but can never remove it. The list MUST
     *     NOT include duplicated parameters. A unique parameter is defined by a combination of a name and location.
     *     The list can use the Reference Object to link to parameters that are defined at the OpenAPI Object's
     *     components/parameters.
     */
    public $parameters;
    /**
     * @var RequestBody $requestBody The request body applicable for this operation. The requestBody is only supported
     *     in HTTP methods where the HTTP 1.1 specification RFC7231 has explicitly defined semantics for request
     *     bodies. In other cases where the HTTP spec is vague, requestBody SHALL be ignored by consumers.
     */
    public $requestBody;
    /**
     * @var Responses|Response[] REQUIRED. The list of possible responses as they are returned from executing this
     *     operation.
     */
    public $responses;
    // public $callbacks; Ignored for now
    /**
     * @var boolean $deprecated Declares this operation to be deprecated. Consumers SHOULD refrain from usage of the
     *     declared operation. Default value is false.
     */
    public $deprecated = false;
    /**
     * @var string[][] A declaration of which security mechanisms can be used for this operation. The list of values
     *     includes alternative security requirement objects that can be used. Only one of the security requirement
     *     objects need to be satisfied to authorize a request. This definition overrides any declared top-level
     *     security. To remove a top-level security declaration, an empty array can be used.
     */
    public $security;
    /**
     * @var Server[] An alternative server array to service this operation. If an alternative server object is
     *     specified at the Path Item Object or Root level, it will be overridden by this value.
     */
    public $servers;
}
