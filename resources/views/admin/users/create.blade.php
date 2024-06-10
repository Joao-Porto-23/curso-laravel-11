<h1>Novo Usuário</h1>

<form action="{{ route('users.store') }}" method="POST">
    <input type="text" name="name" place="Nome">
    <input type="email" name="email" place="E-mail">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Enviar</button>
</form>