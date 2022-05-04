    <div class="row">
        <div class="col">
            <h2>Cadastro de Pessoas</h2>
        </div>
    </div>

    <form method="post" action="gravar">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Nome: </label>
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Profissão: </label>
                    <input type="text" class="form-control" name="profissao">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Idade: </label>
                    <input type="text" class="form-control" name="idade">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mt-3" type="button">enviar</button>
                </div>
            </div>    
        </div>
    </form>