
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criando página</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="">
        <x-icons.plus
            class="h-10 w-10 text-purple-500 hover:text-purple-700 cursor-pointer"
            onclick="my_modal_1.showModal()"
        />
        <x-paper-components.modal />
    </div>

    <div class="pl-5">
        @foreach ($papers as $p)
            <div class="pt-3">
                <x-paper-components.card title="{{ $p->title }}"/>
            </div>
        @endforeach
    </div>
</body>
</html>

