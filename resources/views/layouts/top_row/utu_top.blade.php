
<div class="header_part">
    <a class="" href="{{ url('admin') }}">
    <div class="menu_li  {{Request::is('admin') ? 'active':''}}">
        <div class="icon">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="text">
            <p>ADMINS</p>
        </div>
    </div>
</a>
    <a href="{{ url('student') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-graduation-cap"></i>

        </div>
        <div class="text">
            <p>ETUDIANTS</p>
        </div>
    </div>
</a>
    <a href="{{ url('teacher') }}">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-people-group"></i>
        </div>
        <div class="text">
            <p>ENSEIGNANTS</p>
        </div>
    </div>
</a>
<a href="#">
    <div class="menu_li">
        <div class="icon">
            <i class="fa-solid fa-clipboard-user"></i>
        </div>
        <div class="text">
            <p>STAFF</p>
        </div>
    </div>
    </a>
</div>
