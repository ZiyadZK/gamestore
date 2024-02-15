<?php
function gameImage($platform) {
    if($platform === 'PS4') {
        return base_url('/assets/img/gamewp/PS4.png');
    }

    if($platform === 'PC') {
        return base_url('/assets/img/gamewp/PC.jpg');
    }

    if($platform === 'Xbox One') {
        return base_url('/assets/img/gamewp/Xbox One.jpg');
    }

    if($platform === 'Nintendo Switch') {
        return base_url('/assets/img/gamewp/Nintendo Switch.jpg');
    }
}
?>