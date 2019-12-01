<?php
namespace App\Http\Controllers;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
class IndexController {


    public function indexAction(){

        try{
            $connection = new AMQPStreamConnection('my-rabbit', 5672, 'guest', 'guest');
            $channel = $connection->channel();

            $channel->queue_declare('hello', false, false, false, false);

            $msg = new AMQPMessage('Hello World!');
            $channel->basic_publish($msg, '', 'hello');

            echo " [x] Sent 'Hello World!'\n";
            $channel->close();
            $connection->close();
        }catch (\Exception $e){
            var_dump($e->getMessage());
        }

    }
}