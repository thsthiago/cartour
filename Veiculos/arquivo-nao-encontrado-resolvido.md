# Cadastro de veículos
---

Caso ocorra algum erro de **Arquivo não encontrado** na validação ao clicar em **Cadastrar veículo** ou **Atualizar cadastro**, é só mudar a url do arquivo no Arquivo PHP.

Se o erro ocorrer ao clicar em **Cadastrar veículo** no arquivo **veiculos.html**:

1. Abrir o arquivo **validacao_veiculos.php** no seu navegador e copiar a URL. 

2. Após isso, abrir o arquivo **envio_form.php** no seu editor de código e colar a URL na **Linha 31**, depois do **url=**

**Exemplo:**:

```php
echo '<meta http-equiv="refresh" content="0; url=COLAR A URL AQUI"/>';
```


Se o erro ocorrer ao clicar em **Enviar** no arquivo **atualizar.php**:


1. Abrir o arquivo **validacao_atualizar.php** no seu navegador e copiar a URL. 

2. Após isso, abrir o arquivo **atualizar_cadastro.php** no seu editor de código e colar a URL na **Linha 32**, depois do **url=**.

**Exemplo:**

```php
echo '<meta http-equiv="refresh" content="0; url=COLAR A URL AQUI"/>';
```