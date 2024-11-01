<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramNotification
{
    protected $token;
    protected $recepientId;

    public function __construct()
    {
        $this->token = env('TELEGRAM_BOT_TOKEN');
        $this->recepientId = env('TELEGRAM_RECEIPIENT');
    }

    public function sendMessage($message)
    {
        try {
            $preparedMessage = $this->prepareMessage($message);
            $telegramUrl = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->recepientId&text=";
            $response = file_get_contents($telegramUrl . $preparedMessage);
            return json_decode($response)->ok ? true : throw new \Exception('Failed to send message.');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    private function prepareMessage($message)
    {
        // Decode the message to a string if necessary
        return (string) $message;
    }
}
