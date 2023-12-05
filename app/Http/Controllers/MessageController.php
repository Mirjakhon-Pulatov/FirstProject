<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    public function send(Request $request, Message $message)
    {
        $message = Message::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'subject' => $request['subject'],
           'message' => $request['message'],
        ]);
        Alert::success('Сообщение успешно отправлено', 'Наши специалисты скоро свяжутся с вами !');
        return redirect()->back();
    }


    public function messages()
    {
        $user = User::first();
        dd($user->name);

        $messages = Message::latest()->get();
//        dd($messages);
        return view('auth.partials.messages', compact('messages'));
    }


    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect(route('messages'));
    }
}
