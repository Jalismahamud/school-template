<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateSchoolSettingRequest;
use App\Models\SchoolSetting;
use App\Traits\ConvertsImageToWebp;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SchoolSettingController extends Controller
{
    use ConvertsImageToWebp;

    public function edit(): View
    {
        $setting = SchoolSetting::current();

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateSchoolSettingRequest $request): RedirectResponse
    {
        $setting = SchoolSetting::query()->first();
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $this->deleteStoredImage($setting?->logo);
            $data['logo'] = $this->storeAsWebp($request->file('logo'), 'school');
        }

        if (! $setting) {
            $setting = new SchoolSetting(SchoolSetting::defaults());
        }

        $setting->fill($data)->save();

        return redirect()->route('admin.settings.edit')->with('status', 'বিদ্যালয়ের তথ্য সফলভাবে আপডেট হয়েছে।');
    }
}
