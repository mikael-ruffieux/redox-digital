<!doctype html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
    </head>
    <body style="width: 100vw; min-height: 100vh; background: #cacaca; font-family: 'Poppins', sans-serif; margin: 0;">
        <main style="max-width: 600px; margin: auto; background: #fff; padding: 20px;">
            <h2>Prise de contact | <b> redoxdigital.ch </b></h2>
            @foreach ($results as $result)
            <h4>{{$result['label']}}</h4>
            <p>{{$result['value']}}</p>
            @endforeach
        </main>
    </body>
</html>