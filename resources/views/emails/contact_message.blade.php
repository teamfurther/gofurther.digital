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