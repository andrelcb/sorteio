# Algoritmo de Apostas

## Dependencias
executa um composer update assim que clonar o projeto.
php artisan key:generate
criar um database com nome: sorteio
trocar o nome da database para sorteio
executa o comando: php artisan migrate
Para executar rode o seguinte comando dentro da raiz do projeto: ```php artisan serve```
para o envio de email rodar o composer require guzzlehttp/guzzle
e é necessario configurar e aceitar as permissão do gmail para o envio do email. segue link
https://myaccount.google.com/lesssecureapps

O ENV DEVE ESTAR ASSIM:
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=seuemail@gmail.com
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
