<!DOCTYPE html>
<html lang="pt-BR">

<?php
require_once "../app/Model/UserModel.php";

require_once "../app/Router/UserRouter.php";
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Programador com 2 anos de experiência em Backend" />
  <link rel="stylesheet" href="css/style.css" />

  <link rel="shortcut icon" href="assets/icon/icon-profile.png" type="image/x-icon" />

  <title>Guilherme Pessa</title>
</head>

<body>
  <main>
    <article>
      <h1>Bem vindo ao meu Perfil</h1>
      <div>
        <h2>Fascinado por Tecnologia e Esportes</h2>
        <p>Programador Backend e interessado em IoT</p>
      </div>
      <div>
        <h3>Objetivos Atuais</h3>
        <ul>
          <li>Me especializar em Backend</li>
          <li>Dominar movimento Planche</li>
          <li>Fluencia em Inglês</li>
        </ul>
      </div>

      <div>
        <h3>Passa Tempo</h3>
        <ul>
          <li>Programação com foco em Backend</li>
          <li>Praticar Ginastica</li>
          <li>Ler Livros e Mangas</li>
        </ul>
      </div>

      <div>
        <h3>Backend</h3>
        <ul>
          <li>Java/Spring</li>
          <li>C#/.NET</li>
        </ul>
      </div>

      <div>
        <h3>Banco de Dados</h3>
        <ul>
          <li>Postgre</li>
          <li>MySQL Server</li>
        </ul>
      </div>
    </article>

    <section>
      <h2>Educação</h2>
      <div>
        <p>Análise e Desenvolvimento de Sistemas</p>
        <p>Programação de Computadores</p>
        <p>Administração Geral</p>
        <p>Administração de Banco de Dados</p>
      </div>
    </section>

    <section>
      <h2>Contatos</h2>
      <a href="https://www.github.com/GuiArmanLi">GitHub</a>
    </section>

    <section>
      <h2>Usuários Beta</h2>
      <p>Caso queira participar das versões de teste das minhas aplicações, envie suas
        informacoes pelo formulário abaixo.</p>
      <p>OBS.: Seu email ainda não está armazenado de forma segura &#128077;</p>
      <form action="../app/src/Router/UserRouter.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Pedro" required />
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="pedro123@gmail.com" required />
        <input type="submit" value="Enviar" />
      </form>
    </section>

    <section>
      <h2>Lista de Usuários Beta</h2>
      <p>Pessoas que confiam em mim para testar minhas aplicações.</p>
      <div>
        <h3>Nomes</h3>
        <ul>
        </ul>
      </div>
      </ul>
    </section>
  </main>
</body>

</html>