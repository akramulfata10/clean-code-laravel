<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

uses(TestCase::class)->in('Feature');
uses(LazilyRefreshDatabase::class)->in('Feature');

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});