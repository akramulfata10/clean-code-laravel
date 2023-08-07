<?php

use function Pest\Laravel\get;
use JustSteveKing\StatusCode\Http;

test('test api get posts index', function () {  
    get(route('api:v1:posts:index'))->assertStatus(Http::OK());
});