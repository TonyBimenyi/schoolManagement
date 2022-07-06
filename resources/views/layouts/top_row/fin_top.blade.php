
<div class="header_part">
    <a class="" href="{{ url('') }}">
        <div class="menu_li  {{Request::is('admin') ? 'active':''}}">
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="text">
                <p>TABLEAU DE BORD</p>
            </div>
        </div>
    </a>
    <a class="" href="{{ url('') }}">
    <div class="menu_li  {{Request::is('') ? 'active':''}}">
        <div class="icon">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="text">
            <p>ENTREES</p>
        </div>
    </div>
</a>
    <a href="{{ url('') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-graduation-cap"></i>

        </div>
        <div class="text">
            <p>SORTIES</p>
        </div>
    </div>
</a>
    <a href="{{ url('') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-people-group"></i>
        </div>
        <div class="text">
            <p>MINERVALS</p>
        </div>
    </div>
</a>
<a href="{{ url('') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-clipboard-user"></i>
        </div>
        <div class="text">
            <p>SALAIRES</p>
        </div>
    </div>
    </a>
    <a href="{{ url('') }}">
        <div class="menu_li">
            <div class="icon">
                <i class="fa-solid fa-clipboard-user"></i>
            </div>
            <div class="text">
                <p>STATS</p>
            </div>
        </div>
        </a>
</div>
