<?php 
namespace App\Repositories\Interfaces;
//RepositoryInterface cùng cấp, ko cần use
interface PostRepositoryInterface extends RepositoryInterface{
    function paginate($request);
}