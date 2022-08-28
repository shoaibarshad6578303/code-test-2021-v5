<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repository\UserRepository;
use App\Models\User;

class UserRepositoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    


    // --------------------- create enable customr_role_id ------------------- //


    public function test_enable_user_create_with_customr_role_id_and_without_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'xyz',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }


    public function test_enable_user_create_with_customr_role_id_and_with_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_enable_user_create_with_customr_role_id_and_with_paid_and_new_town()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',

        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_enable_user_create_with_customr_role_id_and_with_paid_and_new_town_and_user_towns_projects()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',
            'user_towns_projects' => [1, 2, 3],
        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }
    
    // ---------------------- create disable user customr_role_id ---------------------- \\
    
    public function test_disable_user_create_with_customr_role_id_and_without_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'xyz',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_disable_user_create_with_customr_role_id_and_with_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_disable_user_create_with_customr_role_id_and_with_paid_and_new_town()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',

        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_disable_user_create_with_customr_role_id_and_with_paid_and_new_town_and_user_towns_projects()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',
            'user_towns_projects' => [1, 2, 3],
        ];

        $response = $userRepository->createOrUpdate($request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    // -------------------------- update user with translator_role_id ------------------- //
    
    
    public function test_enable_user_update_with_customr_role_id_and_without_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'xyz',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

       
        $request_data['id'] =   $response->id;

        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }


    public function test_enable_user_update_with_customr_role_id_and_with_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_enable_user_update_with_customr_role_id_and_with_paid_and_new_town()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',

        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;

        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_enable_user_update_with_customr_role_id_and_with_paid_and_new_town_and_user_towns_projects()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',
            'user_towns_projects' => [1, 2, 3],
        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }
    
    // ---------------------- update disable user customr_role_id ---------------------- \\
    
    public function test_disable_user_update_with_customr_role_id_and_without_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'xyz',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_disable_user_update_with_customr_role_id_and_with_paid()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_disable_user_update_with_customr_role_id_and_with_paid_and_new_town()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',

        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '1',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }

    public function test_disable_user_update_with_customr_role_id_and_with_paid_and_new_town_and_user_towns_projects()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',
            'user_towns_projects' => [1, 2, 3],
        ];

        $response = $userRepository->createOrUpdate(1, $request_data);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
        ];

        $request_data['id'] =   $response->id;
        $request_data['company_id'] =   $response->company_id;
        $request_data['department_id'] =   $response->department_id;
        $request_data['created_at'] =   $response->created_at;
        $request_data['updated_at'] =   $response->updated_at;

        $this->assertEquals($request_data, $response);

    }
    
    // ----------------- I am not writting test cases for translator_role_id  coz it would be repition of case due to poor function of createOrUpdate 
        //  ..........

        
    // -------------------- Update user id not found ------------------- //
 
    public function test_user_update_id_not_found()
    {
        $user = new User();
        $userRepository = new UserRepository($user);
        
        $request_data = [
            'role' => 1,
            'name' => 'abc',
            'department_id' => 1,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => 233,
            'phone' => 923838299292,
            'mobile' => 923838299294,
            'password' => "12345678",
            'status' => '0',
            'consumer_type' => 'paid',
            'company_id' => '',
            'username' => 'username',
            'post_code' => '0123',
            'address' => 'address',
            'city' => 'city',
            'town' => 'town',
            'country' => 'country',
            'reference' => 'yes',
            'additional_info' => 'xyz',
            'new_towns' => 'xyz',
            'user_towns_projects' => [1, 2, 3],
        ];

        $response = $userRepository->createOrUpdate(-1, $request_data);
        
        
        $this->assertEquals(false, $response);

    }
    


}
