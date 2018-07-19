<?php 

    function Teste( $VALOR = null )
    {
        echo "<pre>";
        var_dump( $VALOR );
        echo "</pre>";
    }

    function GetUrl( $OFFSET = 0 )
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode( '/', $url );
        $url = array_slice( $url, $OFFSET );
        return $url;
    }

    function GetPart( $FILE = null )
    {
        if ( file_exists ( $FILE ) ):
            include $FILE;
        endif;
    }

    function Rote()
    {
        $url = GetUrl( OFFSET );
        if ( empty ( $url[0] ) ) GetPart( __DIR__ . "/../theme/front-page.php" );
        if ( ! empty ( $url[0] ) ) GetPart( __DIR__ . "/../theme/page.php" );
    }

   
