
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
  {{-- <a class="navbar-brand" href="{{ url('/back') }}"><img src="{{ asset('public/others') }}/{{ $shareData['admin_logo'] }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{ url('/back') }}"><img src="{{ asset('public/others') }}/{{ $shareData['admin_logo'] }}" alt="Logo"></a> --}}
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="./"> <i class="menu-icon fa fa-dashboard"></i>Accuiel </a>
                    </li>
                    <li class="active">
                        <a href=" {{ url('/adminpanel')}} "> <i class="menu-icon fa fa-dashboard"></i>Tableau de bord </a>
                    </li>
                    
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-laptop"></i>Parametres </a>
                    </li>
                    <li>
                        <a href="{{ url('/adminpanel/list')}} "> <i class="menu-icon fa fa-laptop"></i>Posts des visiteurs </a>
                    </li>
                    <li>
                        <a href="{{ url('/album/show')}} "> <i class="menu-icon fa fa-laptop"></i>Album des mariées </a>
                    </li>
                  

                     
        </nav>
    </aside><!-- /#left-panel -->
