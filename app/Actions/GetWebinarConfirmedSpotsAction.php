<?php

namespace App\Actions;

use GuzzleHttp\Client;
use Illuminate\Log\LogManager;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;

class GetWebinarConfirmedSpotsAction
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

    public function execute(string $webinar): ?int
    {
        try {
            $list = $this->apiInstance->getList(config('services.sendinblue.list_ids.webinars.' . $webinar . '.confirmed'));

            return $list['totalSubscribers'];
        } catch (\Exception $exception) {

            $this->log->error($exception->getMessage());
            $this->log->error($exception->getMessage());

            return null;
        }
    }
}
