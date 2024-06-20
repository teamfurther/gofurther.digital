<?php

namespace App\Actions;

use Brevo\Client\Api\ContactsApi;
use Brevo\Client\Configuration;
use Brevo\Client\Model\AddContactToList;
use Brevo\Client\Model\RemoveContactFromList;
use GuzzleHttp\Client;
use Illuminate\Log\LogManager;
use Symfony\Component\HttpFoundation\Response;

class ConfirmWebinarParticipantAction
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

    public function execute(string $email, string $webinar): Response
    {
        $removeEmails = new RemoveContactFromList(['emails' => [$email]]);
        $addEmails = new AddContactToList(['emails' => [$email]]);

        try {
            $this->apiInstance->removeContactFromList(
                config('services.brevo.list_ids.webinars.' . $webinar . '.responders'),
                $removeEmails
            );
            $this->apiInstance->addContactToList(
                config('services.brevo.list_ids.webinars.' . $webinar . '.confirmed'),
                $addEmails
            );

            return response()->noContent();
        } catch (\Exception $exception) {
            $this->log->error($exception->getMessage());
            $this->log->error($exception->getMessage());

            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }
}
