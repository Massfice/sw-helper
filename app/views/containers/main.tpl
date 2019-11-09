{block name = 'up'}
<li><a href="javascript:void(0);" onclick = "go('hello_guest');"><span>Strona Główna</span></a></li>
{if isset($conf->roles['guest'])}<li><a href="javascript:void(0);" onclick = "go('loginView');"><span>Dostęp</span></a></li>{/if}
{if isset($conf->roles['user'])}
<li><a href="javascript:void(0);" onclick = "go('hello_user');"><span>Kokpit</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('addTestSpecial');"><span>Dodaj testową zmienną specjalną</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('clearCurrentSpecial');"><span>Wyczyść zmienne specjalne</span></a></li>
<li><a href="javascript:void(0);" onclick = "go('logout');"><span>Wyloguj [ {$user->getLogin()} ]</span></a></li>
{/if}
{/block}

{block name = 'down'}
{/block}

{block name = 'title'}
Strona Główna
{/block}
