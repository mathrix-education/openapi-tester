<?php

use Psr\Http\Message\ResponseInterface;


/**
 * Class OpenAPIAssertions.
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
trait OpenAPIAssertions
{
    public function assertOpenAPI($object)
    {
    }


    /**
     * Assert that the given response follow the OpenAPI specification.
     *
     * @param ResponseInterface $response
     */
    public function assertOpenAPIResponse(ResponseInterface $response)
    {
        
    }
}
