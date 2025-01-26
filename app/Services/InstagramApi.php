<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class InstagramApi
{
    protected $api;

    function __construct(){
        $this->api = new \RocketAPI\InstagramAPI(config('services.rocket_api_key'));
    }

    public function searchAccounts($q){
        $data = ['users'=> [
            [
                'pk' => 'resul',
                'full_name' => 'resul',
            ]
        ]];
        return $data;
        try {
            $data = $this->api->searchUsers($q);
        } catch (\Throwable $th) {
            Log::error('Rocket api instagram api error: ' . $th->getMessage());
        }

        return $data;
    }
}
