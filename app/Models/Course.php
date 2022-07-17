<?php

namespace App\Models;


class Course 
{
    private static $Courses = [
        [
            "title" => "Tahsin Tahfidz",
            "slug" => "tahshin-tahfidz",
            "class" => "agama",
            "img" => "meeting-01.jpg",
            "value" => "Rp.50000",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim fuga illum distinctio itaque nostrum perferendis placeat eius, praesentium repudiandae, ducimus explicabo atque reiciendis rerum quos magni a ex modi.
            ",

        ],
        [
            "title" => "Bahasa Inggris",
            "slug" => "bahasa-inggris",
            "class" => "umum",
            "img" => "meeting-02.jpg",
            "value" => "Rp.70000",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim fuga illum distinctio itaque nostrum perferendis placeat eius, praesentium repudiandae, ducimus explicabo atque reiciendis rerum quos magni a ex modi.
            ",

        ],
        [
            "title" => "Bahasa Arab",
            "slug" => "Bahasa-arab",
            "class" => "agama",
            "img" => "meeting-03.jpg",
            "value" => "Rp.50000",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim fuga illum distinctio itaque nostrum perferendis placeat eius, praesentium repudiandae, ducimus explicabo atque reiciendis rerum quos magni a ex modi.
            ",

        ]
    ];

    public static function all()
    {
        return collect(self::$Courses);
    }

    public static function find($slug)
    {
        $sigle_course = static::all();
        // $course = [];
        // foreach($sigle_course as $c){
        //     if($c['slug'] === $slug){
        //         $course = $c;
        //     }
        // }
        // return $course;
        return $sigle_course->firstWhere('slug', $slug);
    }
}
