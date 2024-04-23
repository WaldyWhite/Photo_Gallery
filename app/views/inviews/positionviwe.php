<?php if(explode('/', $_SERVER['REQUEST_URI'])[1] === '' || explode('/', $_SERVER['REQUEST_URI'])[1] === 'home' )
{ 
    echo 'Главная';
} else if(explode('/', $_SERVER['REQUEST_URI'])[1] === 'about')
{ 
    echo 'О Нас';
} else if(explode('/', $_SERVER['REQUEST_URI'])[1] === 'contacts')
{
    echo 'Контакты';
} else if(explode('/', $_SERVER['REQUEST_URI'])[1] === 'error')
{
    echo 'Ошибка';
}
