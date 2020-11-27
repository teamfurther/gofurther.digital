<p>
    {{ $data['name'] }} has just subsribed to our newsletter.
</p>

<table>
    <tr>
        <td style="width: 100px;">Name:</td>
        <td>{!! $data['name'] !!}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{!! $data['email'] !!}</td>
    </tr>
</table>