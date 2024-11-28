<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Apn\ApnChannel;
use NotificationChannels\Apn\ApnMessage;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as FCMNotification;
use Carbon\Carbon;
use Kreait\Firebase\Messaging\ApnsConfig;
use Kreait\Firebase\Messaging\ApnsPayload;
class AppointmentDeletedNotification extends Notification
{
    use Queueable;

    protected $appointmentDate;

    public function __construct($appointmentDate)
    {
        $this->appointmentDate = $appointmentDate;
    }
    public function via($notifiable)
    {
        return [];
    }

    public function toFcm($notifiable)
    {
        $token = $notifiable->fcm_token;
        $factory = (new Factory)->withServiceAccount(base_path('config/serverkey.json'));
        $messaging = $factory->createMessaging();

        $appointmentDate = Carbon::parse($this->appointmentDate);
        $formattedDate = $appointmentDate->translatedFormat('l j \\d\\e F \\d\\e Y \\a \\l\\a\\s g:i A');

        $messageText = "Se ha eliminado un appointment programado para el: $formattedDate";

        $message = CloudMessage::withTarget('token', $token)
            ->withNotification(FCMNotification::create('Appointment Eliminado', $messageText))
            ->withData(['extra_info' => $formattedDate]);

        try {
            $messaging->send($message);
        } catch (\Kreait\Firebase\Exception\MessagingException $e) {
            \Log::error('Error al enviar la notificación FCM: ' . $e->getMessage());
        }

    }

    public function toArray($notifiable)
    {
        return [
            'appointment_date' => $this->appointmentDate,
        ];
    }
}


