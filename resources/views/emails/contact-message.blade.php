<p>
    {{ $data['name'] }} has sent you a message.
</p>

<table>
    <tr>
        <td style="width: 100px;">Name:</td>
        <td>{!! $data['name'] !!}</td>
    </tr>
    @if ($data['company'])
    <tr>
        <td>Company:</td>
        <td>{!! $data['company'] !!}</td>
    </tr>
    @endif
    <tr>
        <td>Email:</td>
        <td>{!! $data['email'] !!}</td>
    </tr>
    @if ($data['phone'])
    <tr>
        <td>Phone:</td>
        <td>{!! $data['phone'] !!}</td>
    </tr>
    @endif
    <tr>
        <td colspan="2">Message:</td>
    </tr>
    <tr>
        <td colspan="2">{!! nl2br($data['message']) !!}</td>
    </tr>
</table>
<table style="margin-top: 30px;">
    <tbody style="font-size: 9px;">
        @if ($data['utm']['utm_source'])
        <tr>
            <td>utm_source:</td>
            <td>{!! $data['utm']['utm_source'] !!}</td>
        </tr>
        @endif
        @if ($data['utm']['utm_medium'])
        <tr>
            <td>utm_medium:</td>
            <td>{!! $data['utm']['utm_medium'] !!}</td>
        </tr>
        @endif
        @if ($data['utm']['utm_campaign'])
        <tr>
            <td>utm_campaign:</td>
            <td>{!! $data['utm']['utm_campaign'] !!}</td>
        </tr>
        @endif
        @if ($data['utm']['utm_term'])
        <tr>
            <td>utm_term:</td>
            <td>{!! $data['utm']['utm_term'] !!}</td>
        </tr>
        @endif
        @if ($data['utm']['utm_content'])
        <tr>
            <td>utm_content:</td>
            <td>{!! $data['utm']['utm_content'] !!}</td>
        </tr>
        @endif
        @if ($data['utm']['entry'])
        <tr>
            <td>entry_url:</td>
            <td>{!! $data['utm']['entry'] !!}</td>
        </tr>
        @endif
        @if ($data['utm']['referer'])
        <tr>
            <td>referer_url:</td>
            <td>{!! $data['utm']['referer'] !!}</td>
        </tr>
        @endif
    </tbody>
</table>