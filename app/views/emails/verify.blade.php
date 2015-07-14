<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verifikasi Alamat Email - ISCO 2015</h2>

        <div>
            Terima Kasih telah mendaftarkan tim anda untuk mengikuti Statistician Game ISCO 2015.
            <br><br>
            Username : {{$nama}} <br>
            Password : {{$password}} <br><br>

            Please follow the link below to verify your email address
            {{ URL::to('register/verify/' . $confirmation_code) }}.<br/>

        </div>

    </body>
</html>