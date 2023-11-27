<?php

namespace App\Services;

use App\Services\Interfaces\PostServiceInterface;

use App\Repositories\Interfaces\PostRepositoryInterface;

class PostService implements PostServiceInterface
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /* Triển khai các phương thức trong PostServiceInterface */
    public function all($request){
        return $this->postRepository->all($request);
    }
    public function find($id){
        return $this->postRepository->find($id);
    }
    public function store($request){
        return $this->postRepository->store($request);
    }
    public function update($request, $id){
        return $this->postRepository->update($request,$id);
    }
    public function destroy($id){
        return $this->postRepository->destroy($id);
    }
}
