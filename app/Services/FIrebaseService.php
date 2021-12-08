<?php

namespace App\Services;

use Kreait\Firebase;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class FirebaseService {

    protected $messaging;

    public function __construct()
    {
        $this->messaging = app('firebase.messaging');
    }

    public function createNotification($data)
    {
        return Notification::fromArray($data);
    }

    public function sendNotification($notification, $deviceToken, $data)
    {
        $message = CloudMessage::fromArray([
            'token'        => $deviceToken,
            'notification' => [
                'title' => 'title',
                ''
            ],
            'data'         => [
                'tset1' => 'value1'
            ]
        ]);
        
        $this->messaging->send($message);
    }

    public function sendNotif($notification)
    {
        $message = CloudMessage::fromArray([
            'token' => 'ionictest',
            'notification' => Notification::create('Laravel App', 'Laravel Body')
        ]);
        
        return $this->messaging->send($message);
    }
}