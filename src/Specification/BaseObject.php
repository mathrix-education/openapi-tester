<?php

namespace Mathrix\OpenAPI\Specification;

use ArrayAccess;

/**
 * Class BaseObject.
 * This class is meant to automatically populates the OpenAPI objects, based on the given data.
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
abstract class BaseObject implements ArrayAccess
{
    public function offsetExists($offset)
    {
        return property_exists($this, $offset);
    }


    public function offsetGet($offset)
    {
        return $this->{$offset};
    }

    public function offsetSet($offset, $value)
    {
        return; // Specification is immutable
    }

    public function offsetUnset($offset)
    {
        return; // Specification is immutable
    }
}
