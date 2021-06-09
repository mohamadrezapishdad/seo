<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
</head>
<body>
<div class="s002">
    <form action="result" method="get">
        <fieldset>
            <legend>Check SEO</legend>
        </fieldset>
        <div class="inner-form">
            <div class="input-field first-wrap">
                {{--<div class="icon-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                    </svg>
                </div>--}}
                <input id="home" name="home_url" type="text" placeholder="Your home page" />
            </div>
            <div class="input-field first-wrap">
                {{--<div class="icon-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                    </svg>
                </div>--}}
                <input id="product" name="product_url" type="text" placeholder="Your product or archive page" />

            </div>

            <div class="input-field fifth-wrap">
                <button class="btn-search" type="submit">Analyze</button>
            </div>
        </div>
    </form>
</div>
<script src="{{asset('js/extention/choices.js')}}"></script>
<script src="{{asset('js/extention/flatpickr.js')}}"></script>
<script>
    flatpickr(".datepicker",
        {});

</script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',
        });

</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
