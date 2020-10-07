<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de Serviços</title>
</head>
<body>
    <?php
    class Ordem_de_Serviço{
        public $OS;
        public $data;
        public $situação;
        public $solicitante;
        public $area;
    }
    class Dados_do_cliente{
        public $nome;
        public $telefone;
        public $endereço;
        public $bairro;
        public $cidade;
        public $UF;
        public $cep;
    }
    class Equipamento{
        public $local_equipamentos;
        public $justificativa;
        public $defeito_problema_manutencao;
        public $observacoes;
    }
    Class Servicos{
        public $hora_inicio;
        public $hora_termin;
        public $atividade;
        public $tecnico;
        public $tempo_total;
    }
    ?>
</body>
</html>