<?php

namespace App\Actions;

use Brevo\Client\Api\ContactsApi;
use Brevo\Client\Configuration;
use Brevo\Client\Model\AddContactToList;
use Brevo\Client\Model\CreateContact;
use GuzzleHttp\Client;
use Illuminate\Log\LogManager;

class CreateWebinarRegistrantAction
{
    protected ContactsApi $apiInstance;
    protected Configuration $config;
    protected LogManager $log;

    public function __construct(LogManager $log)
    {
        $this->config = new Configuration();
        $this->config = Configuration::getDefaultConfiguration()->setApiKey(
            'api-key', config('services.brevo.key')
        );

        $this->apiInstance = new ContactsApi(new Client(), $this->config);

        $this->log = $log;
    }

    public function execute(string $email, string $fname, string $source, string $webinar): int
    {
        $contact = new CreateContact([
            'email' => $email,
            'attributes' => [
                'FIRSTNAME' => $fname,
            ],
            'listIds' => [
                config('services.brevo.list_ids.webinars.' . $webinar . '.responders'),
                config('services.brevo.list_ids.' . getLang()),
            ],
        ]);

        try {
            $this->apiInstance->createContact($contact);

            return 1;
        } catch (\Exception $exception) {
            if (str_contains($exception->getMessage(), 'Contact already exist')) {
                $addEmails = new AddContactToList(['emails' => [$email]]);

                $this->apiInstance->addContactToList(
                    config('services.brevo.list_ids.webinars.' . $webinar . '.responders'),
                    $addEmails
                );

                return 2;
            }

            $this->log->error($exception->getMessage());
            $this->log->error($exception->getMessage());

            return 0;
        }
    }
}
