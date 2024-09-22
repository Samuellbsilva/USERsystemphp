Aplicação CRUD de Usuários

Este projeto é uma aplicação simples em PHP com MySQL que permite gerenciar usuários através de operações CRUD. A aplicação permite criar, ler, editar e excluir usuários de um banco de dados.
Funcionalidades

    Cadastro de novos usuários.
    Listagem de usuários registrados.
    Edição das informações de usuários existentes.
    Exclusão de usuários.
    Validação básica de dados.

Tecnologias Utilizadas

    PHP: Linguagem de programação para a lógica do servidor.
    MySQL: Sistema de gerenciamento de banco de dados utilizado para armazenar as informações dos usuários.
    HTML/CSS: Para a construção da interface do usuário.

Pré-requisitos

Antes de começar, verifique se você possui:

    Um servidor web (como Apache ou Nginx).
    PHP instalado (versão 7.2 ou superior recomendada).
    MySQL ou MariaDB instalado.

Instalação

    Clone o repositório:

    bash

git clone https://github.com/seu-usuario/crud-usuarios.git
cd crud-usuarios

Configure as credenciais do banco de dados no arquivo config.php.

php

<?php
$host = 'localhost';
$db = 'crud_usuarios';
$user = 'seu_usuario';
$pass = 'sua_senha';

Acesse a aplicação pelo navegador:

plaintext

    http://localhost/crud-usuarios

Como Usar

    Cadastrar Usuário: Preencha o formulário de cadastro e clique em "Cadastrar".
    Listar Usuários: A lista de usuários registrados será exibida na página inicial.
    Editar Usuário: Clique no botão "Editar" ao lado do usuário que deseja modificar e faça as alterações necessárias.
    Excluir Usuário: Clique no botão "Excluir" para remover um usuário da lista.

  Melhorias Futuras

    Implementar autenticação de usuário para garantir que apenas usuários autorizados possam acessar as funcionalidades.
    Adicionar validação de entrada mais robusta.
    Melhorar a interface do usuário com frameworks de CSS como Bootstrap ou Tailwind CSS.
    Implementar pesquisa e filtragem de usuários.

Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests com melhorias, correções de bugs ou novas funcionalidades.
Licença

Este projeto é licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
