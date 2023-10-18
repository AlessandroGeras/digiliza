# Prova de PHP para a empresa Digiliza

### Requisitos
* Criar um sistema de reservas para um restaurante que possui 15 mesas.
* Criar sistema de login.
* Reservas são permitidas das 18:00 até as 23:59, com excessão dos domingos.
* Deverá haver validação para evitar horários com conflito.
* O banco de dados deverá ser relacional (foi usado PostgreSQL).
* Usar PHP ou Node (foi usado Laravel).
* Deverá ser usado migrations na criação do banco de dados.
* Implementação de seeds e factorys para popular as informações do banco de dados.
* Usar bootstrap.
* Painel administrativo para o gerente do restaurante visualizar as reservas.

### Descrição do projeto
* Para o projeto fiz com que os usuários conseguissem criar as solicitações de reserva sem precisar se cadastrar no site, para facilitar e agilizar o processo.
Abaixo imagem da página inicial usando as cores da navbar da própria Digiliza.
* Configurado sistema de login Laravel UI.
* Aplicado a validação de horas, dias da semana e verificação de conflito de horários.
* Como bônus foi aplicado validação para a factory não criar seed com data de término da reserva inferior a data de início da reserva.
* Foi também adicionado como bônus, regra para o calendário do formulário de criação de reserva não mostrar datas passadas ao dia atual que o cliente está agendando a reserva para evitar reserva inválida.
* Foi também adicionado como bônus, um filtro para poder visualizar as reservas por ordem de pedido de reserva (ID) ou pela data que será efetivada a reserva.
* Foi criado mensagens personalizadas de erro e sucesso.
* Como banco de dados, foi usado o serviço na nuvem ElephantSQL.
* Usado PHP e Javascript junto com Bootstrap.
* Realizado a migration das reservas.
* Foi implementada seed com 8 registros iniciais, podendo ser criado o resto das reservas manualmente.
* Para a parte do painel administrativo, deixei que apenas o gerente se logasse para ver as reservas. Então somente usuários cadastrados poderão ver as reservas.


### Como usar
Para criar as reservas, basta preencher o formulário na página inicial.<br>
Para visualizar as reservas é necessário se cadastrar, sendo que o cadastro já faz o login direto.<br>
Uma vez logado, pode se voltar a pagina inicial clicando no logo da Digiliza para ver novamente o formulário de criação de reservas.<br>
Uma vez logado, pode se retornar da página inicial ao Dashboard clicando no seu nome na Navbar onde terá a opção de voltar a Dashboard como também a opção de fazer o Logout.




### Imagens do projeto
![Index](https://github.com/AlessandroGeras/digiliza/blob/master/public/images/Index.jpeg)
![Reservas](https://github.com/AlessandroGeras/digiliza/blob/master/public/images/Reservas.jpeg)



### Instalação de dependências
```
composer install
npm install
```

### Vite para os assets de JS e CSS
```
npm run dev
```


### Rodar o servidor
```
php artisan serve
```
