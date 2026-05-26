<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = [
            [
                'id' => 1,
                'customer' => 'Shairyl Mae B. Cambongga',
                'scent' => 'Lavander Calm',
                'service' => 'Wash & Fold',
                'notes' => 'Prefers soft fabric conditioner',
                'image' => 'images/Lavander.jpg'
            ],
            [
                'id' => 2,
                'customer' => 'Miguel G. Cinco',
                'scent' => 'Ocean Fresh',
                'service' => 'Dry Cleaning',
                'notes' => 'For office clothes only',
                'image' => 'images/ocean fresh.jpg'
            ],
            [
                'id' => 3,
                'customer' => 'Erika Mae T. Malaki',
                'scent' => 'Baby Powder',
                'service' => 'Wash & Iron',
                'notes' => 'Sensitive skin',
                'image' => 'images/baby.jpg'
            ],
            [
                'id' => 4,
                'customer' => 'Joshua P. Quilicot',
                'scent' => 'Citrus Blast',
                'service' => 'Express Wash',
                'notes' => 'Rush order every weekend',
                'image' => 'images/Citrus.jpg'
            ],
            [
                'id' => 5,
                'customer' => 'Jessabel C. Pormento',
                'scent' => 'Floral Bloom',
                'service' => 'Premium Care',
                'notes' => 'Includes delicate fabrics',
                'image' => 'images/Floral.jpg'
            ],
        ];

        return view('items.index', compact('items'));
    }

    public function show($id)
    {
        $items = $this->index()->getData()['items'];

        
        $item = collect($items)->firstWhere('id', $id);

        return view('items.show', compact('item'));
    }
}