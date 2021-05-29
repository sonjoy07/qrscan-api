<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qr;

class QrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Qr();
        $owner->order_number = "A1001";
        $owner->item_barcode = "SG:A1001:1001";
        $owner->item = "ItemA";
        $owner->save();
        $owner = new Qr();
        $owner->order_number = "A1002";
        $owner->item_barcode = "SG:A1002:1002";
        $owner->item = "ItemB";
        $owner->save();
        $owner = new Qr();
        $owner->order_number = "A1003";
        $owner->item_barcode = "SG:A1003:1003";
        $owner->item = "ItemC";
        $owner->save();
        $owner = new Qr();
        $owner->order_number = "A1004";
        $owner->item_barcode = "SG:A1004:1004";
        $owner->item = "ItemD";
        $owner->save();
    }
}
