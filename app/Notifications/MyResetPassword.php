<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Session;

class MyResetPassword extends ResetPassword
{

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Recuperar clave')
            ->greeting('Hola' .$notifiable->name)
            ->from('guauser@gmail.com', 'Guauser.com')
            ->greeting('Hola')
            ->line('Estás recibiendo este correo porque hiciste una solicitud de recuperacion de clave para tu cuenta.')
            ->action('Recuperar clave', url('password/reset', $this->token))
            ->line('Si no realizaste esta solicitud, no se requiere realizar ninguna otra acción.')
            ->salutation('¡Saludos!');
    }

}
