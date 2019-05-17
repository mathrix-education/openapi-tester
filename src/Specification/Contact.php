<?php

namespace Mathrix\OpenAPI\Specification;

/**
 * Class Contact.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#contact-object
 *
 * @author Mathieu Bour <mathieu@mathrix.fr>
 * @copyright Mathrix Education SA.
 * @since 0.9.0
 */
class Contact extends BaseObject
{
    /** @var string The identifying name of the contact person/organization. */
    public $name;
    /** @var string The URL pointing to the contact information. MUST be in the format of a URL. */
    public $url;
    /** @var string The email address of the contact person/organization. MUST be in the format of an email address. */
    public $email;
}
