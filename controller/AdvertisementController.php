<?php

namespace App;

class AdvertisementController
{
    public function __construct()
    {
        $this->am = new AdvertisementModel();
    }

    // Shows the view with the ad list
    public function index()
    {
        return render_php('../view/ads.php', [
            'ads' => $this->am->getAllWithUsers(),
        ]);
    }

    // Shows the view for creating new ads
    public function create()
    {
    }

    // Uses the model to insert the (validated) data into DB
    public function insert($data)
    {
    }

    // Continue this to get complete CRUD......
}