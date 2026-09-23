# 👥 Sistema de Gerenciamento de Amigos com Autenticação e CRUD Protegido em PHP

## 🎥 Apresentação do Projeto

A apresentação em vídeo demonstra o funcionamento do sistema de login e do cadastro de amigos (CRUD), além de explicar as principais características técnicas do projeto.

**▶️ [Assistir à apresentação em vídeo](https://www.youtube.com/watch?v=rePWvJDR4Ek)**


---

## 📌 Sobre o Projeto

O projeto consiste em uma aplicação web full-stack desenvolvida para o gerenciamento de uma lista de contatos (amigos). 

Motivado pela necessidade de proteger os dados contra alterações indevidas por terceiros no mesmo ambiente local (como acessos não autorizados pela irmã Mari), o sistema implementa uma camada completa de **autenticação de usuário (Login e Senha)** e **proteção de rotas por controle de sessão (`$_SESSION`)**. Qualquer tentativa de navegação direta via URL sem autenticação prévia é automaticamente bloqueada[cite: 5].

---

## 🛠️ Tecnologias Utilizadas

- **Front-end:** HTML5, CSS3, W3.CSS, Font Awesome[cite: 5].
- **Back-end:** PHP (Programação Estruturada, `mysqli`, Controle de Sessão HTTP)[cite: 5].
- **Banco de Dados:** MySQL / MariaDB[cite: 5].
- **Servidor Local:** Apache (XAMPP / USBWebserver)[cite: 5, 6].
- **Controle de Versão:** Git e GitHub[cite: 5].

---

## ⚡ Funcionalidades do Sistema

- **🔐 Autenticação de Usuário:** Tela de login com mascaramento de senha e validação contra a tabela de usuários no banco de dados[cite: 5].
- **🛡️ Proteção de Rotas:** Validação automática através do script `verificarAcesso.php` que impede o acesso não autorizado a páginas internas por URL direta[cite: 5].
- **📋 Gestão de Contatos (CRUD Completo):**
  - **Create:** Form para cadastro de novos amigos (`cadastro.php`)[cite: 5].
  - **Read:** Exibição dinâmica dos contatos em tabela estilizada com W3.CSS (`principal.php`)[cite: 5, 7].
  - **Update:** Edição de dados existentes[cite: 5].
  - **Delete:** Exclusão de registros do banco de dados com atalho direto[cite: 7].
- **🚪 Encerramento Seguro (Logout):** Destruição total da sessão via `session_destroy()` e redirecionamento para o login[cite: 5].

---

## 🗄️ Estrutura do Banco de Dados

O banco de dados relacional (schema `pwii`) possui a seguinte estrutura de tabelas[cite: 5]:

```sql
USE pwii;

-- Tabela de Autenticação de Usuários
CREATE TABLE IF NOT EXISTS usuario (
  idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL
);

-- Tabela da Lista de Amigos
CREATE TABLE IF NOT EXISTS amigo (
  idamigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(80) NOT NULL,
  apelido VARCHAR(40),
  email VARCHAR(100)
);

-- Usuário Padrão de Acesso
INSERT INTO usuario (nome, senha) VALUES ('gabi', 'gabi123');
