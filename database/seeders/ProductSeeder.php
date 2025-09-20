<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'main_seller_id' => 2,
            'price' => 1099.99,
            'average_rating' => 4.7,
            'total_reviews' => 7,
            'total_faqs' => 3,
            'department_id' => 3,
            'brand_id' => 1,
            'stock' => 50,
            'name' => 'Acer Predator Helios 300 Gaming Laptop PC, 15.6 Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4, 256GB PCIe NVMe SSD, Backlit Keyboard, PH315-52-78VL',
            'description' => 'Acer Predator Helios 300 PH315-52-78VL Gaming Laptop comes with these high level specs: 9th Generation Intel Core i7-9750H 6-Core Processor 2.6GHz with Turbo Boost Technology up to 4.5GHz, 15.6 Full HD (1920 x 1080) widescreen LED-backlit IPS display, 144Hz Refresh Rate, 16:9 aspect ratio, 3ms Overdrive Response Time, 300nit Brightness, 72% NTSC, NVIDIA GeForce GTX 1660 Ti with 6GB of dedicated GDDR6 VRAM, 16GB DDR4 2666MHz Memory, 256GB PCIe NVMe SSD (2 x PCIe M.2 Slots | 1 Slot Available), 1 - Available Hard Drive Bay, Waves MaxxAudio sound technology, featuring MaxxBass, MaxxVolume, MaxxDialog and hyper-realistic 3D Audio using Waves Nx, Acer True Harmony Technology, Two Built-in Stereo Speakers, Acer Purified.Voice technology with two built-in microphones, Killer Double Shot Pro Wireless-AC 1550 802.11ac WiFi featuring 2x2 MU-MIMO technology (Dual-Band 2.4GHz and 5GHz), Killer Ethernet E2500 10/100/1000 Gigabit Ethernet LAN, Bluetooth 5.0, HD Webcam (1280 x 720) supporting Super High Dynamic Range (SHDR), 1 - USB 3.1 Type C Gen 2 port (up to 10 Gbps), 3 - USB 3.1 Gen 1 Ports (One with Power-off Charging), 1 - HDMI 2.0 Port with HDCP Support, 1 - Mini Display Port 1.4, Backlit Keyboard, Lithium Ion Battery, Up to 6-hours Battery Life, 5.07 lbs. | 2.3 kg (system unit only) (NH.Q5MAA.001)',
        ]);

        ProductImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-images/p44.jpg',
            'url' => '/storage/product-images/p44.jpg',
            'original_name' => 'p44.jpg',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-images/p45.jpg',
            'url' => '/storage/product-images/p45.jpg',
            'original_name' => 'p45.jpg',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-images/p46.jpg',
            'url' => '/storage/product-images/p46.jpg',
            'original_name' => 'p46.jpg',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-images/p47.jpg',
            'url' => '/storage/product-images/p47.jpg',
            'original_name' => 'p47.jpg',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-images/p48.jpg',
            'url' => '/storage/product-images/p48.jpg',
            'original_name' => 'p48.jpg',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'disk' => 'public',
            'path' => 'product-images/p49.jpg',
            'url' => '/storage/product-images/p49.jpg',
            'original_name' => 'p49.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 399,
            'average_rating' => 4,
            'total_reviews' => 432,
            'total_faqs' => 51,
            'department_id' => 4,
            'brand_id' => 7,
            'stock' => 50,
            'name' => 'Oculus Quest All-in-one VR Gaming Headset',
            'description' => 'Oculus Quest is an all-in-one gaming system for virtual reality. No wires. No PC. Just set up with the Oculus mobile app, and you are free to explore VR from almost anywhere. Sensors inside the headset precisely track your movements and instantly translate them into VR, while helping you steer clear of nearby objects. And with Oculus Touch controllers, your hands are in the game, so you can see your every gesture and feel the power of every impact. Take VR gaming to the next level. And everywhere else. Setup requires an iPhone(iOS 10 or higher) or Android(6.0 Marshmallow or higher) smartphone, the Oculus App (free download), 802.11 b/g/n wireless Internet access, and an Oculus account.',
        ]);

        ProductImage::create([
            'product_id' => 2,
            'disk' => 'public',
            'path' => 'product-images/p11.jpg',
            'url' => '/storage/product-images/p11.jpg',
            'original_name' => 'p11.jpg',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'disk' => 'public',
            'path' => 'product-images/p15.jpg',
            'url' => '/storage/product-images/p15.jpg',
            'original_name' => 'p15.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 17.98,
            'average_rating' => 4,
            'total_reviews' => 75,
            'total_faqs' => 68,
            'department_id' => 4,
            'brand_id' => 8,
            'stock' => 50,
            'name' => 'WIOR PS4 Wired Controller Dual Vibration Shock Game Handle USB Joystick Gamepad with 2M/79IN Cable for Playstation 4/PS4 Slim/PS4 Pro and PC(Windows 7/8 / 10) - Black',
            'description' => 'Oculus Quest is an all-in-one gaming system for virtual reality. No wires. No PC. Just set up with the Oculus mobile app, and you are free to explore VR from almost anywhere. Sensors inside the headset precisely track your movements and instantly translate them into VR, while helping you steer clear of nearby objects. And with Oculus Touch controllers, your hands are in the game, so you can see your every gesture and feel the power of every impact. Take VR gaming to the next level. And everywhere else. Setup requires an iPhone(iOS 10 or higher) or Android(6.0 Marshmallow or higher) smartphone, the Oculus App (free download), 802.11 b/g/n wireless Internet access, and an Oculus account.',
        ]);

        ProductImage::create([
            'product_id' => 3,
            'disk' => 'public',
            'path' => 'product-images/p12.jpg',
            'url' => '/storage/product-images/p12.jpg',
            'original_name' => 'p12.jpg',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'disk' => 'public',
            'path' => 'product-images/p14.jpg',
            'url' => '/storage/product-images/p14.jpg',
            'original_name' => 'p14.jpg',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'disk' => 'public',
            'path' => 'product-images/p19.jpg',
            'url' => '/storage/product-images/p19.jpg',
            'original_name' => 'p19.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 39.99,
            'average_rating' => 4,
            'total_reviews' => 455,
            'total_faqs' => 71,
            'department_id' => 6,
            'brand_id' => 9,
            'stock' => 50,
            'name' => 'Darksiders Genesis - PlayStation 4',
            'description' => 'From the Dawn of creation, the Council has maintained the balance across existence. Carrying out their orders are the Horsemen, nephilim (powerful beings spawned from the unnatural Union of Angels and demons) who have pledged themselves to the Council and been granted immense power. However, this power came at a tragic cost: the Horsemen were ordered to use their newfound strength to wipe out the rest of their kind. What followed was a bloody battle on Eden where the Horsemen, obeying the will of the Council, annihilated the nephilim. Still reeling from the events on Eden, war and strife have been given a new assignment -- lucifer, the enigmatic and deceptive demon King, has been plotting to upset the balance by granting power to master demons throughout Hell. War and strife must hunt down these Masters, gather information, and ultimately fight their way through a tangled, demonic conspiracy that threatens to forever upset the balance and unravel all of creation. Darksiders: Genesis is an action/adventure that tears its way through hordes of demons, Angels, and everything in-between on its way to Hell and back with guns blazing and swords swinging. Genesis gives players their first look at the world of darkness before the events of the original game, as well as introduces the Horseman strife.',
        ]);

        ProductImage::create([
            'product_id' => 4,
            'disk' => 'public',
            'path' => 'product-images/p13.jpg',
            'url' => '/storage/product-images/p13.jpg',
            'original_name' => 'p13.jpg',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 17.98,
            'average_rating' => 4,
            'total_reviews' => 124,
            'total_faqs' => 65,
            'department_id' => 4,
            'brand_id' => 8,
            'stock' => 50,
            'name' => 'WIOR PS4 Wired Controller Dual Vibration Shock Game Handle USB Joystick Gamepad with 2M/79IN Cable for Playstation 4/PS4 Slim/PS4 Pro and PC(Windows 7/8 / 10) - Black',
            'description' => 'Oculus Quest is an all-in-one gaming system for virtual reality. No wires. No PC. Just set up with the Oculus mobile app, and you are free to explore VR from almost anywhere. Sensors inside the headset precisely track your movements and instantly translate them into VR, while helping you steer clear of nearby objects. And with Oculus Touch controllers, your hands are in the game, so you can see your every gesture and feel the power of every impact. Take VR gaming to the next level. And everywhere else. Setup requires an iPhone(iOS 10 or higher) or Android(6.0 Marshmallow or higher) smartphone, the Oculus App (free download), 802.11 b/g/n wireless Internet access, and an Oculus account.',
        ]);

        ProductImage::create([
            'product_id' => 5,
            'disk' => 'public',
            'path' => 'product-images/p14.jpg',
            'url' => '/storage/product-images/p14.jpg',
            'original_name' => 'p14.jpg',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'disk' => 'public',
            'path' => 'product-images/p12.jpg',
            'url' => '/storage/product-images/p12.jpg',
            'original_name' => 'p12.jpg',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'disk' => 'public',
            'path' => 'product-images/p14.jpg',
            'url' => '/storage/product-images/p14.jpg',
            'original_name' => 'p14.jpg',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'disk' => 'public',
            'path' => 'product-images/p19.jpg',
            'url' => '/storage/product-images/p19.jpg',
            'original_name' => 'p19.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 399,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 4,
            'brand_id' => 7,
            'stock' => 50,
            'name' => 'Oculus Quest All-in-one VR Gaming Headset',
            'description' => 'Oculus Quest is an all-in-one gaming system for virtual reality. No wires. No PC. Just set up with the Oculus mobile app, and you are free to explore VR from almost anywhere. Sensors inside the headset precisely track your movements and instantly translate them into VR, while helping you steer clear of nearby objects. And with Oculus Touch controllers, your hands are in the game, so you can see your every gesture and feel the power of every impact. Take VR gaming to the next level. And everywhere else. Setup requires an iPhone(iOS 10 or higher) or Android(6.0 Marshmallow or higher) smartphone, the Oculus App (free download), 802.11 b/g/n wireless Internet access, and an Oculus account.',
        ]);

        ProductImage::create([
            'product_id' => 6,
            'disk' => 'public',
            'path' => 'product-images/p15.jpg',
            'url' => '/storage/product-images/p15.jpg',
            'original_name' => 'p15.jpg',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'disk' => 'public',
            'path' => 'product-images/p11.jpg',
            'url' => '/storage/product-images/p11.jpg',
            'original_name' => 'p11.jpg',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'disk' => 'public',
            'path' => 'product-images/p15.jpg',
            'url' => '/storage/product-images/p15.jpg',
            'original_name' => 'p15.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 39.99,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 6,
            'brand_id' => 9,
            'stock' => 50,
            'name' => 'Darksiders Genesis - PlayStation 4',
            'description' => 'From the Dawn of creation, the Council has maintained the balance across existence. Carrying out their orders are the Horsemen, nephilim (powerful beings spawned from the unnatural Union of Angels and demons) who have pledged themselves to the Council and been granted immense power. However, this power came at a tragic cost: the Horsemen were ordered to use their newfound strength to wipe out the rest of their kind. What followed was a bloody battle on Eden where the Horsemen, obeying the will of the Council, annihilated the nephilim. Still reeling from the events on Eden, war and strife have been given a new assignment -- lucifer, the enigmatic and deceptive demon King, has been plotting to upset the balance by granting power to master demons throughout Hell. War and strife must hunt down these Masters, gather information, and ultimately fight their way through a tangled, demonic conspiracy that threatens to forever upset the balance and unravel all of creation. Darksiders: Genesis is an action/adventure that tears its way through hordes of demons, Angels, and everything in-between on its way to Hell and back with guns blazing and swords swinging. Genesis gives players their first look at the world of darkness before the events of the original game, as well as introduces the Horseman strife.',
        ]);

        ProductImage::create([
            'product_id' => 7,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 39.99,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 6,
            'brand_id' => 9,
            'stock' => 50,
            'name' => 'Darksiders Genesis - PlayStation 4',
            'description' => 'From the Dawn of creation, the Council has maintained the balance across existence. Carrying out their orders are the Horsemen, nephilim (powerful beings spawned from the unnatural Union of Angels and demons) who have pledged themselves to the Council and been granted immense power. However, this power came at a tragic cost: the Horsemen were ordered to use their newfound strength to wipe out the rest of their kind. What followed was a bloody battle on Eden where the Horsemen, obeying the will of the Council, annihilated the nephilim. Still reeling from the events on Eden, war and strife have been given a new assignment -- lucifer, the enigmatic and deceptive demon King, has been plotting to upset the balance by granting power to master demons throughout Hell. War and strife must hunt down these Masters, gather information, and ultimately fight their way through a tangled, demonic conspiracy that threatens to forever upset the balance and unravel all of creation. Darksiders: Genesis is an action/adventure that tears its way through hordes of demons, Angels, and everything in-between on its way to Hell and back with guns blazing and swords swinging. Genesis gives players their first look at the world of darkness before the events of the original game, as well as introduces the Horseman strife.',
        ]);

        ProductImage::create([
            'product_id' => 8,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 39.99,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 6,
            'brand_id' => 9,
            'stock' => 50,
            'name' => 'Darksiders Genesis - PlayStation 4',
            'description' => 'From the Dawn of creation, the Council has maintained the balance across existence. Carrying out their orders are the Horsemen, nephilim (powerful beings spawned from the unnatural Union of Angels and demons) who have pledged themselves to the Council and been granted immense power. However, this power came at a tragic cost: the Horsemen were ordered to use their newfound strength to wipe out the rest of their kind. What followed was a bloody battle on Eden where the Horsemen, obeying the will of the Council, annihilated the nephilim. Still reeling from the events on Eden, war and strife have been given a new assignment -- lucifer, the enigmatic and deceptive demon King, has been plotting to upset the balance by granting power to master demons throughout Hell. War and strife must hunt down these Masters, gather information, and ultimately fight their way through a tangled, demonic conspiracy that threatens to forever upset the balance and unravel all of creation. Darksiders: Genesis is an action/adventure that tears its way through hordes of demons, Angels, and everything in-between on its way to Hell and back with guns blazing and swords swinging. Genesis gives players their first look at the world of darkness before the events of the original game, as well as introduces the Horseman strife.',
        ]);

        ProductImage::create([
            'product_id' => 9,
            'disk' => 'public',
            'path' => 'product-images/p18.jpg',
            'url' => '/storage/product-images/p18.jpg',
            'original_name' => 'p18.jpg',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'disk' => 'public',
            'path' => 'product-images/p16.jpg',
            'url' => '/storage/product-images/p16.jpg',
            'original_name' => 'p16.jpg',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'disk' => 'public',
            'path' => 'product-images/p17.jpg',
            'url' => '/storage/product-images/p17.jpg',
            'original_name' => 'p17.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 399,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 4,
            'brand_id' => 10,
            'stock' => 50,
            'name' => 'PlayStation 4',
            'description' => 'Oculus Quest is an all-in-one gaming system for virtual reality. No wires. No PC. Just set up with the Oculus mobile app, and you are free to explore VR from almost anywhere. Sensors inside the headset precisely track your movements and instantly translate them into VR, while helping you steer clear of nearby objects. And with Oculus Touch controllers, your hands are in the game, so you can see your every gesture and feel the power of every impact. Take VR gaming to the next level. And everywhere else. Setup requires an iPhone(iOS 10 or higher) or Android(6.0 Marshmallow or higher) smartphone, the Oculus App (free download), 802.11 b/g/n wireless Internet access, and an Oculus account.',
        ]);

        ProductImage::create([
            'product_id' => 10,
            'disk' => 'public',
            'path' => 'product-images/p19.jpg',
            'url' => '/storage/product-images/p19.jpg',
            'original_name' => 'p19.jpg',
        ]);
        ProductImage::create([
            'product_id' => 10,
            'disk' => 'public',
            'path' => 'product-images/p12.jpg',
            'url' => '/storage/product-images/p12.jpg',
            'original_name' => 'p12.jpg',
        ]);
        ProductImage::create([
            'product_id' => 10,
            'disk' => 'public',
            'path' => 'product-images/p14.jpg',
            'url' => '/storage/product-images/p14.jpg',
            'original_name' => 'p14.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 169,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 8,
            'brand_id' => 2,
            'stock' => 50,
            'name' => 'Apple Watch Series 3 (GPS, 42mm) - Space Gray Aluminium Case with Black Sport Band',
            'description' => 'GLONASS, Galileo, and QZSS, Barometric altimeter, Optical heart sensor, Accelerometer and gyroscope, Ion-X strengthened glass, Composite back',
        ]);

        ProductImage::create([
            'product_id' => 11,
            'disk' => 'public',
            'path' => 'product-images/p20.jpg',
            'url' => '/storage/product-images/p20.jpg',
            'original_name' => 'p20.jpg',
        ]);
        ProductImage::create([
            'product_id' => 11,
            'disk' => 'public',
            'path' => 'product-images/p24.jpg',
            'url' => '/storage/product-images/p24.jpg',
            'original_name' => 'p24.jpg',
        ]);
        ProductImage::create([
            'product_id' => 11,
            'disk' => 'public',
            'path' => 'product-images/p25.jpg',
            'url' => '/storage/product-images/p25.jpg',
            'original_name' => 'p25.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 7,
            'brand_id' => 8,
            'stock' => 50,
            'name' => 'Electronic1 Electronic1',
            'description' => 'GLONASS, Galileo, and QZSS, Barometric altimeter, Optical heart sensor, Accelerometer and gyroscope, Ion-X strengthened glass, Composite back',
        ]);

        ProductImage::create([
            'product_id' => 12,
            'disk' => 'public',
            'path' => 'product-images/p21.jpg',
            'url' => '/storage/product-images/p21.jpg',
            'original_name' => 'p21.jpg',
        ]);
        ProductImage::create([
            'product_id' => 12,
            'disk' => 'public',
            'path' => 'product-images/p22.jpg',
            'url' => '/storage/product-images/p22.jpg',
            'original_name' => 'p22.jpg',
        ]);
        ProductImage::create([
            'product_id' => 12,
            'disk' => 'public',
            'path' => 'product-images/p23.jpg',
            'url' => '/storage/product-images/p23.jpg',
            'original_name' => 'p23.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 7,
            'brand_id' => 8,
            'stock' => 50,
            'name' => 'Electronic1 Electronic2',
            'description' => 'GLONASS, Galileo, and QZSS, Barometric altimeter, Optical heart sensor, Accelerometer and gyroscope, Ion-X strengthened glass, Composite back',
        ]);

        ProductImage::create([
            'product_id' => 13,
            'disk' => 'public',
            'path' => 'product-images/p22.jpg',
            'url' => '/storage/product-images/p22.jpg',
            'original_name' => 'p22.jpg',
        ]);
        ProductImage::create([
            'product_id' => 13,
            'disk' => 'public',
            'path' => 'product-images/p21.jpg',
            'url' => '/storage/product-images/p21.jpg',
            'original_name' => 'p21.jpg',
        ]);
        ProductImage::create([
            'product_id' => 13,
            'disk' => 'public',
            'path' => 'product-images/p23.jpg',
            'url' => '/storage/product-images/p23.jpg',
            'original_name' => 'p23.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 7,
            'brand_id' => 8,
            'stock' => 50,
            'name' => 'Electronic1 Electronic3',
            'description' => 'GLONASS, Galileo, and QZSS, Barometric altimeter, Optical heart sensor, Accelerometer and gyroscope, Ion-X strengthened glass, Composite back',
        ]);

        ProductImage::create([
            'product_id' => 14,
            'disk' => 'public',
            'path' => 'product-images/p23.jpg',
            'url' => '/storage/product-images/p23.jpg',
            'original_name' => 'p23.jpg',
        ]);
        ProductImage::create([
            'product_id' => 14,
            'disk' => 'public',
            'path' => 'product-images/p21.jpg',
            'url' => '/storage/product-images/p21.jpg',
            'original_name' => 'p21.jpg',
        ]);
        ProductImage::create([
            'product_id' => 14,
            'disk' => 'public',
            'path' => 'product-images/p22.jpg',
            'url' => '/storage/product-images/p22.jpg',
            'original_name' => 'p22.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 199,
            'average_rating' => 4,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 8,
            'brand_id' => 2,
            'stock' => 50,
            'name' => 'Apple Watch Series 3 (GPS, 42mm) - Space Gray Aluminium Case with Black Sport Band',
            'description' => 'GLONASS, Galileo, and QZSS, Barometric altimeter, Optical heart sensor, Accelerometer and gyroscope, Ion-X strengthened glass, Composite back',
        ]);

        ProductImage::create([
            'product_id' => 15,
            'disk' => 'public',
            'path' => 'product-images/p24.jpg',
            'url' => '/storage/product-images/p24.jpg',
            'original_name' => 'p24.jpg',
        ]);
        ProductImage::create([
            'product_id' => 15,
            'disk' => 'public',
            'path' => 'product-images/p20.jpg',
            'url' => '/storage/product-images/p20.jpg',
            'original_name' => 'p20.jpg',
        ]);
        ProductImage::create([
            'product_id' => 15,
            'disk' => 'public',
            'path' => 'product-images/p25.jpg',
            'url' => '/storage/product-images/p25.jpg',
            'original_name' => 'p25.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 159,
            'average_rating' => 5,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 8,
            'brand_id' => 2,
            'stock' => 50,
            'name' => 'Apple Watch Series 3 (GPS, 42mm) - Space Gray Aluminium Case with Black Sport Band',
            'description' => 'GLONASS, Galileo, and QZSS, Barometric altimeter, Optical heart sensor, Accelerometer and gyroscope, Ion-X strengthened glass, Composite back',
        ]);

        ProductImage::create([
            'product_id' => 16,
            'disk' => 'public',
            'path' => 'product-images/p25.jpg',
            'url' => '/storage/product-images/p25.jpg',
            'original_name' => 'p25.jpg',
        ]);
        ProductImage::create([
            'product_id' => 16,
            'disk' => 'public',
            'path' => 'product-images/p20.jpg',
            'url' => '/storage/product-images/p20.jpg',
            'original_name' => 'p20.jpg',
        ]);
        ProductImage::create([
            'product_id' => 16,
            'disk' => 'public',
            'path' => 'product-images/p24.jpg',
            'url' => '/storage/product-images/p24.jpg',
            'original_name' => 'p24.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 3,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 7,
            'brand_id' => 8,
            'stock' => 50,
            'name' => 'Electronic4 Electronic4',
            'description' => 'GLONASS, Galileo, and QZSS, Barometric altimeter, Optical heart sensor, Accelerometer and gyroscope, Ion-X strengthened glass, Composite back',
        ]);

        ProductImage::create([
            'product_id' => 17,
            'disk' => 'public',
            'path' => 'product-images/p26.jpg',
            'url' => '/storage/product-images/p26.jpg',
            'original_name' => 'p26.jpg',
        ]);
        ProductImage::create([
            'product_id' => 17,
            'disk' => 'public',
            'path' => 'product-images/p28.jpg',
            'url' => '/storage/product-images/p28.jpg',
            'original_name' => 'p28.jpg',
        ]);
        ProductImage::create([
            'product_id' => 17,
            'disk' => 'public',
            'path' => 'product-images/p33.jpg',
            'url' => '/storage/product-images/p33.jpg',
            'original_name' => 'p33.jpg',
        ]);
        ProductImage::create([
            'product_id' => 17,
            'disk' => 'public',
            'path' => 'product-images/p34.jpg',
            'url' => '/storage/product-images/p34.jpg',
            'original_name' => 'p34.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 35.99,
            'average_rating' => 2,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 7,
            'brand_id' => 8,
            'stock' => 50,
            'name' => 'Vera Bradley Signature Cotton Lunch Bunch Lunch Bag',
            'description' => 'Fall is officially here, and we could not be more excited! Between the changing colors, cooling weather and pumpkin-flavored everything, autumn may be one of our favorite seasons. And we have some fall fashioned to match the changing seasons with our iconic and colorful patterns. Our genuine Vera Bradley Signature Cotton Lunch Bunch is no exception to the rules of style, bringing you deluxe designs like only we can. Our machine washable Lunch Bunch Bag comes with a convenient carrying handle and wide zip closure for easy packing and use with an ID Window to ensure everyone knows these are your goodies. This lunch box and snack bag measures 9 inches high, 7.5 inches deep, and 4.25 inches wide and fits most standard sized frozen meal boxes, making it the perfect size to fit in your backpack or tote.',
        ]);

        ProductImage::create([
            'product_id' => 18,
            'disk' => 'public',
            'path' => 'product-images/p27.jpg',
            'url' => '/storage/product-images/p27.jpg',
            'original_name' => 'p27.jpg',
        ]);
        ProductImage::create([
            'product_id' => 18,
            'disk' => 'public',
            'path' => 'product-images/p30.jpg',
            'url' => '/storage/product-images/p30.jpg',
            'original_name' => 'p30.jpg',
        ]);
        ProductImage::create([
            'product_id' => 18,
            'disk' => 'public',
            'path' => 'product-images/p35.jpg',
            'url' => '/storage/product-images/p35.jpg',
            'original_name' => 'p35.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 1,
            'total_reviews' => 110,
            'total_faqs' => 15,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 19,
            'disk' => 'public',
            'path' => 'product-images/p28.jpg',
            'url' => '/storage/product-images/p28.jpg',
            'original_name' => 'p28.jpg',
        ]);
        ProductImage::create([
            'product_id' => 19,
            'disk' => 'public',
            'path' => 'product-images/p31.jpg',
            'url' => '/storage/product-images/p31.jpg',
            'original_name' => 'p31.jpg',
        ]);
        ProductImage::create([
            'product_id' => 19,
            'disk' => 'public',
            'path' => 'product-images/p32.jpg',
            'url' => '/storage/product-images/p32.jpg',
            'original_name' => 'p32.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 0,
            'total_reviews' => 110,
            'total_faqs' => 15,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 20,
            'disk' => 'public',
            'path' => 'product-images/p29.jpg',
            'url' => '/storage/product-images/p29.jpg',
            'original_name' => 'p29.jpg',
        ]);
        ProductImage::create([
            'product_id' => 20,
            'disk' => 'public',
            'path' => 'product-images/p31.jpg',
            'url' => '/storage/product-images/p31.jpg',
            'original_name' => 'p31.jpg',
        ]);
        ProductImage::create([
            'product_id' => 20,
            'disk' => 'public',
            'path' => 'product-images/p32.jpg',
            'url' => '/storage/product-images/p32.jpg',
            'original_name' => 'p32.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 3,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 21,
            'disk' => 'public',
            'path' => 'product-images/p30.jpg',
            'url' => '/storage/product-images/p30.jpg',
            'original_name' => 'p30.jpg',
        ]);
        ProductImage::create([
            'product_id' => 21,
            'disk' => 'public',
            'path' => 'product-images/p33.jpg',
            'url' => '/storage/product-images/p33.jpg',
            'original_name' => 'p33.jpg',
        ]);
        ProductImage::create([
            'product_id' => 21,
            'disk' => 'public',
            'path' => 'product-images/p34.jpg',
            'url' => '/storage/product-images/p34.jpg',
            'original_name' => 'p34.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 3,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 22,
            'disk' => 'public',
            'path' => 'product-images/p31.jpg',
            'url' => '/storage/product-images/p31.jpg',
            'original_name' => 'p31.jpg',
        ]);
        ProductImage::create([
            'product_id' => 22,
            'disk' => 'public',
            'path' => 'product-images/p30.jpg',
            'url' => '/storage/product-images/p30.jpg',
            'original_name' => 'p30.jpg',
        ]);
        ProductImage::create([
            'product_id' => 22,
            'disk' => 'public',
            'path' => 'product-images/p35.jpg',
            'url' => '/storage/product-images/p35.jpg',
            'original_name' => 'p35.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 3,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 23,
            'disk' => 'public',
            'path' => 'product-images/p32.jpg',
            'url' => '/storage/product-images/p32.jpg',
            'original_name' => 'p32.jpg',
        ]);
        ProductImage::create([
            'product_id' => 23,
            'disk' => 'public',
            'path' => 'product-images/p45.jpg',
            'url' => '/storage/product-images/p45.jpg',
            'original_name' => 'p45.jpg',
        ]);
        ProductImage::create([
            'product_id' => 23,
            'disk' => 'public',
            'path' => 'product-images/p46.jpg',
            'url' => '/storage/product-images/p46.jpg',
            'original_name' => 'p46.jpg',
        ]);
        ProductImage::create([
            'product_id' => 23,
            'disk' => 'public',
            'path' => 'product-images/p47.jpg',
            'url' => '/storage/product-images/p47.jpg',
            'original_name' => 'p47.jpg',
        ]);
        ProductImage::create([
            'product_id' => 23,
            'disk' => 'public',
            'path' => 'product-images/p48.jpg',
            'url' => '/storage/product-images/p48.jpg',
            'original_name' => 'p48.jpg',
        ]);
        ProductImage::create([
            'product_id' => 23,
            'disk' => 'public',
            'path' => 'product-images/p49.jpg',
            'url' => '/storage/product-images/p49.jpg',
            'original_name' => 'p49.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 3,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 24,
            'disk' => 'public',
            'path' => 'product-images/p33.jpg',
            'url' => '/storage/product-images/p33.jpg',
            'original_name' => 'p33.jpg',
        ]);
        ProductImage::create([
            'product_id' => 24,
            'disk' => 'public',
            'path' => 'product-images/p45.jpg',
            'url' => '/storage/product-images/p45.jpg',
            'original_name' => 'p45.jpg',
        ]);
        ProductImage::create([
            'product_id' => 24,
            'disk' => 'public',
            'path' => 'product-images/p46.jpg',
            'url' => '/storage/product-images/p46.jpg',
            'original_name' => 'p46.jpg',
        ]);
        ProductImage::create([
            'product_id' => 24,
            'disk' => 'public',
            'path' => 'product-images/p47.jpg',
            'url' => '/storage/product-images/p47.jpg',
            'original_name' => 'p47.jpg',
        ]);
        ProductImage::create([
            'product_id' => 24,
            'disk' => 'public',
            'path' => 'product-images/p48.jpg',
            'url' => '/storage/product-images/p48.jpg',
            'original_name' => 'p48.jpg',
        ]);
        ProductImage::create([
            'product_id' => 24,
            'disk' => 'public',
            'path' => 'product-images/p49.jpg',
            'url' => '/storage/product-images/p49.jpg',
            'original_name' => 'p49.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 3,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 25,
            'disk' => 'public',
            'path' => 'product-images/p34.jpg',
            'url' => '/storage/product-images/p34.jpg',
            'original_name' => 'p34.jpg',
        ]);
        ProductImage::create([
            'product_id' => 25,
            'disk' => 'public',
            'path' => 'product-images/p45.jpg',
            'url' => '/storage/product-images/p45.jpg',
            'original_name' => 'p45.jpg',
        ]);
        ProductImage::create([
            'product_id' => 25,
            'disk' => 'public',
            'path' => 'product-images/p46.jpg',
            'url' => '/storage/product-images/p46.jpg',
            'original_name' => 'p46.jpg',
        ]);
        ProductImage::create([
            'product_id' => 25,
            'disk' => 'public',
            'path' => 'product-images/p47.jpg',
            'url' => '/storage/product-images/p47.jpg',
            'original_name' => 'p47.jpg',
        ]);
        ProductImage::create([
            'product_id' => 25,
            'disk' => 'public',
            'path' => 'product-images/p48.jpg',
            'url' => '/storage/product-images/p48.jpg',
            'original_name' => 'p48.jpg',
        ]);
        ProductImage::create([
            'product_id' => 25,
            'disk' => 'public',
            'path' => 'product-images/p49.jpg',
            'url' => '/storage/product-images/p49.jpg',
            'original_name' => 'p49.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 10,
            'average_rating' => 3,
            'total_reviews' => 512,
            'total_faqs' => 63,
            'department_id' => 11,
            'brand_id' => 12,
            'stock' => 50,
            'name' => 'Vegetable Chopper',
            'description' => 'The Fullstar Vegetable Chopper is a versatile all-in-one kitchen tool that is perfect for preparing salads, salsa, onions, garlic and more. It delivers fast, consistent results and sports an impressive 4-cup (1.2L) capacity. Its space-saving design eliminates the need for bulky equipment in small kitchens while its catch tray minimizes messes. The clear body lets you monitor progress as you cut up carrots, cucumbers, squash, zucchini and spices like ginger. Because it requires no electricity, the Fullstar Vegetable Chopper can be used anywhere.',
        ]);

        ProductImage::create([
            'product_id' => 26,
            'disk' => 'public',
            'path' => 'product-images/p35.jpg',
            'url' => '/storage/product-images/p35.jpg',
            'original_name' => 'p35.jpg',
        ]);

        Product::create([
            'main_seller_id' => 2,
            'price' => 1590.99,
            'average_rating' => 4,
            'total_reviews' => 402,
            'total_faqs' => 33,
            'department_id' => 3,
            'brand_id' => 2,
            'stock' => 50,
            'name' => 'Apple Predator Gaming Laptop PC, 15.6 Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4',
            'description' => 'Apple Predator PH315-52-78VL Gaming Laptop comes with these high level specs: 9th Generation Intel Core i7-9750H 6-Core Processor 2.6GHz with Turbo Boost Technology up to 4.5GHz, 15.6 Full HD (1920 x 1080) widescreen LED-backlit IPS display, 144Hz Refresh Rate, 16:9 aspect ratio, 3ms Overdrive Response Time, 300nit Brightness, 72% NTSC, NVIDIA GeForce GTX 1660 Ti with 6GB of dedicated GDDR6 VRAM, 16GB DDR4 2666MHz Memory, 256GB PCI webcam (1280 x 720) supporting Super High Dynamic Range (SHDR), 1 - USB 3.1 Type C Gen 2 port (up to 10 Gbps), 3 - USB 3.1 Gen 1 Ports (One with Power-off Charging), 1 - HDMI 2.0 Port with HDCP Support, 1 - Mini Display Port 1.4, Backlit Keyboard, Lithium Ion Battery, Up to 6-hours Battery Life, 5.07 lbs. | 2.3 kg (system unit only) (NH.Q5MAA.001)',
        ]);

        ProductImage::create([
            'product_id' => 27,
            'disk' => 'public',
            'path' => 'product-images/p45.jpg',
            'url' => '/storage/product-images/p45.jpg',
            'original_name' => 'p45.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 1190.99,
            'average_rating' => 3,
            'total_reviews' => 410,
            'total_faqs' => 42,
            'department_id' => 3,
            'brand_id' => 3,
            'stock' => 50,
            'name' => 'Predator Gaming Laptop PC, 15.6 Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4',
            'description' => 'Predator PH315-52-78VL Gaming Laptop comes with these high level specs: 9th Generation Intel Core i7-9750H 6-Core Processor 2.6GHz with Turbo Boost Technology up to 4.5GHz, 15.6 Full HD (1920 x 1080) widescreen LED-backlit IPS display, 144Hz Refresh Rate, 16:9 aspect ratio, 3ms Overdrive Response Time, 300nit Brightness, 72% NTSC, NVIDIA GeForce GTX 1660 Ti with 6GB of dedicated GDDR6 VRAM, 16GB DDR4 2666MHz Memory, 256GB PCI webcam (1280 x 720) supporting Super High Dynamic Range (SHDR), 1 - USB 3.1 Type C Gen 2 port (up to 10 Gbps), 3 - USB 3.1 Gen 1 Ports (One with Power-off Charging), 1 - HDMI 2.0 Port with HDCP Support, 1 - Mini Display Port 1.4, Backlit Keyboard, Lithium Ion Battery, Up to 6-hours Battery Life, 5.07 lbs. | 2.3 kg (system unit only) (NH.Q5MAA.001)',
        ]);

        ProductImage::create([
            'product_id' => 28,
            'disk' => 'public',
            'path' => 'product-images/p46.jpg',
            'url' => '/storage/product-images/p46.jpg',
            'original_name' => 'p46.jpg',
        ]);

        Product::create([
            'main_seller_id' => 4,
            'price' => 1500,
            'average_rating' => 4,
            'total_reviews' => 412,
            'total_faqs' => 33,
            'department_id' => 3,
            'brand_id' => 4,
            'stock' => 50,
            'name' => 'Gaming Laptop PC, 15.6 Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4',
            'description' => 'Predator PH315-52-78VL Gaming Laptop comes with these high level specs: 9th Generation Intel Core i7-9750H 6-Core Processor 2.6GHz with Turbo Boost Technology up to 4.5GHz, 15.6 Full HD (1920 x 1080) widescreen LED-backlit IPS display, 144Hz Refresh Rate, 16:9 aspect ratio, 3ms Overdrive Response Time, 300nit Brightness, 72% NTSC, NVIDIA GeForce GTX 1660 Ti with 6GB of dedicated GDDR6 VRAM, 16GB DDR4 2666MHz Memory, 256GB PCI webcam (1280 x 720) supporting Super High Dynamic Range (SHDR), 1 - USB 3.1 Type C Gen 2 port (up to 10 Gbps), 3 - USB 3.1 Gen 1 Ports (One with Power-off Charging), 1 - HDMI 2.0 Port with HDCP Support, 1 - Mini Display Port 1.4, Backlit Keyboard, Lithium Ion Battery, Up to 6-hours Battery Life, 5.07 lbs. | 2.3 kg (system unit only) (NH.Q5MAA.001)',
        ]);

        ProductImage::create([
            'product_id' => 29,
            'disk' => 'public',
            'path' => 'product-images/p47.jpg',
            'url' => '/storage/product-images/p47.jpg',
            'original_name' => 'p47.jpg',
        ]);
    }
}
