<!-- @props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
<img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path('imagezz/email_logo.jpg'))) }}" alt="{{ config('app.name') }}" style="height: 50px;">

            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr> -->