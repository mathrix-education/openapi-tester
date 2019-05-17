<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Info.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#info-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Info extends BaseObject
{
    /** @var string REQUIRED. The title of the application. */
    public $title;
    /**
     * @var string A short description of the application. CommonMark syntax MAY be used for rich text representation.
     */
    public $description;
    /** @var string A URL to the Terms of Service for the API. MUST be in the format of a URL. */
    public $termsOfService;
    /** @var Contact $contact The contact information for the exposed API. */
    public $contact;
    /** @var License The license information for the exposed API. */
    public $license;
    /**
     * @var string REQUIRED. The version of the OpenAPI document (which is distinct from the OpenAPI Specification
     *     version or the API implementation version).
     */
    public $version;
}
