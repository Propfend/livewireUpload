<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>@import "https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css";</style>
    <title>@yield('title')</title>
</head>
@yield('content')
<body>
    <footer class="footer" style="margin-top: 647px;">
        <div class="content has-text-centered">
            <p>
              © 2024 ImageUpload - Todos os direitos reservados.
            </p>
            <p>
              Desenvolvido por <a href="https://github.com/Propfend" target="blank"><strong>Luiz Miguel</strong></a>
            </p>
            <p>
                <div>
                  <a href="https://github.com/Propfend" target="_blank"><img src="{{asset('imagens/github.png')}}" alt="gitHub" style="width: 50px;"></a>
                    <a href="https://www.linkedin.com/in/luiz-miguel-1154bb277/" target="_blank"><img src="{{asset('imagens/linkedin.png')}}" alt="linkedIn" style="width: 50px;"> </a>
                    <a href="https://wa.me/5583988869118" target="_blank"><img src="{{asset('imagens/zap.png')}}" alt="discord" style="width: 51px;" ></a>
                    <div>
            </p>
          </div>
      </footer>
</body>
</html>