<?php
    $sql = "SELECT * FROM menu"; 
    $response = $db->query( $sql );
    $listMenu = $response->fetchAll();

    foreach( $listMenu as $cle=>$menu ) {
        $monScript = '#';
        if (!empty($menu['script'])) {
            $monScript = $menu['script'];
        }
        echo '<a class="nav-link " href="' .$monScript . '">' . $menu['ID'] . ' - ' . $menu['nom'] . '</a>';
    }
?>