<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .imagem {
            width: 20%;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
    <title>Marista - Controle de alunos</title>
</head>

<body style="background-color: #F8F8FF">
    <div class="container">
        <img src="marista.png" class="imagem">
        <div class="d-flex justify-content-center">
            <h3>Cadastro de alimentação dos alunos</h3>
        </div>

        <table class="table mt-5">
            <thead>
                <th scope="col" style="text-align:center">Aluno</th>
                <th scope="col" style="text-align:center">Turma</th>
                <th scope="col" style="text-align:center">Cardápio</th>
                <th scope="col" style="text-align:center">Observação</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        Aluno 1
                    </th>
                    <td style="text-align:center">
                        A
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <select>
                                <option val="" selected disabled>Selecione</option>
                                <option val="1">1</option>
                                <option val="2">2</option>
                                <option val="3">3</option>
                                <option val="4">4</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <input type="text" class='w-100'>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Aluno 2
                    </th>
                    <td style="text-align:center">
                        B
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <select>
                                <option val="" selected disabled>Selecione</option>
                                <option val="1">1</option>
                                <option val="2">2</option>
                                <option val="3">3</option>
                                <option val="4">4</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <input type="text" class='w-100'>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Aluno 3
                    </th>
                    <td style="text-align:center">
                        A
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <select>
                                <option val="" selected disabled>Selecione</option>
                                <option val="1">1</option>
                                <option val="2">2</option>
                                <option val="3">3</option>
                                <option val="4">4</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <input type="text" class='w-100'>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Aluno 4
                    </th>
                    <td style="text-align:center">
                        A
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <select>
                                <option val="" selected disabled>Selecione</option>
                                <option val="1">1</option>
                                <option val="2">2</option>
                                <option val="3">3</option>
                                <option val="4">4</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <input type="text" class='w-100'>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-info" onclick="alert('Dados salvos!')">Salvar</button>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>