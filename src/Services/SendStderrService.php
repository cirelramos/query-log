<?php

namespace CirelRamos\QueryLog\Services;


use Illuminate\Support\Facades\Log;

/**
 *
 */
class SendStderrService
{
    /**
     * @param $message
     * @return void
     */
    public static function execute($message): void
    {
        Log::debug($message);
    }
}
