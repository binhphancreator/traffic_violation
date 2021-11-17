<header class="py-2 position-relative mb-2">
    <div class="overlay"></div>
    <?php
        $nav = auth()->loggined() ? 'components/nav-admin' : 'components/nav';
        view($nav)->render(); 
    ?>
</header>