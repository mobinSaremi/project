@if(isset($errors))
    @if($errors->any() || Session::has('error'))

        @if(Session::has('error'))
            <script>
                var msg = " {!!Session::get('error')!!}";
                swal("خطا", msg, "error", {
                    button: "باشه",
                })
            </script>
        @endif
        @if(isset($errors))
            @foreach($errors->all() as $error )
                <script>
                    var msg = "{!! $error !!}";
                    swal("خطا", msg, "error", {
                        button: "باشه",
                    })
                </script>
            @endforeach
        @endif
    @endif
@endif


{{--@if(Session::has('success_confirm'))--}}
{{--    <script>--}}
{{--        var msg = "{!!Session::get('success_confirm')!!}";--}}
{{--        swal("اعتبارسنجی با موفقیت انجام شد", msg, "success")--}}
{{--    </script>--}}
{{--@endif--}}

@if(Session::has('success'))
    <script>
        var msg = "{!!Session::get('success')!!}";
        swal("موفق", msg, "success")
        button: "باشه",
    </script>
@endif

@if(Session::has('info'))
    <script>
        var msg = "{!!Session::get('info')!!}";
        swal("", msg, "info", {
            button: "باشه",
        })
    </script>
@endif
@if(Session::has('success'))
    <script>
        var msg = "{!!Session::get('success')!!}";
        swal("", msg, "success", {
            button: "باشه",
        })
    </script>
@endif

@if(isset($info))
    <script>
        var msg = "{!!$info!!}";
        swal("", msg, "info", {
            button: "باشه ",
        })
    </script>
@endif
