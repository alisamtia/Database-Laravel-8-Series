<?php

namespace App\Services;

use \MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    {
    }
    public function subscribe($email, $List_id = null)
    {
        $List_id ??= config('services.mailchimp.list');
        return $this->client->lists->addListMember($List_id, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }
}