<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Apresentação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }
        h1 {
            color: #007BFF;
        }
        .container {
            border: 2px solid #007BFF;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .paragrafo-destaque {
            font-size: 1.1em;
            line-height: 1.6;
            text-align: justify;
            margin: 20px 0;
            padding: 15px;
            background-color: #f9f9f9;
            border-left: 5px solid #007BFF;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .paragrafo-destaque strong {
            color: #007BFF;
        }
        .paragrafo-destaque em {
            color: #28a745;
        }
        ul {
            list-style-type: square;
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    // Variáveis
    $nome = "Igor";

    // Exibindo as informações
    echo "<div class='container'>
        <h1>Olá, eu sou o $nome!</h1>
        <p class='paragrafo-destaque'>
            Sou <strong>Desenvolvedor Full-Stack</strong> com 2 anos de experiência em desenvolvimento de software.<br>
            Tenho fortes habilidades em <span style='color: #007BFF;'>Php, Java, JavaScript, HTML, CSS, Spring Boot e MySQL</span>.<br>
            Estou cursando o 5º semestre da graduação em <em>Análise e Desenvolvimento de Sistemas</em> pela Universidade Uninter.
        </p>
    </div>";

    // Experiências Profissionais
    echo "<div class='container'>
        <h2>Experiências Profissionais</h2>
        <ul>
            <li><strong>Desenvolvedor Full-Stack</strong> - Empresa XYZ (2022 - Presente)</li>
            <li><strong>Estagiário em Desenvolvimento Web</strong> - Empresa ABC (2021 - 2022)</li>
        </ul>
    </div>";

    // Habilidades Técnicas
    echo "<div class='container'>
        <h2>Habilidades Técnicas</h2>
        <ul>
            <li>PHP</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>HTML/CSS</li>
            <li>Spring Boot</li>
            <li>MySQL</li>
        </ul>
    </div>";

    // Formação Acadêmica
    echo "<div class='container'>
        <h2>Formação Acadêmica</h2>
        <p><strong>Análise e Desenvolvimento de Sistemas</strong> - Universidade Uninter (Cursando 5º semestre)</p>
    </div>";

    // Botão de Contato
    echo "<div class='container' style='text-align: center;'>
        <h2>Entre em Contato</h2>
        <a href='mailto:seuemail@example.com' style='text-decoration: none;'>
            <button>Enviar E-mail</button>
        </a>
    </div>";
    ?>
</body>
</html>
