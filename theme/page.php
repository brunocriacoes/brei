<?php

    $URL  = GetUrl( OFFSET );
    $PAGE = __DIR__ . "/../data/{$URL[0]}.html";
    $BLOG = __DIR__ . "/../data/blog/{$URL[0]}.html";

    if ( file_exists ( $PAGE ) ) :
        GetTheme( 'header' );
        include $PAGE;
        if ( $URL[0] === 'imprensa') :
            GetTheme( 'blog' );
        endif;
        GetTheme( 'footer' );
        exit;
    endif;
    
    if ( file_exists ( $BLOG ) ) :
        GetTheme( 'header' );
        include $BLOG;
        GetTheme( 'footer' );
        exit;
    endif;   

    if ( ! file_exists ( $BLOG ) AND ! file_exists ( $PAGE )  ) :
        GetTheme( 'header' );
        require __DIR__ . "/404.php";
        GetTheme( 'footer' );
        exit;
    endif;