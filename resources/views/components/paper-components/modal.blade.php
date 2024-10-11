<dialog id="my_modal_1" class="modal">
    <div class="modal-box">
      <p class="py-4">Crie uma nova página</p>

      <form action="/paper/create" method="POST">
        @csrf

        <label for="title">Título da página</label>
        <input type="text" name="title" id="title">

        <button type="reset" class="btn">Cancelar</button>
        <button type="submit" class="btn">Criar</button>
      </form>

    </div>
</dialog>
