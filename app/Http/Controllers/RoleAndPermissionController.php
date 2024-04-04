<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionController extends Controller
{
    public function create(){
        //CREATE A NEW ROLE
        $sellerRole = Role::create(['name' => 'seller']);
        $buyerRole = Role::create(['name' =>'customer']);

        //Create A Permission
        $sellerAdd = Permission::create(['name' => 'add items']);
        $sellerEdit = Permission::create(['name' => 'edit items']);
        $sellerDelete = Permission::create(['name' => 'delete items']);

        $customerPermission = Permission::create(['name' =>'buy items']);

        //Assign A Permission To A Role
        $sellerRole->givePermissionTo($sellerAdd);
        $sellerRole->givePermissionTo($sellerEdit);
        $sellerRole->givePermissionTo($sellerDelete);

        $buyerRole->givePermissionTo($customerPermission);


    }
}
