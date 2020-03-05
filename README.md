# Exercícios

### Cada diretório contém a resolução de um exercício

1. Crie um script PHP que mostra o nome do país e sua capital usando uma array chamada $location. Ordene a Lista pelo nome da capital e adicione pelo menos 5 entradas no array. Exemplo do que deve ser mostrado de saída:

```
A capital do Brasil e Brasília
A capital dos EUA e Washington 
A capital da Espanha e Madrid 
```

2. Joãozinho vai morder o seu dedo 50% das vezes. Esse exercício será dividido em 2 partes. 

    * a) Primeiro, cria uma função chamada foiMordido() que deverá retornar  TRUE para 50% das vezes e FALSE para os outros 50%. A função rand() pode ser útil aqui.

    * b) Após criar a função, crie um código/página que mostre as frases "Joãozinho mordeu o seu dedo !" ou "Joaozinho NAO mordeu o seu dedo !" usando a função foiMordido() que foi criado na primeira parte.


3. Escreva uma função em PHP para pegar determinar a extensão dos 3 arquivos abaixo e mostrar as extensões na tela. As saídas devem ser mostradas em uma lista em ordem alfabética.

```
Arquivos de exemplo
	a) music.mp4
	b) video.mov
	c) imagem.jpeg
```
```
Saida experada:
	1 .jpeg
	2 .mov
	3 .mp4
```

4. Crie um formulário contendo os campos (Nome, Sobrenome, e-mail, telefone, login & senha) e salve as submissões dentro de um arquivo chamado registros.txt. Itens mandatórios para esse exercicio:

	* a) Os registros devem ser salvos dentro de um array() incremental no arquivo registros.txt

	* b)  O formulário deverá validar os campos email e telefone aceitando somente os formatos aceitáveis

	* c) Se possivel nao salvar email ou logins que ja foram registrados anteriormente

	* d) O campo senha deverá ser salvo encriptado. 

5. Crie um parser que converte um arquivo XML em um arquivo CSV usando PHP.

6. Crie uma Classe para criar um select Field para um user registration form. Após criar essa classe crie um webform simples e adicione esse campo criado.

7. Crie uma API simples para manipular uma lista de usuários contendo os campos (Nome, Sobrenome, Email & Telefone.). Essa API deverá conter os requisitos abaixo:

    * a) Dados deverão ser salvos em um arquivo de texto

    * b) Usar Rest API

    * c) Criar Endpoint para listar todos os usuarios

    * d) Criar Endpoint para deletar usuarios por email

    * e) Criar Endpoint para adicionar um usuario novo

    * f) Criar Endpoint para atualizar os dados do usuario.

    * g) Prover documentacao minima para usar a API.