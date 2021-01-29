<p>
    Dear {{ $data['name'] }},<br /><br />
</p>
<p>
    We are glad you found our resources useful. Please contact us if you need further advice.<br /><br />
</p>
<p>
    <a href="{{ localizedRoute('freebies.download') }}?key={{ \Crypt::encrypt($data['freebie']) }}"
       style="background-color: #6ecbbf; border: none; border-radius: 5px; color: #ffffff; cursor: pointer; display: inline-block; font: 400 14px / 1 sans-serif; padding: 15px; text-align: center; text-decoration: none; text-transform: uppercase; transition: .2s all ease-in-out;"
    >
        Download
    </a><br /><br />
</p>
<p>
    Cordially,<br />
    Péter Illés<br />
    Head of Strategy @ Further Digital Solutions
</p>
