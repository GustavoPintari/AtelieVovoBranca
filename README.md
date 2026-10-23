# Ateliê Vovó Branca

Trabalho acadêmico desenvolvido em 2022 para a disciplina de **Engenharia de Software**, como trabalho de conclusão do primeiro semestre do curso de **Ciência da Computação**.

O sistema é uma **loja online com gestão de pedidos e de inventário**. O projeto foi inspirado no trabalho de uma tia que faz bonecas de pano artesanalmente e as vende sob o nome **Ateliê Vovó Branca**.

## Funcionalidades

### Loja (cliente)

- Vitrine com os produtos cadastrados.
- Cadastro de cliente com validação de CPF, login e logout.
- Consulta e edição dos dados pessoais e do endereço.
- Lista de favoritos.
- Carrinho de compras: adicionar, remover e alterar a quantidade de itens, limitada ao estoque disponível, com cálculo de subtotal e total.
- Conclusão do pedido.
- Páginas institucionais: sobre, contato, termos de uso e política de privacidade.

### Administração

- CRUD de **categorias**.
- CRUD de **produtos**, com upload de imagem, preço, quantidade em estoque e visibilidade na loja.
- Relatório de produtos por categoria.

## Tecnologias

- **PHP** com **Laravel 7** (Eloquent, Blade, Form Requests e regras de validação customizadas).
- **MySQL** como banco de dados.
- **Bootstrap**, **Bootstrap Icons**, **jQuery** e **jQuery Mask** no front-end.
- `default.nix` com um ambiente de desenvolvimento via Nix (PHP, Composer e Node.js).

## Estrutura

```
app/
├── Http/Controllers/    # Carrinho, Categorias, Cliente, Favoritos, Produtos, Relatórios...
├── Http/Requests/       # Validação dos formulários (cadastro, dados, endereço, login)
├── Models/              # Categoria, Cliente, Endereco, Favorito, Pedido, DetalhePedido, Produto, Status
├── Rules/Cpf.php        # Validação de CPF
└── Services/            # CarrinhoService (regras do carrinho) e ImagemService (upload de imagens)
database/migrations/     # Estrutura do banco de dados
resources/views/         # Telas Blade: public/, cliente/, administrador/, auth/
routes/web.php           # Rotas da aplicação
```

## Como executar

Requisitos: **PHP 7.2.5+** (ou 8.0), **Composer** e **MySQL**.

1. Instale as dependências:

   ```bash
   composer install
   ```

2. Crie o arquivo de ambiente e gere a chave da aplicação:

   ```bash
   cp .env.example .env
   ```

   ```bash
   php artisan key:generate
   ```

3. Configure o acesso ao MySQL no `.env` (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) e crie as tabelas:

   ```bash
   php artisan migrate
   ```

4. Cadastre os status de pedido na tabela `status`. O carrinho usa o status de id `1` para o pedido em aberto e o de id `2` para o pedido concluído:

   ```sql
   INSERT INTO status (id, descricao) VALUES (1, 'Em aberto'), (2, 'Concluído');
   ```

5. Inicie o servidor:

   ```bash
   php artisan serve
   ```

A loja fica disponível em `http://localhost:8000`. As telas de administração ficam em `/produtos`, `/categorias` e `/relatorios/pc`.

## Uso de inteligência artificial

Todo o código-fonte deste projeto foi escrito por mim, em 2022, sem o uso de inteligência artificial.

Em 2026, a IA **Claude** (Anthropic) foi utilizada apenas para:

- escrever este `README.md`;
- remover do repositório arquivos desnecessários à arquitetura do projeto (as dependências do Composer em `vendor/` e as configurações de IDE em `.vscode/`) e atualizar o `.gitignore` correspondente.

## Licença

Distribuído sob a licença MIT. Veja [LICENSE](LICENSE).
