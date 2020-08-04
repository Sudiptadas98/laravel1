<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>It Works Again!</h1>

    <p>It sounds like you want to hear more about {{ $topic }}.</p>
</body>
</html> -->

@component('mail::message')

# A Heading

natur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem 

- A list
- goes
- here

natur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem 

@component('mail::button', ['url' => 'https://laracasts.com'])
Visit laracast
@endcomponent

@endcomponent