@extends('layouts.test')

@section('content')
    <br>

    <div class="col-sm-offset-2 col-sm-4">
        <div class="form-group">
            <span class="form-control">
                @lang('test.lang', ['key' => $lang])
            </span>
        </div>
        <br>
        <div class="form-group">
            <span class="form-control">
                {{ trans_choice('test.count', 2, ['key' => 2]) }}
            </span>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <select id="set-locale" class="form-control">
                <option value="ua" {{ $lang == 'ua' ? ' selected': '' }}>UA</option>
                <option value="en" {{ $lang == 'en' ? ' selected': '' }}>EN</option>
                <option value="ru" {{ $lang == 'ru' ? ' selected': '' }}>RU</option>
            </select>
        </div>
    </div>
@endsection

@push('script')
<script>
    $('#set-locale').on('change', function () {
        var lang = $(this).val();

        return window.location.href = window.location.origin + '/set-locale/' + lang;
    });
</script>
@endpush