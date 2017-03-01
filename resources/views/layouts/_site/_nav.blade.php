<nav>
  <div class="nav-wrapper light-blue darken-4">

  <div class="container-fluid">

    <a href="{{ route('site.home') }}" class="brand-logo">Escrita Contabilidade</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{ route('site.home') }}">HOME</a></li>
      <li><a href="{{ route('site.sobre') }}">SOBRE</a></li>
      <li><a href="{{ route('noticia.index') }}">NOTICIAS</a></li>
      <li><a href="{{ route('servico.index') }}">SERVIÇOS</a></li>
      <li><a href="{{ route('site.contato') }}">CONTATOS</a></li>
      <li><a href="{{ route('escritanet.login') }}">ESCRITA NET</a></li>
      <li><a href="{{ route('admin.login') }}">LOGIN</a></li>

    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="{{ route('site.home') }}">HOME</a></li>
      <li><a href="{{ route('site.sobre') }}">SOBRE</a></li>
      <li><a href="{{ route('noticia.index') }}">NOTICIAS</a></li>
      <li><a href="{{ route('servico.index') }}">SERVIÇOS</a></li>
      <li><a href="{{ route('site.contato') }}">CONTATOS</a></li>
      <li><a href="{{ route('escritanet.login') }}">ESCRITA NET</a></li>
      <li><a href="{{ route('admin.login') }}">LOGIN</a></li>

    </ul>
  </div>
</nav>
