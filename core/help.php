<?php

    function GetTheme( $NAME = 0 )
    {
        GetPart( __DIR__ . "/../theme/{$NAME}.php" );
    }
