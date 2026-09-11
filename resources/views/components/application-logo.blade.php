@php($schoolSettings = \App\Models\SchoolSetting::current())
<img src="{{ $schoolSettings->logo_url }}" alt="{{ $schoolSettings->school_name }}" {{ $attributes->merge(['class' => 'object-contain']) }}>
