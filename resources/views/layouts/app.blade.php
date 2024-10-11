<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts globais -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header style="background-color: #89B72D; padding: 20px; color: white;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <h1 style="margin: 0; font-size: 28px; color: white;">Casa da Paz</h1>

            <nav>
                <ul style="list-style: none; margin: 0; padding: 0; display: flex; gap: 20px; justify-content: flex-end;">
                    <li><a href="/" style="color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px;">Início</a></li>
                    <li><a href="/sobre" style="color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px;">Sobre</a></li>
                    <li><a href="/doacoes" style="color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px;">Doações</a></li>
                    <li><a href="/voluntarios" style="color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px;">Voluntários</a></li>
                    <li><a href="/premios" style="color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px;">Prêmios</a></li>
                    <li><a href="/contato" style="color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px;">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer style="background-color: #6E9E2F; padding: 20px; color: white; text-align: center;">
        <p style="margin: 0;">© 2024 Casa da Paz. Todos os direitos reservados.</p>
        <p style="margin: 5px 0;">
            <a href="/politica-privacidade" style="color: white; text-decoration: none;">Política de Privacidade</a> |
            <a href="/termos-uso" style="color: white; text-decoration: none;">Termos de Uso</a>
        </p>
    </footer>

</body>
</html>
