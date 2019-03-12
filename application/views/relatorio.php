<!DOCTYPE html>
<html>
    <head>
        <title>Relatório</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/relatorio.css">
            
        </style>
    </head>
    <body>
        <div>
            <p id="titulo"><b>Solides Tecnologia</b></p>
            <p id="subtitulo"><b>Relatório de Apontamentos</b></p>
            <p style="margin-left: 5px"><b>Usuário: </b><?php echo $_SESSION['usuario'];?></p>
        </div>
        <table id="tabela">
            <thead>
                <tr>
                    <th class="celula_head">Data Registro</th>
                    <th class="celula_head">Hora</th>
                    <th class="celula_head">Tipo Registro</th>
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <td class="celula_center">
                                oi
                             </td>
                             <td class="celula_center">
                                oi
                             </td>
                            <td class="celula_center">
                                oi
                            </td>
                        </tr>
            </tbody>
        </table>
        <a href="http://localhost/login-php-codeigniter/index/apontar_registro" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500; margin-top: 20px">Voltar</a>
        <div id="rodape-final" style="margin-top: 20px">
            <hr size="1" color=black>
        </div>
    </body>
</html>