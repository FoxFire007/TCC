<?php
$nome = $_GET["nome"];
$rm   = $_GET["rm"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Isso serve para usar os arquivos de Css-->
    <link rel="stylesheet" href="../CSS/estilo_php.css">


    <title>Logado</title>
</head>
<body>

    <div class="inicio">
    
    <div class="cor">
    <center><h1> Bem Vindo, <?php echo htmlspecialchars($nome); ?>!</
    h1>
    </div>

    <div class="navegação">
    <a href="../SobreNos.html">Sobre Nós</a>
    <a href="#">Serviços</a>
    <a id="botao" href="../FaleConosco.html">Fale Conosco</a>
    </div>
    </div>

    <br>

    <div class="divisao">
        <p><strong>12</strong> - Todos os conteúdos de aprendizagem  </p>
    </div>

    <br><br>
 
<div class="grupos-container">

    <!-- GRUPO 1 -->
    <div class="grupo">
        <button class="grupo-titulo" onclick="abrirGrupo('grupo1', this)"
                aria-expanded="false">
            <h2>Fundamentos da Inteligência Artificial</h2>
            <span class="seta">▼</span>
        </button>

        <div id="grupo1" class="grupo-conteudo">

            <div class="card">
                <h3>O que é IA</h3>
                <p>Conheça os conceitos fundamentais da inteligência artificial.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Como as IAs funcionam</h3>
                <p>Entenda como funcionam os sistemas de inteligência artificial.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Ética, privacidade e cuidados</h3>
                <p>Aprenda sobre o uso responsável da inteligência artificial.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Engenharia de Prompts</h3>
                <p>Aprenda a elaborar comandos eficientes para as IAs.</p>
                <a href="#">Saiba mais</a>
            </div>

        </div>
    </div>


    <!-- GRUPO 2 -->
    <div class="grupo">
        <button class="grupo-titulo" onclick="abrirGrupo('grupo2', this)"
                aria-expanded="false">
            <h2>Aplicações da Inteligência Artificial</h2>
            <span class="seta">▼</span>
        </button>

        <div id="grupo2" class="grupo-conteudo">

            <div class="card">
                <h3>Criação e edição de textos</h3>
                <p>Descubra como utilizar IA na produção de textos.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Pesquisa e curadoria de conteúdo</h3>
                <p>Aprenda a pesquisar e organizar informações com IA.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Geração e edição de imagens e mídias</h3>
                <p>Conheça ferramentas de criação de imagens e mídias.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Automação de tarefas repetitivas</h3>
                <p>Entenda como automatizar atividades utilizando IA.</p>
                <a href="#">Saiba mais</a>
            </div>

        </div>
    </div>


    <!-- GRUPO 3 -->
    <div class="grupo">
        <button class="grupo-titulo" onclick="abrirGrupo('grupo3', this)"
                aria-expanded="false">
            <h2>IA na prática e no aprendizado</h2>
            <span class="seta">▼</span>
        </button>

        <div id="grupo3" class="grupo-conteudo">

            <div class="card">
                <h3>Análise de dados e planilhas inteligentes</h3>
                <p>Conheça a utilização da IA na análise de dados.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Assistentes e agentes virtuais</h3>
                <p>Descubra como funcionam os assistentes virtuais.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Como estudar e aprender mais rápido com IA</h3>
                <p>Utilize a inteligência artificial como ferramenta de aprendizagem.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <h3>Visão de carreira AI-First</h3>
                <p>Entenda como a IA pode transformar o mercado de trabalho.</p>
                <a href="#">Saiba mais</a>
            </div>

        </div>
    </div>

</div>


<script>
function abrirGrupo(id, botao) {

    const grupos = document.querySelectorAll('.grupo-conteudo');
    const botoes = document.querySelectorAll('.grupo-titulo');

    const conteudo = document.getElementById(id);
    const estavaAberto = conteudo.classList.contains('ativo');

    // Fecha todos os grupos
    grupos.forEach(grupo => {
        grupo.classList.remove('ativo');
    });

    botoes.forEach(b => {
        b.setAttribute('aria-expanded', 'false');
        b.querySelector('.seta').textContent = '▼';
    });

    // Abre o grupo selecionado
    if (!estavaAberto) {
        conteudo.classList.add('ativo');
        botao.setAttribute('aria-expanded', 'true');
        botao.querySelector('.seta').textContent = '▲';
    }

}
</script>


    <br><br><br>

    <div class="rodape"></div>
        <footer>
            
<br><br><br><br>

<div class="chao">
        <center>
            <h2 class="direitos">Copyright © 2026 Edu.IA.</h2>
            <h3 class="direitos">Todos os direitos reservados.</h3>
        </center>
</div>

     </footer>

</body>
</html>