```markdown
# Projeto: Cadastro de Usuários via Terminal em PHP

Este é um simples programa em PHP que coleta informações do usuário (nome, idade e hobbies) via terminal e exibe uma mensagem personalizada com base nos dados fornecidos.

---

## Funcionalidades

- Coleta o nome do usuário.
- Coleta a idade do usuário e verifica se é maior ou menor de idade.
- Permite que o usuário insira até 3 hobbies.
- Exibe uma mensagem personalizada com o nome, idade e hobbies do usuário.

---

## Como Usar

### Pré-requisitos

- PHP instalado na sua máquina.
- Terminal ou Prompt de Comando.

### Passos para Executar

1. *Clone o repositório ou copie o código* para um arquivo com a extensão `.php`, por exemplo, `cadastro_usuario.php`.

2. *Abra o terminal* e navegue até o diretório onde o arquivo está salvo.

3. *Execute o script* com o seguinte comando:
   
   php cadastro_usuario.php
   

4. **Siga as instruções no terminal**:
   - Insira seu nome.
   - Insira sua idade.
   - Insira três hobbies.

5. **Veja o resultado**:
   - O programa exibirá uma mensagem personalizada com o nome, idade e hobbies do usuário.
   - Também informará se o usuário é maior ou menor de idade.

---

## Exemplo de Execução

```bash
$ php cadastro_usuario.php
Por favor, insira seu primeiro nome: João

Por favor, insira sua idade: 25

Por favor, insira um hobby: Leitura

Por favor, insira um hobby: Caminhada

Por favor, insira um hobby: Música
O usuário João tem 25 anos, portanto, É maior de idade
Seus hobbies são: 
- Leitura
- Caminhada
- Música
```

---

## Estrutura do Código

O código está organizado da seguinte forma:

1. **Array `$usuario`**:
   - Armazena as informações do usuário (nome, idade e hobbies).

2. **Entrada de dados**:
   - Usa `fgets(STDIN)` para capturar a entrada do usuário via terminal.
   - Converte a idade para inteiro com `intval()`.

3. **Loop para hobbies**:
   - Permite que o usuário insira até 3 hobbies, que são armazenados em um array.

4. **Função `exibirMensagem`**:
   - Retorna uma mensagem personalizada com o nome e a idade do usuário.

5. **Condicional para verificar maioridade**:
   - Verifica se o usuário é maior ou menor de idade com base na idade fornecida.

6. **Exibição dos hobbies**:
   - Usa um loop `foreach` para exibir cada hobby em uma nova linha.

---

## Autor

- Carlos Henrique Rodrigues Ribeiro

---
