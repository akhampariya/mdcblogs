<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create([  'name' => 'Administrator', 'password' => bcrypt('secret'), 'email' => 'ajaykhampariya14@gmail.com', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'AJ', 'password' => bcrypt('secret'), 'email' => 'akhampariya@unomaha.edu', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Ammar Abid', 'password' => bcrypt('secret'), 'email' => 'aabid@unomaha.edu', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Javier Alba', 'password' => bcrypt('secret'), 'email' => 'ealba@unomaha.edu', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Shanshan Huang', 'password' => bcrypt('secret'), 'email' => 'shuang03@unomaha.edu', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();
        Role::create([ 'name' => 'admin', 'display_name' => 'Administrator', 'description' => 'User is allowed to manage and edit other users',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'pmanager', 'display_name' => 'Property Manager', 'description' => 'Property Manager is allowed to manage ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'bmanager', 'display_name' => 'Business Manager', 'description' => 'Business Manager is allowed to manage ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'staff', 'display_name' => 'Staff', 'description' => 'Staff is allowed to manage ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'tenant', 'display_name' => 'Tenant', 'description' => 'Tenant is allowed to manage ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'contractor', 'display_name' => 'Contractor', 'description' => 'Contractor is allowed Read access to ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();
        Permission::create([ 'name' => 'manage-users', 'display_name' => 'Manage Users', 'description' => 'User is allowed to add, edit and delete other users',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'manage-roles', 'display_name' => 'Manage Roles', 'description' => 'User is allowed to add, edit and delete roles',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'readonly-all', 'display_name' => 'Readonly', 'description' => 'User is allowed to read only access to ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class RoleUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role_user')->delete();

        $user = User::where('name', '=', 'Administrator')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'AJ')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Ammar Abid')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Javier Alba')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Shanshan Huang')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ 'role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()  ];
        DB::table('role_user')->insert($role_user);
    }
}

class UsersRolesPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUsers = Permission::where('name', '=', 'manage-users')->first();
        $manageRoles = Permission::where('name', '=', 'manage-roles')->first();
        $readonlyAll = Permission::where('name', '=', 'readonly-all')->first();

        $adminRole = Role::where('name', '=', 'admin')->first();
        $adminRole->attachPermissions(array($manageUsers, $manageRoles));

     //   $studentRole = Role::where('name', '=', 'student')->first();
     //   $studentRole->attachPermissions(array($readonlyAll));
		$tenantRole = Role::where('name', '=', 'tenant')->first();
		$tenantRole->attachPermissions(array($readonlyAll));
	}
}

