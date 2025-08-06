<?php

namespace App\Models;

class Job {
    public static function all(): array {
        return [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "description" => "Design and develop high-quality software
                applications, collaborating with teams and ensuring efficient
                solutions.",
            ],
            [
                "id" => 2,
                "title" => "Marketing Specialist",
                "description" => "Develop and execute marketing campaigns, conduct
                market research, and drive brand engagement.",
            ],
            [
                "id" => 3,
                "title" => "Customer Support Representative",
                "description" => "Provide excellent customer service, troubleshoot
                customer satisfaction.",
            ],
        ];
    }
}