<?php
    namespace App\Models;

    class TutorialListing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis aliquid inventore, 
                    illum quae itaque natus nihil animi est odit esse odio eum officia perferendis repudiandae id ratione assumenda facere praesentium et! 
                    Quos corporis rerum nostrum, officia adipisci incidunt, atque nobis optio nulla accusantium debitis? Nihil tempore perferendis assumenda praesentium autem?'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis aliquid inventore, 
                    illum quae itaque natus nihil animi est odit esse odio eum officia perferendis repudiandae id ratione assumenda facere praesentium et! 
                    Quos corporis rerum nostrum, officia adipisci incidunt, atque nobis optio nulla accusantium debitis? Nihil tempore perferendis assumenda praesentium autem?'
                ],
            ];
        }

        public static function find($id) {
            $listings = self::all();
            foreach($listings as $listing) {
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }