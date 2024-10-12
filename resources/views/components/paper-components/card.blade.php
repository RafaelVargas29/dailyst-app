@props ([
    'title'
])

<div class="card bg-orange-500 w-96 shadow-xl p-3 text-black font-bold">
    <div class="flex justify-between">
        <div >
            <h1>{{ $title }}</h1>
        </div>

        <div>
            <button class="btn btn-primary">Visualizar</button>
        </div>
    </div>
</div>
