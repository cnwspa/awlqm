<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img class="max-h-24 w-24" src="{{asset('img/logo.jpg')}}" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
