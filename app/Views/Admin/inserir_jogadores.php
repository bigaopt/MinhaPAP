<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="multiple-column-form">
        <div class="row match-height" >
            <div class="col-11 placares">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="card-title" >Inserir jogador</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nome</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                placeholder="Nome" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Cartão cidadão</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                placeholder="Cartão cidadão" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Data de nascimento</label>
                                            <input type="date" id="city-column" class="form-control" placeholder="Data de nascimento"
                                                name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Nacionalidade</label>
                                            <input type="text" id="country-floating" class="form-control"
                                                name="country-floating" placeholder="Nacionalidade">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Morada</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="company-column" placeholder="Morada">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Código Postal</label>
                                            <input type="email" id="email-id-column" class="form-control"
                                                name="email-id-column" placeholder="Código Postal">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Número Telemovel</label>
                                            <input type="email" id="email-id-column" class="form-control"
                                                name="email-id-column" placeholder="Número de telemovel">
                                        </div>
                                    </div>
                                    <div class="col-12   d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Inserir</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Limpar campos</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>