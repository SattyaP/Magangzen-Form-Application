<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap');
    *{
        font-family: 'Quicksand', sans-serif;
    }
    .bg-light{
        background-color: #707070
    }
    .bg-email{
            background-color: #FFFFFF;
            width: 100%;
            margin: auto;
            height: auto;
            max-width: 948px;
            padding: 10px 0px;
    }
    </style>
</head>
<body class="bg-light">
    <div class="bg-email">
            <p style="font-size: 24px; font-weight: 600;">Hallo Admin,</p>
            <p style="font-size: 16px; font-weight: 400;">Dapat Masukan nih dari : {{ $name }}</p>
        <hr>
        <p style="font-size: 16px; font-weight: 700;" >Nama : {{ $name }}</p>
        <p style="font-size: 16px; font-weight: 700;" >Email : {{ $email }}</p>
        <p style="font-size: 16px; font-weight: 700;" >Message : {{ $user_message }}</p>
        <hr>
        <p style="font-size: 16px; font-weight: 400;">Thanks Hope Your Today is Good</p>
    </div>
</body>
</html>