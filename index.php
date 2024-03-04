<!DOCTYPE html>
<?php require "post.php"; ?>

<html lang="pt-BR">

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
      <nav>
        <ul>
          <li>
            <a href="https://www.github.com/GuiArmanLi">GitHub</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/guilherme-santana-pessa-5a6a72170/">Linkedin</a>
          </li>
          <li>
            <a href="https://api.whatsapp.com/send?phone=5511946867628">Whatsapp</a>
          </li>
        </ul>
      </nav>
    </section>

    <section>
      <h2>Formulario de Testes</h2>
      <p>
        Caso queira participar dos testes das minhas aplicaçoes, enviar suas
        informacoes pelo formulário
      </p>
      <p>OBS.: Seu email ainda não está armazenado de forma segura &#128077;</p>
      <form action="index.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Fulano" required />
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="fulano007@gmail.com" required />
        <input type="submit" value="Enviar" />
      </form>

      <h2>Usuários dos testes</h2>
      <p>Pessoas que confiam em mim para testar minhas aplicações.</p>
      <h3>Nomes</h3>
      <?php foreach ($userNames->fetchFirstColumn() as $user) { ?>
        <ul>
          <li>
            <?php echo $user ?>
          </li>
        </ul>
      <?php } ?>
    </section>
  </main>
</body>

</html>