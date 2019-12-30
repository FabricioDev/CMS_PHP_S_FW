<h3 class="mb-5">Edição de Página</h3>

<form action="" method="post">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Insira o Título da Página..." required value="Página Inicial">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">/</span>
        </div>        
        <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL Amigável, deixe em branco para informar a página inicial...">
        </div>
    </div>

    <div class="form-group">
        <input id="pagesBody" type="hidden" name="body" value="<h3>Página Inicial</h3><p>Está é a página inicial.</p>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>
<hr>

<a href="/admin/pages/1" class="btn btn-info mb-4">Voltar</a>