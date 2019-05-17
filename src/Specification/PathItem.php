<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Path.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#path-item-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class PathItem extends BaseObject
{
    /** @var string $summary An optional, string summary, intended to apply to all operations in this path. */
    public $summary;
    /**
     * @var string $description An optional, string description, intended to apply to all operations in this path.
     *     CommonMark syntax MAY be used for rich text representation.
     */
    public $description;
    /** @var Operation $get A definition of a GET operation on this path. */
    public $get;
    /** @var Operation $put A definition of a PUT operation on this path. */
    public $put;
    /** @var Operation $post A definition of a POST operation on this path. */
    public $post;
    /** @var Operation $delete A definition of a DELETE operation on this path. */
    public $delete;
    /** @var Operation $options A definition of a OPTIONS operation on this path. */
    public $options;
    /** @var Operation $head A definition of a HEAD operation on this path. */
    public $head;
    /** @var Operation $patch A definition of a PATCH operation on this path. */
    public $patch;
    /** @var Operation $trace A definition of a TRACE operation on this path. */
    public $trace;
    /**
     * @var Server[] $servers An alternative server array to service all operations in this path.
     */
    public $servers;
    /**
     * @var Parameter[] $parameters A list of parameters that are applicable for all the operations described under
     *     this path. These parameters can be overridden at the operation level, but cannot be removed there. The list
     *     MUST NOT include duplicated parameters. A unique parameter is defined by a combination of a name and
     *     location. The list can use the Reference Object to link to parameters that are defined at the OpenAPI
     *     Object's components/parameters.
     */
    public $parameters;
}
