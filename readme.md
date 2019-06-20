# Resumo da ópera

## configuração para iniciar o projeto

Criar a estrutura do projeto básico, exemplo: 
- tutorial
    + src
        * controllers
            - IndexController.php
        * views
            - index
                + index.phtml
        * models
            - Users.php
    + public
        * index.php
    + .htrouter.php

Para que o projeto criar o projeto e testar usando o servidor interno do PHP, deve-se configurar corretamente o arquivo .htrouter.php e iniciar o servidor com o seguinte comando: 

```bash 
    php7.2 -S localhost:9000 -t public .htrouter.php
```

No caso de ter instalado o phalcon devtools utilize o comando 

```bash
    phalcon server
```

Este comando iniciará o servidor http na porta 8000.

