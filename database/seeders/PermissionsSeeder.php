<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
// use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = config('essentials.permissions');
        foreach ($permissions as $key => $value) {
            foreach ($permissions[$key] as $permission) {
                $find = Permission::where('name', $permission)->first();
               if(!$find){
                    Permission::updateOrCreate(['name' => $permission,'permission_type'=>$key, 'guard_name' => 'web']);
                    
                }
            }
        } 
    }
}
