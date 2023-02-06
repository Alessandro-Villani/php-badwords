<?php 

$badword = trim($_GET['badword']);
$paragraph = trim($_GET['paragraph']);
$paragraph_length = strlen($paragraph);

$censored_paragraph = str_replace($badword, '***', strtolower($paragraph));
$censored_paragraph_length = strlen($censored_paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Paragraphs</title>
</head>
<body>
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-8 m-auto">
                <div class="card p-3 mb-5">
                    <h1 class="mb-5">Paragrafo originale</h1>
                    <p class="mb-5"><?= ucfirst($paragraph) ?></p>
                    <p>Questo paragrafo è lungo <b><?= $paragraph_length ?></b> caratteri</p>
                </div>
            </div>
            <div class="col-8 m-auto">
                <div class="card p-3">
                    <h1 class="mb-5">Paragrafo censurato</h1>
                    <p class="mb-5"><?= ucfirst($censored_paragraph) ?></p>
                    <p>Questo paragrafo è lungo <b><?= $censored_paragraph_length ?></b> caratteri</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>