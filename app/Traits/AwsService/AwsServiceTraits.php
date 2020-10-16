<?php

namespace App\Traits\AwsService;

use Aws\Credentials\Credentials;
use Aws\Pinpoint\PinpointClient;

/**
 * Trait AwsServiceTraits
 *
 * @package App\Traits\AwsService
 */
trait AwsServiceTraits
{
    /**
     * @param string $message
     * @param string $phone
     *
     * @return mixed
     */
    public function pinpointSendSmS(string $message, string $phone)
    {
        $pinpointClient = new PinpointClient([
            'credentials' => new Credentials(env("PINPOINT_KEY"), env("PINPOINT_KEY_SECRET")),
            'region' => env("PINPOINT_REGION"),
            'version' => env("PINPOINT_VERSION"),
        ]);

        $isProduction = env('APP_ENV') === 'production';
        if ($isProduction) {
            $status = $pinpointClient->sendMessages([
                'ApplicationId' => env("PINPOINT_APP_ID"),
                'MessageRequest' => [
                    'Addresses' => [$phone],
                    'MessageConfiguration' => [
                        'SMSMessage' => [
                            'Body' => $message,
                            'MessageType' => 'TRANSACTIONAL',
                        ],
                    ],
                ],
            ]);

            return $status->toArray();
        }
    }

}
