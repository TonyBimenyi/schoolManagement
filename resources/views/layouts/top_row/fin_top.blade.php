
<div class="header_part">
    <a class="" href="{{ url('miverval_dash') }}">
        <div class="menu_li  {{Request::is('admin') ? 'active':''}}">
            <div class="icon">
                <i class="fa-solid fa-gauge"></i>
            </div>
            <div class="text">
                <p>TABLEAU DE BORD</p>
            </div>
        </div>
    </a>
    <a class="" href="{{ url('entree') }}">
    <div class="menu_li  {{Request::is('') ? 'active':''}}">
        <div class="icon">
            <i class="fa-solid fa-right-to-bracket"></i>
        </div>
        <div class="text">
            <p>ENTREES</p>
        </div>
    </div>
</a>
    <a href="{{ url('list_sortie') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-right-from-bracket"></i>

        </div>
        <div class="text">
            <p>SORTIES</p>
        </div>
    </div>
</a>
    <a href="{{ url('list_minos') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-chalkboard-user"></i>
        </div>
        <div class="text">
            <p>MINERVALS</p>
        </div>
    </div>
</a>
<a href="{{ url('salaire') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-hand-holding-dollar"></i>
        </div>
        <div class="text">
            <p>SALAIRES</p>
        </div>
    </div>
    </a>
    <a href="{{ url('') }}">
        <div class="menu_li">
            <div class="icon">
                <i class="fa-solid fa-chart-bar"></i>
            </div>
            <div class="text">
                <p>STATS</p>
            </div>
        </div>
        </a>
</div>
