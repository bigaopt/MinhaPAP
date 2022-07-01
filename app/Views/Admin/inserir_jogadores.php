<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card card-tabelas">
                <div class="card-header">
                    <h4 class="card-title">Inserir Jogador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/inserir_jogadores') ?>">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Nome Completo" name="nome-column" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="cc">Cartão Cidadão</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Cartão de Cidadão" name="cc-column" maxlength="9" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="data_nascimento">Data de nascimento</label>
                                        <input type="date" id="data-column" class="form-control" placeholder="Data" name="data-column" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="genero">Genero</label>
                                        <select class="form-select" name="genero-column">
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nacionalidade">Nacionalidade</label>
                                        <select class="form-select" name="nacionalidade-column">
                                            <option value="alemã(ão)">alemã(ão)</option>
                                            <option value="argentino(a)">argentino(a)</option>
                                             <option value="brasileiro(a)">brasileiro(a)</option>
                                            <option value="belga">belga</option>
                                            <option value="cabo-verdiano(a)">cabo-verdiano(a)</option>
                                            <option value="colombiano(a)">colombiano(a)</option>
                                            <option value="dinamarquês(esa">dinamarquês(esa)</option>
                                            <option value="espanhol(a)">espanhol(a)</option>
                                            <option value="norte-americano(a)">norte-americano(a)</option>
                                            <option value="francês(esa)">francês(esa)</option>
                                            <option value="ganês(a)">ganês(a)</option>
                                            <option value="guineano(a)">guineano(a)</option>
                                            <option value="inglês(esa)">inglês(esa)</option>
                                            <option value="italiano(a)">italiano(a)</option>
                                            <option value="luxemburguês(a)">luxemburguês(a) </option>
                                            <option value="marroquino(a)">marroquino(a)</option>
                                            <option value="mexicano(a)">mexicano(a)</option>
                                            <option value="norueguês(esa)">norueguês(esa)</option>
                                            <option value="neerlandês(a)">neerlandês(a)</option>
                                            <option value="português(esa)" selected>português(esa)</option>
                                            <option value="britânico(a)">britânico(a)</option>
                                            <option value="suíço(a)">suíço(a)</option>
                                            <option value="venezuelano(a)">venezuelano(a)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="morada">Morada</label>
                                        <input type="text" id="company-column" class="form-control" name="morada-column" placeholder="Morada" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="codigo-postal">Código Postal</label>
                                        <input type="text" id="email-id-column" class="form-control" name="CodPostal-column" placeholder="Código Postal" required pattern="\d{4}-\d{3}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="telemovel">Telemóvel</label>
                                        <input type="text" id="company-column" class="form-control" name="telemovel-column" placeholder="Telemóvel" maxlength="9" required>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-1 mb-1">Inserir jogador</button>
                                    <button type="reset" class="btn btn-dark me-1 mb-1">Limpar campos</button>
                                    <a href="/tabela_jogadores" ><button type="button" class="btn btn-danger">Voltar à tabela</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
