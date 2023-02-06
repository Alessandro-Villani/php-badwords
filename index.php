<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP Badwords</title>
</head>
<body>
    <h1 class="pt-5 text-center">Censura la parola</h1>
    <form class="container p-5 d-flex flex-column align-items-center" action="censored-paragraph.php" method="GET">
    <input class="w-50 mb-3" type="text" name="badword" placeholder="Inserisci parola da censurare...">
    <textarea class="w-50 mb-3" name="paragraph" id="paragraph" placeholder="Inserisci il paragrafo..." cols="30" rows="10"></textarea>
    <button  class="btn btn-primary">Invia</button>
    </form>
</body>
</html>