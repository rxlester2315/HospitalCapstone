@props(['url'])
<tr>
    <td class="header"
        style="text-align: center; padding: 30px; background-color: #f4f4f7; border-bottom: 1px solid #e8e8e8;">
        <a href="{{ $url }}" style="display: inline-block; text-decoration: none;">
            @if (trim($slot) === 'Laravel')
            <!-- Logo for Laravel emails -->
            <img src="{{ asset('imagezz/email_logo.jpg') }}" width="70" height="70" alt="Logo"
                style="display: block; margin-bottom: 10px;">
            @else
            <!-- Custom text for non-Laravel emails -->
            <span style="font-size: 24px; font-weight: bold; color: #0c7cd5;">{{ $slot }}</span>
            @endif
        </a>
    </td>
</tr>