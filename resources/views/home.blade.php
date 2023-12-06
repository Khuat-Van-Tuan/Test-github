<h1>Trang chủ</h1>
<div>{{$welcome}}</div><br>
<div>{{$content}}</div><br>
<div>{!!$content!!}</div>
<?php
echo request()->all()['key'];
?>

<hr>
$@while ($index <= 3)
<p>phần tử thứ: {{$index}}
    
    @php 
    $index++;
    @endphp
@endwhile
@if ($number==261020011)
    <p>
        đây là giá trị hợp lệ
    </p>
    @else
    <p>
        giá trị không hợp lệ
    </p>
@endif
<hr>
@php
    $message = 'ok';
@endphp
@include('parts.notice')