<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    public function index(): View
    {
        $messages = ContactMessage::latest()->paginate(15);

        return view('admin.messages.index', compact('messages'));
    }

    public function show(ContactMessage $contactMessage): View
    {
        if (! $contactMessage->read_at) {
            $contactMessage->update(['read_at' => now()]);
        }

        return view('admin.messages.show', compact('contactMessage'));
    }

    public function markAsRead(ContactMessage $contactMessage): RedirectResponse
    {
        $contactMessage->update(['read_at' => now()]);

        return redirect()->route('admin.messages.index')->with('status', 'বার্তাটি পড়া হয়েছে হিসেবে চিহ্নিত করা হয়েছে।');
    }

    public function markAsUnread(ContactMessage $contactMessage): RedirectResponse
    {
        $contactMessage->update(['read_at' => null]);

        return redirect()->route('admin.messages.index')->with('status', 'বার্তাটি অপঠিত হিসেবে চিহ্নিত করা হয়েছে।');
    }
}
