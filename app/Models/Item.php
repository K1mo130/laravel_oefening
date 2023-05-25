<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    public function getItems() {
        return [
            [
                'Naam' => 'item 1',
                'Bescrijving' => 'dit is Item 1',
            ],
            [
                'Naam' => 'item 2',
                'Bescrijving' => 'dit is Item 2',
            ],
            [
                'Naam' => 'item 3',
                'Bescrijving' => 'dit is Item 3',
            ],
        ];
    }    
}
