<?php

$redis = new Redis();

$host = getenv( 'VIRTUAL_HOST' );
$connected = $redis->connect( sprintf( 'redis.%s', $host ), 6379 );

echo sprintf(
	'<p style="font-size:45px; text-align: center; margin-top: 100px;">Redis is %s</p>',
	$connected ? 'connected' : 'not connected'
);
