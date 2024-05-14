<?php

// app/Mail/GiftSelected.php

namespace App\Mail;

use App\Models\Gift;
use App\Models\InviteCode;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GiftSelected extends Mailable
{
    use Queueable, SerializesModels;

    public $gift;
    public $inviteCode;

    public function __construct(Gift $gift, InviteCode $inviteCode)
    {
        $this->gift = $gift;
        $this->inviteCode = $inviteCode;
    }

    public function build()
    {
        return $this->subject('Presente Selecionado')
            ->view('emails.gift-selected');
    }
}
