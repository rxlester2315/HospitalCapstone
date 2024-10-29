@props(['url'])
<tr>
    <td class="header"
        style="text-align: center; padding: 20px; background: linear-gradient(135deg, #6a11cb, #2575fc); border-bottom: 1px solid #ddd;">
        <a href="{{ $url }}" style="display: inline-block; text-decoration: none; max-width: 100%;">
            @if (trim($slot) === 'Laravel')
            <!-- Centered Logo with modern styling and alignment -->
            <img src="{{asset('admins/assets/images/logo/logo.png')}}" width="80" height="80" alt="Logo"
                style="display: block; margin: 0 auto 10px; border-radius: 10px; max-width: 100%;">
            @else
            <!-- Custom text with enhanced readability and spacing -->
            <span
                style="font-size: 28px; font-weight: bold; color: #ffffff; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3); display: block; line-height: 1.2;">
                {{ $slot }}
            </span>
            @endif
        </a>
    </td>
</tr>