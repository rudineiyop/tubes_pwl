<style>
    p {
  font-family: 'Source Code Pro', monospace;  
  font-size: 28px;
  font-weight: bold;
  width: 400px;
}
</style>

@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
        
    </div>
    <p>Mau Ngapain Nih ....</p>
@endsection

@section('script')

<script>
var content = 'Halo, selamat datang, kamu mau ngapain nih *ﾟ+';

var ele = '<span>' + content.split('').join('</span><span>') + '</span>';


$(ele).hide().appendTo('p').each(function (i) {
    $(this).delay(100 * i).css({
        display: 'inline',
        opacity: 0
    }).animate({
        opacity: 1
    }, 100);
});
</script>

@endsection