@extends('layouts.test')

@section('content')
    <br>

    <div class="col-sm-offset-2 col-sm-8">
        <div class="form-horizontal">
            <div class="form-group">
                <input type="search" class="form-control" id="search-query" placeholder="Enter search query ...">
            </div>

            <div class="form-group" id="search-result">

            </div>
        </div>
    </div>
@endsection

@push('style')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #000000;
            font-family: 'Raleway', sans-serif;
            font-weight: 300;
            height: 100vh;
            margin: 0;
        }
        .alert-danger {
            display: inline-block;
            width: 100%;
        }
    </style>
@endpush

@push('script')
    <script>
        var search = $('#search-query');

        search.on('input', function () {
            var query = $(this).val();
            var resultWrap = $('#search-result');

            if (query.length <= 0) {
                resultWrap.html('');
                return false;
            }

            $.ajax({
                type: "post",
                url: "{{ asset('/algolia') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    query: query
                },
                dataType: "json",
                success: function (response) {

                    resultWrap.html('');

                    if (response.length > 0) {
                        $.each(response, function (key, value) {
                            resultWrap.append(
                                '<span class="form-control">' +
                                value.name +
                                '</span>'
                            );
                        });
                    } else {
                        resultWrap.append(
                            '<span class="alert alert-danger">' +
                                'Nothing was found' +
                            '</span>'
                        );
                    }
                }
            });
        });
    </script>
@endpush

