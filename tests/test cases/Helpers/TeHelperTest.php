<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\TeHelper;

class TeHelperTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_24_hours_difference_will_expire_at()
    {
         $this->assertEquals("2022-06-30 19:30:00" , willExpireAt("2022-06-30 19:00:00", '2022-06-30 18:00:00'));
    }
     
    public function test_25_to_72_hours_difference_will_expire_at()
    {
        $this->assertEquals("2022-06-29 11:41:22" , willExpireAt("2022-06-30 19:41:22", '2022-06-28 19:41:22'));
    }

    public function test_90_hours_difference_will_expire_at()
    {
        $this->assertEquals("2022-06-30 19:00:00" , willExpireAt("2022-06-30 19:00:00", '2022-06-27 10:30:00'));
    }

    public function test_else_hours_difference_will_expire_at(){
        $this->assertEquals("2022-06-28 19:00:00" , willExpireAt("2022-06-30 19:00:00", '2022-06-26 19:30:00'));
    }


}
