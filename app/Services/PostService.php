<?php

namespace App\Services;

use App\Repos\PostRepository;
use InvalidArgumentException;
use Illuminate\Support\Facades\Validator;

class PostService
{
    protected $postRepo;

    public function __construct(PostRepository $postRepo){
        $this->postRepo = $postRepo;
    }

    public function getAll(){
        return $this->postRepo->getAll();
    }

    public function store($data){
        $valid = Validator::make($data, [
            'title' => 'required',
            'description' => 'required',
        ]);

        if($valid->fails()){
            throw new InvalidArgumentException($valid->errors()->first());
        }

        $result = $this->postRepo->save($data);

        return $result;
    }
}
