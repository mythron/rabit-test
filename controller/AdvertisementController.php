<?php

namespace App;

class AdvertisementController
{
    public static function index()
    {
        $am = new AdvertisementModel();
        return render_php('../view/ads.php', [
            'ads' => $am->GetAllWithUsers(),
        ]);
    }
}