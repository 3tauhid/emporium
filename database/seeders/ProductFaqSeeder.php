<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductFaq;

class ProductFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductFaq::create([
            'product_id' => 1,
            'question' => 'Does this have a slot for an hdd? if yes what size?',
            'answer' => 'This actually has two spots for NVMe drives (one of the slots is taken up by the SSD already installed, Plus there is a bay for a 2.5 drive. The box comes with the bracket you need to install it. so in tottal you have three drive bays one being a 2.5 and 2 being NVMe. This actually has two spots for NVMe drives (one of the slots is taken up by the SSD already installed, Plus there is a bay for a 2.5 drive. The box comes with the bracket you need to install it. so in tottal you have three drive bays one being a 2.5 and 2 being NVMe. This actually has two spots for NVMe drives (one of the slots is taken up by the SSD already installed, Plus there is a bay for a 2.5 drive. The box comes with the bracket you need to install it. so in tottal you have three drive bays one being a 2.5 and 2 being NVMe.',
        ]);
        ProductFaq::create([
            'product_id' => 1,
            'question' => 'What are the slots?',
            'answer' => 'This actually has two spots for NVMe drives (one of the slots is taken up by the SSD already installed, Plus there is a bay for a 2.5 drive. The box comes with the bracket you need to install it. so in tottal you have three drive bays one being a 2.5 and 2 being NVMe. This actually has two spots for NVMe drives (one of the slots is taken up by the SSD already installed, Plus there is a bay for a 2.5 drive. The box comes with the bracket you need to install it. so in tottal you have three drive bays one being a 2.5 and 2 being NVMe.',
        ]);
        ProductFaq::create([
            'product_id' => 1,
            'question' => 'What are the bays of drives?',
            'answer' => 'This actually has two spots for NVMe drives (one of the slots is taken up by the SSD already installed, Plus there is a bay for a 2.5 drive. The box comes with the bracket you need to install it. so in tottal you have three drive bays one being a 2.5 and 2 being NVMe.',
        ]);
    }
}
