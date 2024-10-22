@props(['url'])
<tr>
    <td class="header" style="text-align: center; padding: 20px;">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="{{ asset('imagezz/email_logo.jpg') }}" width="70" height="70" alt="Logo" style="display: block;">
            @else
            <span style="font-size: 20px; font-weight: bold; color: #333;">{{ $slot }}</span>
            @endif
        </a>
    </td>
</tr>