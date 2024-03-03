<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cheerpen | Dashboard</title>
    <link rel="icon" href="{{ asset('/img/WTV.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row-my-3">
            <div class="col-lg-8 py-4">
                {{-- Post Title --}}
                <h3 class="mb-3">
                    {{ $post->title }}
                </h3>

                {{-- Post Image --}}
                @if ($post->image)
                    <div style="max-height:400px; max-width:500px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid my-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600/?{{ $post->genre->name }}" class="img-fluid my-3">
                @endif

                <br><br>

                {{-- Body --}}
                <div class="lead">
                    {!! $post->body !!}
                </div>


            </div>
        </div>
    </div>

<script type="text/javascript">
    window.onload = function() {
        window.print();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/dashboard.js') }}"></script>
</body>

</html>
