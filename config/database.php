<?php

function getDatabaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "pgsql:host=localhost;port=5432;dbname=mvc_app_test",
                "username" => "postgres",
                "password" => ""
            ],
            "prod" => [
                "url" => "pgsql:host=localhost:5432;dbname=mvc_app",
                "username" => "postgres",
                "password" => ""
            ]
        ]
    ];
}