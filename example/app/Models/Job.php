<?php
namespace App\Models;

class job {
    public static function all(): array
    {
        return [
        [
            'id' => 1,
            'name' => 'Teacher',
            'salary' => '€00,02'
        ],
        [
            'id' => 2,
            'name' => 'Software defeloper',
            'salary' => '€0,01'
        ]
        ];
    }
    public static function find(int $id)
    {
        $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);
    }
}
?>