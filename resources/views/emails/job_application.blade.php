<p>
    @if ($data['job'])
        {{ $data['name'] }} has applied for the job: {{ $data['job'] }}
    @else
        {{ $data['name'] }} has applied for a job.
    @endif
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
    <tr>
        <td>GIT:</td>
        <td>{!! $data['git'] !!}</td>
    </tr>
    <tr>
        <td>CV:</td>
        <td>{!! $data['cv'] !!}</td>
    </tr>
    <tr>
        <td colspan="2">Message:</td>
    </tr>
    <tr>
        <td colspan="2">{!! nl2br($data['message']) !!}</td>
    </tr>
</table>