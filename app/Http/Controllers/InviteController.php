<?php

// app/Http/Controllers/InviteController.php

namespace App\Http\Controllers;

use App\Models\InviteCode;
use App\Models\Gift;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;
use App\Mail\GiftSelected;

class InviteController extends Controller
{
    public function showInviteForm()
    {
        return Inertia::render('Invite/Form');
    }

    public function verifyInviteCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|string|exists:invite_codes,code',
        ], [
            'email.required' => 'E-mail é obrigatório.',
            'email.email' => 'E-mail inválido.',
            'code.required' => 'Código de convite é obrigatório.',
            'code.string' => 'Código de convite inválido.',
            'code.exists' => 'Código de convite inválido.',
        ]);

        $inviteCode = InviteCode::where('code', $request->code)->first();

        if ($inviteCode->used) {
            return redirect()->back()->withErrors(['code' => 'Este código já foi usado.']);
        }

        $inviteCode->email = $request->email;
        $inviteCode->save();

        return Inertia::render('Invite/SelectGift', ['inviteCode' => $inviteCode]);
    }

    public function selectGift(Request $request, InviteCode $inviteCode)
    {
        $request->validate([
            'gift_id' => 'required|exists:gifts,id',
        ]);

        $gift = Gift::find($request->gift_id);

        if ($gift->is_selected) {
            return redirect()->back()->withErrors(['gift' => 'Este presente já foi selecionado.']);
        }

        $gift->update([
            'is_selected' => true,
            'invite_code_id' => $inviteCode->id,
        ]);

        $inviteCode->update(['used' => true]);

        Mail::to('lucasgamer4i50@gmail.com')->send(new GiftSelected($gift, $inviteCode));
        Mail::to($inviteCode->email)->send(new GiftSelected($gift, $inviteCode));

        return redirect()->route('thank-you');
    }
}
