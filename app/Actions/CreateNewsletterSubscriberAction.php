<?php

namespace App\Actions;

use GuzzleHttp\Client;
use Illuminate\Log\LogManager;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\CreateContact;
use SendinBlue\Client\Model\CreateUpdateContactModel;

class CreateNewsletterSubscriberAction
{
    protected ContactsApi $apiInstance;
    protected Configuration $config;
    protected LogManager $log;

    public function __construct(LogManager $log)
    {
        $this->config = new Configuration();
        $this->config = Configuration::getDefaultConfiguration()->setApiKey(
            'api-key', config('services.sendinblue.key')
        );

        $this->apiInstance = new ContactsApi(new Client(), $this->config);

        $this->log = $log;
    }

    public function execute(string $email, string $fname, string $source): ?CreateUpdateContactModel
    {
        $contact = new CreateContact([
            'email' => $email,
            'attributes' => [
                'FIRSTNAME' => $fname,
            ],
            'listIds' => [
                config('services.sendinblue.list_ids.' . getLang()),
            ],
        ]);

        try {
            return $this->apiInstance->createContact($contact);
        } catch (\Exception $e) {
            $this->log->error($e->getMessage());

            return null;
        }
    }
}
