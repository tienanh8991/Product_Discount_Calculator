<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .tab {
            width: 400px;
            margin-left: 25%;
        }
    </style>
</head>
<body>

<form >
    <fieldset class="tab">
        <legend><h2>Product Discount Calculator</h2></legend>
        <label>
            <p>Product Description: {{$description}} </p>
        </label>
        <label>
            <p>List Price: {{$price}}  </p>
        </label>
        <label>
            <p>Discount Percent: {{$percent}} %</p>
        </label>
        <label>
            <p>Discount Amount: {{$amount}}</p>
        </label>
        <label>
            <p>Discount Price: {{$lastPrice}}</p>
        </label>
    </fieldset>
</form>
</body>
</html>
