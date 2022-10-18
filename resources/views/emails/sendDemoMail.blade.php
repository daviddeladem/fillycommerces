@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    {{-- Body --}}
    <h1>{{ $maildata['title'] }}</h1>
    <p>{{ $maildata['line1'] . '' . $maildata['name'] }}</p>
    <p>{{ $maildata['line2'] }}</p>
    <h1>{{ $maildata['code'] }}</h1>
    <p>{{ $maildata['line3'] }}</p>
    {{ $slot ?? '' }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
