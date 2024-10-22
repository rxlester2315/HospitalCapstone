@props(['url'])
<tr>
    <td class="header"
        style="text-align: center; padding: 30px; background-color: #000000; border-bottom: 1px solid #e8e8e8;">
        <a href="{{ $url }}" style="display: inline-block; text-decoration: none;">
            @if (trim($slot) === 'Laravel')
            <!-- Logo with black background -->
            <img src="{{ asset('imagezz/email_logo.jpg') }}" width="70" height="70" alt="Logo"
                style="display: block; margin-bottom: 10px;">
            @else
            <!-- Custom text with white color on black background -->
            <span style="font-size: 24px; font-weight: bold; color: #ffffff;">{{ $slot }}</span>
            @endif
        </a>
    </td>
</tr>