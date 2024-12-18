
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accusé de réception</title>

    <style>
        h2{

            color:  #337ab7;
            font-weight: bold;
        }

        p{
            font-size: 15px;

        }
        ul li{
            margin-top: 15px;
            font-size: 15px;
        }

        .titre{
            width: 100%;
            background-color: #5255db;
            color: white;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
    <div style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; padding-bottom: 50px;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">

   <p>Cher {{ $user->nom }} {{ $user->prenom }},</p>
   <p>Nous avons reçu votre candidature et nous vous remercions pour l'intérêt que vous portez à notre société.</p>

    <p>L'équipe OTCI Groupe.</p>
</div>
</div>
</body>

</html>
