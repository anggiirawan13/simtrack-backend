<?php

namespace App\Http\Responses;

class BaseResponse {

    protected $success;
    protected $messages;
    protected $data;
    
    public function __construct($success, $messages, $data)
    {
        $this->success = $success;
        $this->messages = $messages;
        $this->data = $data;
    }

    public function getResponse()
    {
        return response()->json([
            'success' => $this->success,
            'messages' => $this->messages,
            'data' => $this->data,
        ]);
    }

}