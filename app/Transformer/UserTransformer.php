<?php
 
namespace App\Transformer;
 
class UserTransformer {
 
    public function transform($user) {
        return [
            'id' => $user->id,
            'fname' => $user->fname,
			'lname' => $user->lname,
            
        ];
    }
 
}