<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<style>
    /* Base */
    body, body *:not(html):not(style):not(br):not(tr):not(td):not(code) {
        box-sizing: border-box;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 14px;
    }

    body {
        background-color: #ffffff;
        color: #696c6f;
        height: 100%;
        -moz-hyphens: auto;
        -webkit-hyphens: auto;
        hyphens: auto;
        line-height: 1.5;
        margin: 0;
        -webkit-text-size-adjust: none;
        width: 100% !important;
        -ms-word-break: break-all;
        word-break: break-all;
        word-break: break-word;
    }

    p,
    ul,
    ol,
    blockquote {
        line-height: 1.5;
        text-align: left;
    }

    a {
        color: #9eb01e;
    }

    a img {
        border: none;
    }

    /* Typography */
    h1 {
        color: #333333;
        font-family: "Montserrat", "Gotham", "Futura", Arial, sans-serif;
        font-size: 20px;
        font-weight: 700;
        margin-top: 0;
        text-align: left;
        text-transform: uppercase;
    }

    h2 {
        color: #333333;
        font-family: "Montserrat", "Gotham", "Futura", Arial, sans-serif;
        font-size: 16px;
        font-weight: 700;
        margin-top: 0;
        text-align: left;
        text-transform: uppercase;
    }

    h3 {
        color: #333333;
        font-family: "Montserrat", "Gotham", "Futura", Arial, sans-serif;
        font-size: 14px;
        font-weight: 700;
        margin-top: 0;
        text-align: left;
        text-transform: uppercase;
    }

    p {
        color: #696c6f;
        font-size: 14px;
        line-height: 1.5em;
        margin-top: 0;
        text-align: left;
    }

    p.sub {
        font-size: 12px;
    }

    img {
        max-width: 100%;
    }

    /* Layout */
    .wrapper {
        background-color: #faf7f7;
        margin: 0;
        padding: 0;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
        width: 100%;
    }

    .content {
        margin: 0;
        padding: 0;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
        width: 100%;
    }

    /* Header */
    .header {
        padding: 25px 0;
        text-align: center;
    }

    .header a {
        color: #9eb01e;
        font-size: 19px;
        font-weight: bold;
        text-decoration: none;
        text-shadow: 0 1px 0 #ffffff;
    }

    /* Logo */
    .logo {
        max-height: 50px;
    }

    /* Body */
    .body {
        background-color: #ffffff;
        margin: 0;
        padding: 0;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
        width: 100%;
    }

    .inner-body {
        background-color: #ffffff;
        margin: 0 auto;
        padding: 0;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 570px;
        width: 570px;
    }

    /* Footer */
    .footer {
        margin: 0 auto;
        padding: 0;
        text-align: center;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 570px;
        width: 570px;
    }

    .footer p {
        color: #696c6f;
        font-size: 12px;
        text-align: center;
    }

    /* Tables */
    .table table {
        margin: 30px auto;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
        width: 100%;
    }

    .table th {
        border-bottom: 1px solid #f7efe8;
        padding-bottom: 8px;
        margin: 0;
    }

    .table td {
        color: #ffffff;
        font-size: 13px;
        line-height: 18px;
        padding: 10px 0;
        margin: 0;
    }

    .content-cell {
        padding: 35px;
    }

    /* Buttons */
    .action {
        margin: 30px auto;
        padding: 0;
        text-align: center;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
        width: 100%;
    }

    .button {
        background-color: #9eb01e;
        border: none;
        border-radius: 3px;
        color: #ffffff;
        display: inline-block;
        font-family: "Montserrat", "Gotham", "Futura", Arial, sans-serif;
        font-size: 12px;
        height: 30px;
        line-height: 30px;
        padding: 0 10px;
        text-decoration: none;
        text-transform: uppercase;
        -webkit-text-size-adjust: none;
    }

    @media only screen and (max-width: 600px) {
        .inner-body {
            width: 100% !important;
        }

        .footer {
            width: 100% !important;
        }
    }

    @media only screen and (max-width: 500px) {
        .button {
            width: 100% !important;
        }
    }
</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table class="content" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="header">
                        <a href="{{ config('app.url') }}">
                            <img class="logo" src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name') }}" />
                        </a>
                    </td>
                </tr>

                <!-- Email Body -->
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0">
                        <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0">
                            <!-- Body content -->
                            <tr>
                                <td class="content-cell">
                                    {{ Illuminate\Mail\Markdown::parse($slot) }}
                                    <br /><br /><br />
                                    <p>Regards,<br />{{ config('app.name') }}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-cell" align="center">
                                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
